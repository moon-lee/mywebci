<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

    private $table = "wtasks";

    public function add_task_item ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

}

/* End of file Task_model.php */
