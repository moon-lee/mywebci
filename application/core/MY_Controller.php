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
        $css_template = '{csslist}<link rel="stylesheet" href="{cssdata}">{/csslist}';
        $css_def = $this->myconfig['css_list_default'];

        if ($setstate === CSS_JS_DEFAULT) {
            $csslists = $css_def;
        } elseif ($setstate === CSS_JS_DASHBOARD) {
            $css_dash = $this->myconfig['css_list_dashboard'];
            $csslists = array_merge_recursive($css_def, $css_dash);
        } elseif ($setstate === CSS_JS_PAYMENT) {
            $css_payment = $this->myconfig['css_list_payment'];
            $csslists = array_merge_recursive($css_def, $css_payment);
        } elseif ($setstate === CSS_JS_SPENDING) {
            $css_spending = $this->myconfig['css_list_spending'];
            $csslists = array_merge_recursive($css_def, $css_spending);
        }
        
        return $this->parser->parse_string($css_template, $csslists, true);
    }

    protected function set_js($setstate = CSS_JS_DEFAULT)
    {
        $js_template = '{jslist}<script src="{jsdata}"></script>{/jslist}';
        $js_def =  $this->myconfig['js_list_default'];

        if ($setstate === CSS_JS_DEFAULT) {
            $jslists = $js_def;
        } elseif ($setstate === CSS_JS_DASHBOARD) {
            $js_dash =  $this->myconfig['js_list_dashboard'];
            $jslists = array_merge_recursive($js_def, $js_dash);
        } elseif ($setstate === CSS_JS_PAYMENT) {
            $js_payment =  $this->myconfig['js_list_payment'];
            $jslists = array_merge_recursive($js_def, $js_payment);
        } elseif ($setstate === CSS_JS_SPENDING) {
            $js_spending =  $this->myconfig['js_list_spending'];
            $jslists = array_merge_recursive($js_def, $js_spending);
        }

        return $this->parser->parse_string($js_template, $jslists, true);
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

        // Add Automatic Copyright Year
        $this->data['copyrightyear'] = $this->getCopyRightYear();

        if ($template_view == VIEW_DEFAULT) {
            $this->data['dashboard'] = base_url('main/view_dashboard');
            $this->data['payments'] = base_url('main/view_payments');
            $this->data['spendings'] = base_url('main/view_spendings');
            $this->data['settings'] = base_url('main/view_settings');
            $this->data['logout'] = base_url('main/user_logout');
        }
        
        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse($template_view, $this->data);
    }


    protected function isLoggedin()
    {
        $loggedin = $this->session->userdata('loggedin');

        $token = $this->session->userdata('accessToken');
        
        if (isset($token)) {
            $expired = $this->googleclient->isAccessTokenExpired($token);
            if ($expired) {
                $this->session->unset_userdata('accessToken');
                $loggedin = false;
            }
        }

        return $loggedin;
    }

    protected function getCopyRightYear()
    {
        $fromyear = 2018;
        $thisyear = (int)date('Y');

        return $fromyear . (($fromyear != $thisyear) ? '-' . $thisyear : '');
    }
    
    protected function _logout()
    {
        //$this->googleclient->revokeToken();
        $this->session->unset_userdata('accessToken');
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
