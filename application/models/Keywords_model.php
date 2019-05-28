<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keywords_model extends MY_Model {
    public function __construct()
    {
        parent::__construct();
        $this->tb_name['keyword'] = "wkeyword";
        $this->view_tb_name['view_keyword'] = "v_keyword";
    }

    public function keywords_list($post_data) {
        $this->_get_select_keyword($post_data);
        $this->db->limit($post_data['length'], $post_data['start']);
        
        if ($query = $this->db->get()) {
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->keywords_count_all(),
                'recordsFiltered' => $this->filtered_kewwords_count($post_data),
                'data' => $query->result_array(),
                'query' => $this->db->last_query()
            );
        } else {
            return false;
        }

    }

    private function _get_select_keyword($post_data)
    {
        $select_columns = 'DT_RowId, '.$this->get_columns_name($post_data['columns']);

        $this->db->select($select_columns);
        $this->db->from($this->view_tb_name['view_keyword']);

        // if ($post_data['category_code'] != '') {
        //     $this->db->like('sub_code', $post_data['category_code'], 'after');
        // }
    }

    public function keywords_count_all()
    {
        return $this->db->count_all($this->tb_name['keyword']);
    }

    public function filtered_kewwords_count($post_data)
    {
        $this->_get_select_keyword($post_data);
        $query = $this->db->get();
        return $query->num_rows();
    }   

}

/* End of file Keywords_model.php */
