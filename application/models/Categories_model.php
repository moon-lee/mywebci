<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends MY_Model {
    public function __construct()
    {
        parent::__construct();
        $this->tb_name['category'] = "wcategory";
        $this->view_tb_name['view_category'] = "v_category";
    }
    

    public function categories_list($post_data) {
        $this->_get_select_categories($post_data);
        $this->db->limit($post_data['length'], $post_data['start']);
        
        if ($query = $this->db->get()) {
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->categories_count_all(),
                'recordsFiltered' => $this->filtered_categories_count($post_data),
                'data' => $query->result_array(),
                'query' => $this->db->last_query()
            );
        } else {
            return false;
        }

    }

    private function _get_select_categories($post_data)
    {
        $select_columns = 'DT_RowId, '.$this->get_columns_name($post_data['columns']);

        $this->db->select($select_columns);
        $this->db->from($this->view_tb_name['view_category']);

        if ($post_data['category_code'] != '') {
            $this->db->like('sub_code', $post_data['category_code'], 'after');
        }
    }

    public function categories_count_all()
    {
        return $this->db->count_all($this->tb_name['category']);
    }

    public function filtered_categories_count($post_data)
    {
        $this->_get_select_categories($post_data);
        $query = $this->db->get();
        return $query->num_rows();
    }

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

    public function categories_add($data) {
        $new_sub_code = $this->_getNewSubCategory_Code($data['maincategory']);
        if ($new_sub_code) {
            $new_data = array (
                'cat_code' => $new_sub_code,
                'cat_name' => $data['subcategoryname'],
                'cat_user' => $data['cat_user']
            );
    
            $this->db->insert($this->tb_name['category'], $new_data);
            return $this->db->insert_id();
        }
    }

    private function _getNewSubCategory_Code($master_code) {
        $sql = "SELECT next_sub_category_code('".$master_code."') as new_sub_code";
        $query = $this->db->query($sql);

        $row = $query->row();
        if (isset($row)) {
            return $row->new_sub_code;
        } else {
            return false;
        }
    }


    public function categories_delete($post_data)
    {
        $this->db->delete($this->tb_name['category'], array('id'=> $post_data['id']));
    }

    public function get_category_by_id($post_data) {

        $sql = "SELECT SUBSTR(cat_code,1,1) AS mastercode, cat_name AS subcodename 
                FROM wcategory
                WHERE id = ".$post_data['id'];
        $query = $this->db->query($sql);

        $row = $query->row();
        if (isset($row)) {
            return $row;
        } else {
            return false;
        }
    }

    public function categories_update($post_data) {
        $update_data = array("cat_name" => $post_data['subcategoryname']);
        return $this->db->update($this->tb_name['category'], $update_data,array('id' => $post_data['id']));
    }

} 

/* End of file Categories_model.php */
