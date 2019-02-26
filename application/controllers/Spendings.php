<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spendings extends Application {

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (!($this->isLoggedin())) {
            $this->_logout();
        }
        $this->render_spendings();
    }

    private function render_spendings()
    {   
        $page_title = 'Spendings';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['css'] = $this->set_css(CSS_JS_SPENDING);  
        $this->data['js'] = $this->set_js(CSS_JS_SPENDING);  
        $this->data['content-body'] = $this->set_content('spendings', array('contenttitle' => $page_title));
        // Set Selection 
        

        $this->data['modal'] = $this->set_content('layouts/spendings_modal', 
                                array('account_type' => $this->set_selection('selection_accountType')));

        $this->render();
    }  



}

/* End of file Spendings.php */
