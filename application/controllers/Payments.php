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
        $this->data['css'] = $this->set_css();  
        $this->data['js'] = $this->set_js();  
        $this->data['content-body'] = $this->set_content('payments', array('contenttitle' => $page_title));
        $this->data['modal'] = '';

        $this->render();
    }
}

/* End of file Payments.php */
