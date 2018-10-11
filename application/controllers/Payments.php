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
        $selections = '';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['css'] = $this->set_css(CSS_JS_PAYMENT);
        $this->data['js'] = $this->set_js(CSS_JS_PAYMENT);
        $this->data['content-body'] = $this->set_content('payments', array('contenttitle' => $page_title));

        $template = $this->myconfig['option_template'];
        $options = $this->myconfig['payment_details'];
        foreach ($options as $option) {
            $selections .= $this->parser->parse_string($template, $option, true);
        }
        $this->data['modal'] = $this->set_content('payments_modal', array('selections' => $selections));

        $this->render();
    }

    public function add_paydata()
    {
        $data = array();
        $post_data = array(
                'pay_date'          => $this->input->post('paymentdate'),
                'pay_gross'         => $this->input->post('grosspay'),
                'pay_net'           => $this->input->post('netpay'),
                'pay_withholding'   => $this->input->post('withholding'),
                'pay_items'         => $this->input->post('payitems'),
                'pay_details'       => $this->input->post('paydetails')
        );

        $validated_data = $this->validate_data($post_data);
        $flatten_data = $this->flat_data($validated_data);
        $sliced_data = array_splice($validated_data, 0, 4);
        $merged_data = array_merge($sliced_data, $flatten_data);

        $result = $this->payment_model->add_payment_detail($merged_data);

        $data["status"] =  true;
        echo json_encode($data);
    }

    public function list_paydata()
    {
        $result = $this->payment_model->payment_list();
        echo json_encode($result);
    }

    private function validate_data($post_data)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;
        $unformatedpaydetails = array();
        $sum = 0;

        $grosspay =  preg_replace("/([^0-9\\.\\-])/i", "", $post_data['pay_gross']);
        $netpay =  preg_replace("/([^0-9\\.\\-])/i", "", $post_data['pay_net']);
        $payg =  preg_replace("/([^0-9\\.\\-])/i", "", $post_data['pay_withholding']);
        
        if (is_array($post_data['pay_details'])) {
            foreach ($post_data['pay_details'] as $key => $paydetail) {
                $pdetail = preg_replace("/([^0-9\\.\\-])/i", "", $paydetail);
                $unformatedpaydetails[] = $pdetail;
                $sum += (float)$pdetail;

                if ($pdetail == '') {
                    $data['inputerror'][] = 'paydetails['. (string)$key .']';
                    $data['error_string'][] = 'Please provide a valid amount';
                    $data['status'] = false;
                }
                if (round((float)$pdetail,2) > round((float)$grosspay,2)) {
                    $data['inputerror'][] = 'paydetails['. (string)$key .']';
                    $data['error_string'][] = 'It can not be much than gross';
                    $data['status'] = false;
                }
                if (round($sum,2) > round((float)$grosspay,2)) {
                    $data['inputerror'][] = 'paydetails['. (string)$key .']';
                    $data['error_string'][] = 'Total amount can not be much than gross';
                    $data['status'] = false;
                    break;
                }
            }
            if (round($sum,2) !== round((float)$grosspay,2)) {
                $data['inputerror'][] = 'detailopts';
                $data['error_string'][] = 'Total amount has to be same as gross';
                $data['status'] = false;
            }
        } else {
            $data['inputerror'][] = 'detailopts';
            $data['error_string'][] = 'Please select details at least';
            $data['status'] = false;
        }
 
        if ($post_data['pay_date'] == '') {
            $data['inputerror'][] = 'paymentdate';
            $data['error_string'][] = 'Please choose a date';
            $data['status'] = false;
        }
        
        if ($post_data['pay_gross'] == '') {
            $data['inputerror'][] = 'grosspay';
            $data['error_string'][] = 'Please provide a valid amount';
            $data['status'] = false;
        }
        
        if ($post_data['pay_net'] == '') {
            $data['inputerror'][] = 'netpay';
            $data['error_string'][] = 'Please provide a valid amount';
            $data['status'] = false;
        }

        if (round((float)$grosspay,2) < round((float)$netpay,2)) {
            $data['inputerror'][] = 'netpay';
            $data['error_string'][] = 'It can not be much than gross';
            $data['status'] = false;
        }

        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return array(
                'pay_date'          => $this->input->post('paymentdate'),
                'pay_gross'         => $grosspay,
                'pay_net'           => $netpay,
                'pay_withholding'   => $payg,
                'pay_items'         => $this->input->post('payitems'),
                'pay_details'       => $unformatedpaydetails
            );
        }
    }

    private function flat_data($base)
    {
        $flated_data = array();

        foreach ($base['pay_items']as $key => $pay_item) {
            switch ($pay_item) {
                case 1:
                    $flated_data['pay_base'] = $base['pay_details'][$key];
                    break;
                case 2:
                    $flated_data['pay_shift'] = $base['pay_details'][$key];
                    break;
                case 3:
                    $flated_data['pay_overtime_1_5'] = $base['pay_details'][$key];
                    break;
                case 4:
                    $flated_data['pay_overtime_2'] = $base['pay_details'][$key];
                    break;
                case 5:
                    $flated_data['pay_personal_leave'] = $base['pay_details'][$key];
                    break;
                case 6:
                    $flated_data['pay_holiday_pay'] = $base['pay_details'][$key];
                    break;
                case 7:
                    $flated_data['pay_holiday_load'] = $base['pay_details'][$key];

            }
        }

        return $flated_data;
    }
}

/* End of file Payments.php */
