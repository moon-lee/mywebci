<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

    private $table = "wtasks";

    public function add_task_item ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    public function task_count_all()
    {
        return $this->db->count_all($this->table);
    }

    public function task_list($limit, $start)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        //$this->db->order_by('pay_date', 'DESC');
        $this->db->limit($limit, $start);
        
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

}

/* End of file Task_model.php */
