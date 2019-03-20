<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spending_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tb_name = "wspending";
    }
    
    public function add_spending_detail($data)
    {
        $this->db->insert($this->tb_name, $data);
        return $this->db->insert_id();
    }

    public function spending_list($post_data)
    {
        $columns = $this->get_columns_name($post_data['columns']);
        $orders = $this->get_orders($post_data['order'], $post_data['columns']);
        $search_columns = $this->get_like_clauses($post_data['columns']);
        
        $this->db->select($columns);
        $this->db->from($this->tb_name);
        $this->db->limit($post_data['length'], $post_data['start']);
        
        foreach ($orders as $key => $value) {
            $this->db->order_by($key, $value);
        }

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

        if ($query = $this->db->get()) {
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->spending_count_all(),
                'recordsFiltered' => $query->num_rows(),
                'data' => $query->result_array()
            );
        } else {
            return false;
        }
    }

    public function spending_count_all()
    {
        $this->db->from($this->tb_name);
        return $this->db->count_all_results();
    }
}

/* End of file Spending_model.php */
