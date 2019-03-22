<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends MY_Model {

    private $table = "wpayment";

    public function add_payment_detail ($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function payment_list($limit, $start)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where_not_in('pay_status', array(99));
        $this->db->order_by('pay_date', 'DESC');
        $this->db->limit($limit, $start);
        
        
        if ($query = $this->db->get())
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function payment_summary($option = SUMMARY_DEFAULT) 
    {
        if ($option == SUMMARY_DEFAULT) {
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
                    SUM(pay_holiday_leave) as sum_holiday_leave,
                    ROUND(AVG(pay_gross)*52,2) as est_gross, 
                    ROUND(AVG(pay_net)*52,2) as est_net,
                    ROUND(AVG(pay_withholding)*52,2) as est_withholding,
                    ROUND(AVG(pay_super)*52,2) as est_super
                FROM wpayment WHERE pay_status NOT IN (99) ";

        } else {
            $sql = "SELECT 
                    SUM(pay_gross) as sum_gross, 
                    SUM(pay_net) as sum_net, 
                    SUM(pay_withholding) as sum_withholding
                FROM wpayment WHERE pay_status NOT IN (99) ";
        }
        if ($query = $this->db->query($sql))
        {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function payment_count_all()
    {
        $this->db->from($this->table);
        $this->db->where_not_in('pay_status', array(99));

        return $this->db->count_all_results();
    }

    public function update_payment_details($postdata)
    {
        $this->db->update($this->table, array('pay_status' => $postdata["pay_status"]), array('id' =>  $postdata["id"]));
    }
}

/* End of file Payment_model.php */

