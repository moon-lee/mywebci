<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends Application {

    
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
        $this->data['content-body'] = $this->set_content('payments', array('contenttitle' => $page_title));
        $this->data['modal'] = $this->set_content('payments_modal', array('adddata' => base_url('payments/add_paydata')));
       // $this->data['modal'] = $this->set_content('payments_modal');;

        $this->render();
    }

    public function add_paydata()
    {

        $grosspay =  preg_replace("/([^0-9\\.])/i", "", $this->input->post('grosspay'));
        $netpay =  preg_replace("/([^0-9\\.])/i", "", $this->input->post('netpay'));

        $post_data = array(
                'pay_date'  => $this->input->post('paymentdate'), 
                'pay_gross' => $grosspay,
                'pay_net'   => $netpay
        );

        $this->_validate($post_data);

       $result = $this->payment_model->add_payment_detail($post_data);
       //$this->_debug_print($post_data);

       $data = array("status" => true);
       echo json_encode($data);
    }

    public function list_paydata() 
    {
        $result = $this->payment_model->payment_list();
        echo json_encode($result);
    }

    private function _validate($post_data) 
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;

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

        if ((int)$post_data['pay_gross'] < (int)$post_data['pay_net']  )
        {
            $data['inputerror'][] = 'netpay';
            $data['error_string'][] = 'It can not be much than gross';
            $data['status'] = false;
        }

        if (!$data['status']) {
            echo json_encode($data);
            exit;
        }
    }
}

/* End of file Payments.php */
