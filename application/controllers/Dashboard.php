<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Application {

    
    public function __construct()
    {
        parent::__construct();
    }
    

    public function index()
    {
        if (!($this->isLoggedin())) {
            $this->_logout();
        }
        $this->render_dashboard();
    }

}

/* End of file Dashboard.php */

