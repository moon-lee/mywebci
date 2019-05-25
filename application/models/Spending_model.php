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
                'query' => $this->db->last_query(),
                'main_summary_year_month'  => $this->get_Main_Summary($post_data),
                'sub_summary_year_month'  => $this->get_Sub_Summary($post_data),
                'financial_trends' => $this->get_Financial_Trends($post_data)
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

    public function spending_delete($post_data)
    {
        $this->db->delete($this->tb_name['spend'], array('id'=> $post_data['id']));
    }

    public function get_spending_year_month()
    {
        $sql = "SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS spend_year_month
        FROM wspending ORDER BY spend_year_month DESC";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_Main_Summary($post_data)
    {
        $generated_main_table = '';
        $generated_income_table = '';

        $CI = & get_instance();

        if ($post_data['spend_year_month'] != '') {
            $selected_category = $this->getMainCategory(CODE_NAME_SELECTION, $post_data['spend_category_code']);
            if ($selected_category) {
                $category_name = $selected_category[0]['code_name'];
            } else {
                $category_name = '';
            }

            $sql = "CALL masterCategory_summary('". $post_data['spend_year_month']."')";
            if ($query = $this->db->query($sql)) {
                mysqli_next_result($CI->db->conn_id);
                $query_result = $query->result_array();
                $query->free_result();
                $generated_main_table = $this->_generated_html_table_data(TABLE_MAIN_CAT, $query_result, $category_name);
            }

            $sql = "CALL income_summary('". $post_data['spend_year_month']."')";
            if ($query = $this->db->query($sql)) {
                mysqli_next_result($CI->db->conn_id);
                $query_result = $query->result_array();
                $query->free_result();
                $generated_income_table = $this->_generated_html_table_data(TABLE_INCOME, $query_result);
            }
        }

        return $generated_main_table.$generated_income_table;
    }

    public function get_Sub_Summary($post_data)
    {
        $generated_sub_table ='';
        $CI = & get_instance();

        if ($post_data['spend_category_code'] != '') {
            if ($this->_validate_subcategory_from_spend($post_data['spend_year_month'], $post_data['spend_category_code'])) {
                $sql = "CALL sp_subcategory_summary('". $post_data['spend_year_month']."','". $post_data['spend_category_code']."' )";
                if ($query = $this->db->query($sql)) {
                    mysqli_next_result($CI->db->conn_id);
                    $query_result = $query->result_array();
                    $query->free_result();
                    $generated_sub_table = $this->_generated_html_table_data(TABLE_SUB_CAT, $query_result, $post_data['spend_category_code']);
                }
            }
        }

        return $generated_sub_table;
    }


    public function get_Financial_Trends($post_data)
    {
        $generated_trends_table = '';

        $CI = & get_instance();

        if ($post_data['spend_year_month'] != '') {
            $sql = "CALL sp_finance_months_summary('". $post_data['spend_year_month']."')";
            if ($query = $this->db->query($sql)) {
                mysqli_next_result($CI->db->conn_id);
                $query_result = $query->result_array();
                $query->free_result();
                $generated_trends_table = $this->_generated_html_table_data(TABLE_TRENDS, $query_result, $post_data['spend_year_month']);
            }
        }

        return $generated_trends_table;
    }
    private function _generated_html_table_data($tbType, $query_result, $category_code = '')
    {
        $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
        $results = '';
        $max_key[0] = '';

        if ($tbType == TABLE_MAIN_CAT) {
            $filterOutKeys = array('Total', 'Year Month', 'Financial Year', 'row_title');
            $filteredArr = array_diff_key($query_result[0], array_flip($filterOutKeys));
            $max_key = array_keys($filteredArr, min($filteredArr));
        } 

        /**
         * Set Table columns header
         */
        $table_headers = array();
        $table_cells_data = array();

        $check_icon = '<svg class="icon"><use xlink:href="#check"></use></svg>';
        $up_icon = '<svg class="icon_trend_up"><use xlink:href="#caret-up"></use></svg>';
        $down_icon = '<svg class="icon_trend_down"><use xlink:href="#caret-down"></use></svg>';
        $prev_array_value = 0;

        $query_result_keys = array_keys($query_result[0]);
        foreach ($query_result_keys as $header) {
            switch ($tbType) {
                case TABLE_MAIN_CAT:
                    if ($header == $max_key[0]) {
                        $table_headers[] = array('data' => $check_icon.$header, 'class' => 'text-danger');
                    } elseif ($header == 'row_title') {
                        $table_headers[] = 'Main Categories';
                    }else {
                        $table_headers[] = $header;
                    }
                    break;
                case TABLE_TRENDS:
                    if ($header != 'Trends') {
                        $diff_array_value = $prev_array_value - $query_result[0][$header];
                        if ($diff_array_value > 0 ) {
                            $table_headers[] = $down_icon.$header;
                        } elseif ($diff_array_value < 0 ) {
                            $table_headers[] = $up_icon.$header;
                        } else {
                            $table_headers[] = $header;
                        }
                        $prev_array_value = $query_result[0][$header];
                    } else {
                        $table_headers[] = $header;
                    }
                    break;
                default:
                    $table_headers[] = $header;
                    break;

            }
        }

        for ($i=0, $size = count($query_result); $i < $size ; $i++) { 
            $row = $query_result[$i];

            switch ($tbType) {
                case TABLE_MAIN_CAT:
                    $sum_mainCategory = $row['Total'];
                    break;
            }

            foreach ($row as $key => $value) {
                if ($key == 'Total') {
                    switch ($tbType) {
                        case TABLE_MAIN_CAT:
                            $table_cells_data[$i][] = array('data' => $fmt->formatCurrency($value, "USD"), 'class' => 'table-danger');
                            break;
                        case TABLE_SUB_CAT:
                        case TABLE_INCOME:
                            $table_cells_data[$i][] = array('data' => $fmt->formatCurrency($value, "USD"), 'class' => 'table-primary');
                            break;
                    }
                } elseif ($key == 'row_title'|| $key == 'Sub Category' || $key =='Trends') {
                        $table_cells_data[$i][] = array('data' => $value, 'class' => 'table-success');
                } elseif ($key == $category_code) {
                    switch ($tbType) {
                        case TABLE_MAIN_CAT:
                            $percentage_value = round(($value/$sum_mainCategory)*100, 2);
                            $table_cells_data[$i][] = array('data' => $fmt->formatCurrency($value, "USD").' ('.$percentage_value.'%)', 'class' => 'table-warning');
                            break;
                        case TABLE_TRENDS:
                            $table_cells_data[$i][] = array('data' => $fmt->formatCurrency($value, "USD"), 'class' => 'table-warning');
                            break;
                    }
                } elseif ($key == $max_key[0]) {
                    switch ($tbType) {
                        case TABLE_MAIN_CAT:
                            $percentage_value = round(($value/$sum_mainCategory)*100, 2);
                            $table_cells_data[$i][] = $fmt->formatCurrency($value, "USD").' ('.$percentage_value.'%)';
                            break;
                    }
                } else {
                    switch ($tbType) {
                        case TABLE_MAIN_CAT:
                            $percentage_value = round(($value/$sum_mainCategory)*100, 2);
                            $table_cells_data[$i][] = $fmt->formatCurrency($value, "USD").' ('.$percentage_value.'%)';
                            break;
                        case TABLE_SUB_CAT:
                        case TABLE_INCOME:
                        case TABLE_TRENDS:
                            $table_cells_data[$i][] = $fmt->formatCurrency($value, "USD");
                            break;
                    }
                }
            }
        }

        $results = $this->_render_html_table($table_headers, $table_cells_data, $tbType);

        return $results;
    }

    private function _validate_subcategory_from_spend($spend_ym, $category_code)
    {
        $sql = "SELECT count(spend_category) as cnt FROM wspending
            WHERE spend_date LIKE '".$spend_ym."%'
            AND spend_category LIKE '".$category_code."%'";

        if ($query = $this->db->query($sql)) {
            $row =  $query->row();
            return $row->cnt;
        } else {
            return false;
        }
    }

    private function _render_html_table($header, $cells, $temp = TABLE_MAIN_TEMPLATE)
    {
        if ($temp == TABLE_MAIN_CAT || $temp == TABLE_TRENDS) {
            $tb_template = array(
                'table_open' => '<div class="col">  <table class="table table-sm table-bordered table-hover text-right">',
                'thead_open' => '<thead class="thead-light">',
                'table_close' => '</table> </div>'
            );
        } elseif ($temp == TABLE_SUB_CAT) {
            $tb_template = array(
                'table_open' => '<table class="table table-sm table-bordered table-hover text-right">',
                'thead_open' => '<thead class="thead-light">',
                'table_close' => '</table>'
            );
        } else {
            $tb_template = array(
                'table_open' => '<div class="col-auto">  <table class="table table-sm table-bordered table-hover text-right">',
                'thead_open' => '<thead class="thead-light">',
                'table_close' => '</table> </div>'
            );
        }
        $this->load->library('table');
        $this->table->set_template($tb_template);
        $this->table->set_heading($header);
        foreach ($cells as $cell) {
            $this->table->add_row($cell);
        }
        return $this->table->generate();
    }

    /* ////////////////////////////////////
    // wcategory table functions
    */ /////////////////////////////////////
    public function getMainCategory($selection = CODE_SELECTION, $mainCategory_code = '')
    {
        if ($selection == CODE_SELECTION) {
            $sql = "SELECT '' AS code_value, 'Select Main Category' as code_name
                    UNION
                    SELECT SUBSTR(cat_code,1,1) as code_value, cat_name as code_name FROM wcategory
                    WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ";
        } elseif ($selection == SPEND_YM_SELECTION) {
            $sql = "SELECT '' AS code_value, 'ALL' as code_name
                    UNION
                    SELECT SUBSTR(cat_code,1,1) as code_value, cat_name as code_name FROM wcategory
                    WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ";
        } elseif ($selection == CODE_NAME_SELECTION) {
            $sql = "SELECT cat_name as code_name FROM wcategory
                    WHERE SUBSTR(cat_code,1,1) = '".$mainCategory_code."' AND SUBSTR(cat_code,2,2) = '00' ";
        }

        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getSubCategory($mainCategory_code, $selection = CODE_SELECTION)
    {
        if ($selection == CODE_SELECTION) {
            $sql = "SELECT cat_code as code_value, cat_name as code_name FROM wcategory
                    WHERE SUBSTR(cat_code,2,2) != '00'
                    AND cat_code LIKE '".$mainCategory_code."%' ";
        } elseif ($selection == CODE_NAME_SELECTION) {
            $sql = "SELECT cat_code as code_value, cat_name as code_name FROM wcategory
                    WHERE cat_code LIKE '".$mainCategory_code."%' ";
        }
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getCategoryName($name_lists, $categoryCode)
    {
        foreach ($name_lists as $list) {
            if ($list['code_value'] == $categoryCode) {
                return $list['code_name'];
            }
        }
        return '';
    }

    /* ///////////////////////////////////////////////
    // wuploaddata table functions
    */ ///////////////////////////////////////////////

    public function add_upload_data(&$data)
    {
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

    private function _load_csv_data($data)
    {
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
