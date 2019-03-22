<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spending_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tb_name = "wspending as s";
    }
    
    public function add_spending_detail($data)
    {
        $this->db->insert($this->tb_name, $data);
        return $this->db->insert_id();
    }

    public function spending_list($post_data)
    {
        $orders = $this->get_orders($post_data['order'], $post_data['columns']);
        $search_columns = $this->get_like_clauses($post_data['columns']);
        
        $select_columns = " s.spend_date as spend_date, 
                            s.spend_description as spend_description,  
                            s.spend_account as spend_account, 
                            c.cat_name as spend_category,
                            s.spend_amount as spend_amount";

        $this->db->select($select_columns, false);
        $this->db->from($this->tb_name);
        $this->db->join('wcategory as c', 's.spend_category = c.cat_code', 'left');

        $this->db->limit($post_data['length'], $post_data['start']);
        
        foreach ($orders as $key => $value) {
            $this->db->order_by($key, strtoupper($value));
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
        //echo $sql = $this->db->get_compiled_select();

        if ($query = $this->db->get()) {
            $rows = $query->result_array();

            $result = array();
            foreach ($rows as $row) {
                $account_name = $this->get_spend_account_name($row['spend_account']);
                $row['spend_account'] = $account_name;
                $result[] = $row;
            }
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->spending_count_all(),
                'recordsFiltered' => $query->num_rows(),
                'data' => $result
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

    private function get_spend_account_name($accountcode)
    {
        $accountType = $this->myconfig['account_type'];

        foreach ($accountType as $key => $value) {
            if ($key == $accountcode) {
                return $value['text'];
            }
        }
    }
}

/* End of file Spending_model.php */
