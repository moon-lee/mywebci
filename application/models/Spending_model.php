<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spending_model extends MY_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->tb_name = "wspending";
    }
    
    public function add_spending_detail ($data) {
        $this->db->insert($this->tb_name, $data);
        return $this->db->insert_id();
    }

    public function spending_list($post_data)
    {
        $limit = $post_data['length'];
        $start = $post_data['start'];
        $columns = $this->get_columns_name($post_data['columns']);
        $search = $post_data['search'];
        
        $this->db->select( $columns);
        $this->db->from($this->tb_name);
        $this->db->limit($limit, $start);
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }

        $result = array(
            'draw' => $post_data['draw'],
            'recordsTotal' => $this->spending_count_all(),
            'recordsFiltered' => $this->spending_count_all(),
            'data' => $data
        );
    }

    public function spending_count_all()
    {
        $this->db->from($this->tb_name);
        return $this->db->count_all_results();
    }

}

/* End of file Spending_model.php */
