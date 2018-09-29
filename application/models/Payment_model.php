<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

    private $table = "wpayment";

    public function add_payment_detail ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

}

/* End of file Payment_model.php */

