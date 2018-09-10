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

    private function render_dashboard()
    {   
        $page_title = 'Dashboard';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['contenttitle'] = $page_title;
        $this->data['css'] = $this->set_css(CSS_JS_DASHBOARD);  
        $this->data['js'] = $this->set_js(CSS_JS_DASHBOARD);  
        $this->data['content'] = $this->set_content('dashboard');
        $this->data['modal'] = $this->set_content('dashboard_modal');

        $this->render();
    }

    public function eventslist()
    {
        $p_start = $this->input->get("start");
        $p_end = $this->input->get("end");

        $token = $this->session->userdata('accessToken');
        $events = $this->googleclient->getEvents($token, $p_start, $p_end);
 
        echo $events;
     }

}

/* End of file Dashboard.php */

