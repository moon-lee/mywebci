<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends Application {

    
    public function __construct()
    {
        parent::__construct();
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
        $post_data = array(
                'paymentdate' => $this->input->post('paymentdate'), 
                'grosspay' => $this->input->post('grosspay'),
                'netpay' => $this->input->post('netpay'),
        );

        $this->_debug_print($post_data);
    }
}

/* End of file Payments.php */
