<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends Application
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $this->view_login();
    }

    private function view_login()
    {
        if ($this->isLoggedin()) {
            $this->view_dashboard();
        } else {

            $this->render_login();
        }
    }

    private function render_login()
    {   
        $page_title = 'Log In';

        $this->data['pagetitle'] = $this->data['title'].' | '. $page_title;
        $this->data['css'] = $this->set_css();  
        $this->data['js'] = $this->set_js();  
        $this->data['login'] = base_url('main/login_user');
        
        $this->data['authUrl'] = $this->googleclient->authUrl();
        $this->session->set_userdata('authUrl', $this->data['authUrl']);
        
        $msg['error_msg'] = $this->session->flashdata('error_msg');
        if(isset($msg['error_msg'])) {
            $this->data['error_msg'] = $this->parser->parse('layouts/message_template', $msg, true);
        } else {
            $this->data['error_msg'] = '';
        }

        $this->render('login');
    }

    public function view_dashboard()
    {
        redirect('dashboard');
    }

    public function view_payments()
    {
        redirect('payments');
    }

    public function view_weights()
    {
        redirect('weights');
    }


    public function login_user()
    {

        $user_login = array('user_email' => $this->input->post('user_email'), 'user_password' => $this->input->post('user_password'));

        $data = $this->user_model->login_user($user_login['user_email'], $user_login['user_password']);

        if ($data) {
            $this->session->set_userdata('user_id', $data['user_id']);
            $this->session->set_userdata('user_email', $data['user_email']);
            $this->session->set_userdata('user_name', $data['user_name']);
            $this->session->set_userdata('loggedin',true);

            $this->view_dashboard();

        } else {
            $this->session->set_flashdata('error_msg', 'Error occured, Try again');
            $this->view_login();
        }

    }

    public function login_with_google()
    {
        $authCode = $this->input->get('code', true);
        $accessToken = $this->googleclient->getAuthenticate($authCode);

        $this->session->set_userdata('authCode', $authCode);
        $this->session->set_userdata('accessToken', $accessToken);


        if (array_key_exists('error', $accessToken)) {

            $this->session->set_flashdata('error_msg', $accessToken['error_description']);
            $this->view_login();

        } else {

            $authUser = $this->googleclient->getUserInfo($accessToken);

            $this->session->set_userdata('user_id', $authUser['id']);
            $this->session->set_userdata('user_email', $authUser['email']);
            $this->session->set_userdata('user_name', $authUser['givenName'].' '.$authUser['familyName']);

            $this->session->set_userdata('loggedin',true);

            $this->view_dashboard();
        }
    }

    public function user_logout()
    {
        $this->_logout();
    }

}

/* End of file Main.php */
