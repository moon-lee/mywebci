<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spending_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tb_name['spend'] = "wspending";
        $this->tb_name['upload'] = "wuploaddata";
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

    /* ////////////////////////////////////
    // wcategory table functions
    */ /////////////////////////////////////
    public function getMainCategory()
    {
        $sql = "SELECT SUBSTR(cat_code,1,1) as value, cat_name as text FROM wcategory
        WHERE cat_code LIKE '%00' ";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getSubCategory($mainCategory_code)
    {
        $sql = "SELECT cat_code as value, cat_name as text FROM wcategory
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

    public function add_upload_data($data) {
        //return $this->db->insert($this->tb_name['upload'], $data);

        if ($this->db->insert($this->tb_name['upload'], $data)) {
            $upload_id = $this->db->insert_id();
            if ($this->_load_csv_data($data['upload_file_name'])) {
                return $this->_update_upload_status(99, $upload_id);
            }
        }
        
        return false;
    }

    private function _load_csv_data($file_name) {
        $sql = "LOAD DATA INFILE '".$file_name."'
                INTO TABLE tmp_spend
                FIELDS TERMINATED BY ','
                LINES TERMINATED BY '\n'
                IGNORE 1 ROWS
                (@spend_date, spend_amount, spend_description, spend_category)
                SET spend_date = str_to_date(@spend_date,'%Y-%m-%d')";

        return $this->db->simple_query($sql);
    }

    private function _update_upload_status($status, $id) {
        return $this->db->update($this->tb_name['upload'], array('upload_file_status' => $status), array('id' =>  $id));
    }
}

/* End of file Spending_model.php */
