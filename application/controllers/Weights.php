<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Weights extends Application {

    public function __construct()
    {
        parent::__construct();

    }
    
    public function index()
    {
        if (!($this->isLoggedin())) {
            $this->_logout();
        }
        $this->render_weights();
    }
}

/* End of file Weights.php */
