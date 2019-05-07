<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spending_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tb_name['spend'] = "wspending";
        $this->tb_name['upload'] = "wuploaddata";
        $this->tb_name['temp'] = "tmp_spend";
        $this->view_tb_name['view_spend'] = "v_spending";
    }
 
    /* ///////////////////////////////////////////////
    // wspending table and v_spending view functions
    */ ///////////////////////////////////////////////   
    public function add_spending_detail($data)
    {
        $this->db->insert($this->tb_name['spend'], $data);
        return $this->db->insert_id();
    }

    public function spending_list($post_data)
    {
        $this->_get_select_spending($post_data);
        $this->db->limit($post_data['length'], $post_data['start']);
        
        if ($query = $this->db->get()) {
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->spending_count_all(),
                'recordsFiltered' => $this->filtered_spending_count($post_data),
                'data' => $query->result_array(),
                'query' => $this->db->last_query()
            );
        } else {
            return false;
        }
    }

    private function _get_select_spending($post_data)
    {
        $select_columns = 'DT_RowId, '.$this->get_columns_name($post_data['columns']);
        $orders = $this->get_orders($post_data['order'], $post_data['columns']);

        $this->db->select($select_columns);
        $this->db->from($this->view_tb_name['view_spend']);
        
        foreach ($orders as $key => $value) {
            $this->db->order_by($key, strtoupper($value));
        }

        $this->_get_filtered_spending($post_data);
    }

    private function _get_filtered_spending($post_data)
    {
        $search_columns = $this->get_like_clauses($post_data['columns']);

        foreach ($search_columns as $key => $value) {
            if ($post_data['search']['value']) {
                if ($key === 0) {
                    $this->db->group_start();
                    $this->db->like($value, $post_data['search']['value']);
                } else {
                    $this->db->or_like($value, $post_data['search']['value']);
                }
                if ($key == array_keys($search_columns)[count($search_columns)-1]) {
                    $this->db->group_end();
                }
            }
        }

        $this->db->like('spend_date', $post_data['spend_year_month'], 'after');

        if ($post_data['spend_category_code'] != '') {
            $this->db->like('category_code', $post_data['spend_category_code'], 'after');
        }
    }

    public function spending_count_all()
    {
        return $this->db->count_all($this->tb_name['spend']);
    }

    public function filtered_spending_count($post_data)
    {
        $this->_get_select_spending($post_data);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function spending_delete($post_data) {
        $this->db->delete($this->tb_name['spend'], array('id'=> $post_data['id']));
    }

    public function get_spending_year_month() {
        $sql = "SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS spend_year_month
        FROM wspending ORDER BY spend_year_month DESC";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_summary_by_year_month($post_data) {
        $sql = "CALL sp_spend_year_month_by_category('". $post_data['spend_year_month']."')";
        if ($query = $this->db->query($sql)) {
            return $query;
        } else {
            return false;
        }     
    }

    /* ////////////////////////////////////
    // wcategory table functions
    */ /////////////////////////////////////
    public function getMainCategory($selection = CODE_SELECTION)
    {
        if ($selection == CODE_SELECTION) {
            $sql = "SELECT '' AS code_value, 'Select Main Category' as code_name
                    UNION
                    SELECT SUBSTR(cat_code,1,1) as code_value, cat_name as code_name FROM wcategory
                    WHERE cat_code LIKE '%00' ";
        } elseif ($selection == SPEND_YM_SELECTION) {
            $sql = "SELECT '' AS code_value, 'ALL' as code_name
                    UNION
                    SELECT SUBSTR(cat_code,1,1) as code_value, cat_name as code_name FROM wcategory
                    WHERE cat_code LIKE '%00' ";
        }

        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getSubCategory($mainCategory_code)
    {
        $sql = "SELECT cat_code as code_value, cat_name as code_name FROM wcategory
        WHERE SUBSTR(cat_code,2,2) != '00'
        AND cat_code LIKE '".$mainCategory_code."%' ";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    /* ///////////////////////////////////////////////
    // wuploaddata table functions
    */ ///////////////////////////////////////////////   

    public function add_upload_data(&$data) {
        //return $this->db->insert($this->tb_name['upload'], $data);

        if ($this->db->insert($this->tb_name['upload'], $data)) {
            $data['upload_id'] = $this->db->insert_id();
            if ($this->_load_csv_data($data)) {
                return true;
            } else {
                $data['error_msg'] = 'Fail to load upload file to database.';
                return false;
            }
        } else {
            $data['error_msg'] = 'Fail to insert the upload information.';
            return false;
        }
     }

    private function _load_csv_data($data) {
        /* //////////////////////////////////////////////////// */
        $this->db->trans_start();    
            

        /* /////////////////////////////////////////
            1. Prepare - empty temp table (tmp_spend)
        //////////////////////////////////////////*/
        $this->db->truncate($this->tb_name['temp']);
        /* /////////////////////////////////////////
            2. Load csv file to temp table
        //////////////////////////////////////////*/        
        $sql = "LOAD DATA INFILE '".$data['upload_file_name']."'
                INTO TABLE tmp_spend
                FIELDS TERMINATED BY ','
                LINES TERMINATED BY '\n'
                IGNORE 1 ROWS
                (@spend_date, spend_amount, spend_description, spend_category)
                SET spend_date = str_to_date(@spend_date,'%Y-%m-%d')";

       $this->db->query($sql);
        /* ////////////////////////////////////////////////////
            3. Transfer data from temp table to spending table 
        /////////////////////////////////////////////////////*/   
        $default_account = '1';

        $sql = "CALL sp_trans_spend_data('".$default_account."', '". $data['upload_user'] ."')";
        $this->db->query($sql);
        /* ////////////////////////////////////////////////////
            4. Update status  to upload data table 
        /////////////////////////////////////////////////////*/   
        $this->db->update($this->tb_name['upload'], array('upload_file_status' => 99), array('id' =>  $data['upload_id']));


        /* //////////////////////////////////////////////////// */
        $this->db->trans_complete();

        return $this->db->trans_status();
    }

}

/* End of file Spending_model.php */
