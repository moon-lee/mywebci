<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

    public function login_user($email, $pass)
    {
        
        $this->db->select('*');
        $this->db->from('wuser');
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $pass);
        
        if ($query = $this->db->get())
        {
            return $query->row_array();
        } else {
            return false;
        }
        
    }

}

/* End of file User_model.php */
