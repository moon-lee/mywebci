<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payments extends Application
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
    }
    

    public function index()
    {
        if (!($this->isLoggedin())) {
            $this->_logout();
        }
        $this->render_payments();
    }

    
    private function render_payments()
    {
        $page_title = 'Payments';
        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['css'] = $this->set_css(CSS_JS_PAYMENT);
        $this->data['js'] = $this->set_js(CSS_JS_PAYMENT);
 
        $rows = $this->payment_model->payment_summary();
        foreach ($rows as $row);

        $contents = array(  'contenttitle'        => $page_title,
                            'gross_sum'           => "$".preg_replace("/(\d)(?=(\d{3})+\.)/i", "$1,", $row['sum_gross']),
                            'net_sum'             => "$".preg_replace("/(\d)(?=(\d{3})+\.)/i", "$1,", $row['sum_net']),
                            'holiday_leave_sum'   => $row['sum_holiday_leave']."[hours]",
                            'supperannuation_sum' => "$".preg_replace("/(\d)(?=(\d{3})+\.)/i", "$1,", $row['sum_super'])
                        );
            
        $this->data['content-body'] = $this->set_content('payments', $contents);
        $this->data['modal'] = $this->set_content('payments_modal');

        $this->render();
    }

    public function add_paydata()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $validated_data = $this->validate_data($post_data);

        $result = $this->payment_model->add_payment_detail($validated_data);

        $data["status"] =  true;
        $data["saved_data"] = $validated_data;
        echo json_encode($data);
    }

    public function list_paydata()
    {
        $result = $this->payment_model->payment_list();
        echo json_encode($result);
    }

    public function summary_paydata()
    {
        $result = $this->payment_model->payment_summary();
        echo json_encode($result);
    }

    private function validate_data($post_data)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;
        $unformatted = array();
        $sum = 0;

        foreach ($post_data as $key => $value) {
            if (!preg_match("/(paymentdate)/i", $key) || !preg_match("/^[o?]/i", $key)) {
                $unformatted[$key] = preg_replace("/([^0-9\\.\\-])/i", "", $value);
            } else {
                $unformatted[$key] = $value;
            }
        }

        foreach ($unformatted as $key => $value) {
            if (!preg_match("/^[o?]/i", $key) && ($value == "")) {
                $data['inputerror'][] = $key;
                $data['error_string'][] = 'Please provide a valid amount';
                $data['status'] = false;
            }
            if (preg_match("/^[d?]/i", $key)) {
                $sum += (float)$value;
                
                if (round((float)$value, 2) > round((float)$unformatted["bgrosspay"], 2)) {
                    $data['inputerror'][] = $key;
                    $data['error_string'][] = 'It can not be much than gross';
                    $data['status'] = false;
                }
                if (round($sum, 2) > round((float)$unformatted["bgrosspay"], 2)) {
                    $data['inputerror'][] = $key;
                    $data['error_string'][] = 'Total amount has to be same as gross';
                    $data['status'] = false;
                }
            }
        }

        if (round((float)$unformatted["bgrosspay"], 2) < round((float)$unformatted["bnetpay"], 2)) {
            $data['inputerror'][] = 'bnetpay';
            $data['error_string'][] = 'It can not be much than gross';
            $data['status'] = false;
        }
 
        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return array(
                'pay_date'           => $unformatted['bpaymentdate'],
                'pay_gross'          => $unformatted['bgrosspay'],
                'pay_net'            => $unformatted['bnetpay'],
                'pay_withholding'    => $unformatted['bwithholding'],
                'pay_overtime_1_5'   => $unformatted['dovertime_15'],
                'pay_shift'          => $unformatted['dshiftallow'],
                'pay_base'           => $unformatted['dbasehour'],
                'pay_overtime_2'     => $unformatted['dovertime_2'],
                'pay_personal_leave' => $unformatted['dpersonalleave'],
                'pay_holiday_pay'    => $unformatted['dholidaypay'],
                'pay_holiday_load'   => $unformatted['dholidayload'],
                'pay_holiday_leave'  => $unformatted['oholidayhours'],
                'pay_super'          => $unformatted['osuperannuation']
            );
        }
    }
}

/* End of file Payments.php */
