<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('googleclient');
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
            $data['title'] = 'Log In';
            $data['authUrl'] = $this->googleclient->authUrl();
            $this->load->view('login', $data, false);
        }
    }

    public function view_dashboard()
    {
        if (!($this->isLoggedin())) {
            $this->user_logout();
        }

        $output = $this->_dashboard();
        $this->_render_output('main_layout', $output);
    }

    public function view_default()
    {
        if (!($this->isLoggedin())) {
            $this->user_logout();
        }

        $output = $this->_default();
        $this->_render_output('main_layout', $output);
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

        if (array_key_exists('error', $accessToken)) {

            $this->session->set_flashdata('error_msg', $accessToken['error_description']);
            $this->view_login();

        } else {

            $this->googleclient->setAccessToken($accessToken);
            $authUser = $this->googleclient->getUserInfo();
            $this->session->set_userdata('user_id', $authUser['id']);
            $this->session->set_userdata('user_email', $authUser['email']);
            $this->session->set_userdata('user_name', $authUser['givenName'].' '.$authUser['familyName']);

            $this->session->set_userdata('loggedin',true);
            
            $this->view_dashboard();
        }
    }

    private function isLoggedin()
    {
        $loggedin = $this->session->userdata('loggedin');

        return $loggedin;
    }

    public function user_logout()
    {
        $this->googleclient->revokeToken();
        
        $this->session->unset_userdata('loggedin');
        $this->session->unset_userdata('authUser');

        $this->session->sess_destroy();
        redirect('main', 'refresh');
    }

}

/* End of file Main.php */
