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
}

/* End of file Payments.php */
