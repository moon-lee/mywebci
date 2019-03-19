<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spending_model extends CI_Model {
    private $table = "wspending";

    public function add_spending_detail ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function spending_list($post_data)
    {
        $limit = $post_data['length'];
        $start = $post_data['start'];
        $columns = $post_data['columns'];
        $search = $post_data['search'];
        
        $this->db->select('spend_date,spend_description,spend_account,spend_category,spend_amount');
        $this->db->from($this->table);
        $this->db->limit($limit, $start);
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function spending_count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}

/* End of file Spending_model.php */
