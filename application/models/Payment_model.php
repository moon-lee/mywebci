<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

    private $table = "wpayment";

    public function add_payment_detail ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function payment_list($limit, $start)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('pay_date', 'ASC');
        $this->db->limit($limit, $start);
        
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function payment_summary() 
    {
        $sql = "SELECT 
                    SUM(pay_gross) as sum_gross, 
                    SUM(pay_net) as sum_net, 
	                SUM(pay_base) as sum_base, 
                    SUM(pay_shift) as sum_shift, 
                    SUM(pay_overtime_1_5) as sum_overtime_1_5,
                    SUM(pay_overtime_2) as sum_overtime_2, 
                    SUM(pay_personal_leave) as sum_personal_leave,
                    SUM(pay_holiday_pay) as sum_holiday_pay, 
                    SUM(pay_holiday_load) as sum_holiday_load,
                    SUM(pay_withholding) as sum_withholding,
                    SUM(pay_super) as sum_super, 
                    SUM(pay_holiday_leave) as sum_holiday_leave
                FROM wpayment";

        if ($query = $this->db->query($sql))
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function payment_count_all()
    {
        return $this->db->count_all($this->table);
    }
}

/* End of file Payment_model.php */

