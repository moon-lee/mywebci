<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

    private $table = "wpayment";

    public function add_payment_detail ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function payment_list()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('pay_date', 'ASC');
        
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }
    }
}

/* End of file Payment_model.php */

