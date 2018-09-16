<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Application extends CI_Controller
{
    protected $data = array(); // parameters for view components
    protected $id;   // identifier for our content
    
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Walking On the Moon';
        $this->errors = array();
        
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('googleclient');

        $this->config->load('myconfig', true);

        $this->myconfig = $this->config->item('myconfig');
    }

    protected function set_css($setstate = CSS_JS_DEFAULT)
    {
        $css_def = $this->myconfig['css_list_default'];

        if ($setstate === CSS_JS_DASHBOARD) {
            $css_dash = $this->myconfig['css_list_dashboard'];
        }

        if ($setstate === CSS_JS_DEFAULT) {
            $csslists = $css_def;
        } else {
            $csslists = array_merge_recursive($css_def, $css_dash);
        }
        
        return $this->parser->parse('layouts/css_template', $csslists, true);
    }

    protected function set_js($setstate = CSS_JS_DEFAULT)
    {
        $js_def =  $this->myconfig['js_list_default'];

        if ($setstate === CSS_JS_DASHBOARD) {
            $js_dash =  $this->myconfig['js_list_dashboard'];
        }

        if ($setstate === CSS_JS_DEFAULT) {
            $jslists = $js_def;
        } else {
            $jslists = array_merge_recursive($js_def, $js_dash);
        }

        return $this->parser->parse('layouts/js_template', $jslists, true);
    }

    
    protected function set_content($view, $view_data = array())
    {
        return $this->parser->parse($view, $view_data, true);
    }
    /**
     * Render this page
     */
    public function render($template_view = VIEW_DEFAULT)
    {
        if (!isset($this->data['pagetitle'])) {
            $this->data['pagetitle'] = $this->data['title'];
        }
        $this->data['username'] = $this->session->userdata('user_name');
        
        if ($template_view == VIEW_DEFAULT) {
            $this->data['dashboard'] = base_url('main/view_dashboard');
            $this->data['payments'] = base_url('main/view_payments');
            $this->data['weights'] = base_url('main/view_weights');
            $this->data['logout'] = base_url('main/user_logout');
        }
        
        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse($template_view, $this->data);
    }


    protected function isLoggedin()
    {
        $loggedin = $this->session->userdata('loggedin');

        return $loggedin;
    }

    
    protected function _logout()
    {
        //$this->googleclient->revokeToken();
        
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('authUser');

        $this->session->sess_destroy();
        redirect('main', 'refresh');
    }

    protected function _debug_print($output)
    {
        echo "<pre>";
        print_r($output);
        echo "</pre>";
        //die();
    }
}
