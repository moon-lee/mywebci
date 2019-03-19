<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!($this->isLoggedin())) {
            $this->_logout();
        }
        $this->render_settings();
    }

    private function render_settings()
    {
        $page_title = 'Settings';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['css'] = $this->set_css();
        $this->data['js'] = $this->set_js();
        $this->data['content-body'] = $this->set_content('settings', array('contenttitle' => $page_title));
        $this->data['modal'] = '';


        $this->render();
    }
}

/* End of file Settings.php */
