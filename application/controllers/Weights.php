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

    private function render_weights()
    {   
        $page_title = 'Weights';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
         $this->data['css'] = $this->set_css();  
        $this->data['js'] = $this->set_js();  
        $this->data['content-body'] = $this->set_content('weights', array('contenttitle' => $page_title));
        $this->data['modal'] = '';


        $this->render();
    }    
}

/* End of file Weights.php */
