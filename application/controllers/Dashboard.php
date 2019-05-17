<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('task_model');
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
        $this->data['css'] = $this->set_css(CSS_JS_DASHBOARD);
        $this->data['js'] = $this->set_js(CSS_JS_DASHBOARD);
        $payments = $this->payment_summary();
        $this->data['content-body'] = $this->set_content(
            'dashboard',
            array(
                                            'contenttitle' => $page_title,
                                            'payments' => base_url('main/view_payments'),
                                            'weights' => base_url('main/view_weights'),
                                            'task' => $this->set_content('layouts/task_list'),
                                            'sum_gross' => $payments['sum_gross'],
                                            'sum_net' => $payments['sum_net'],
                                            'sum_withholding' => $payments['sum_withholding']
                                        )
        );
        $this->data['modal'] = $this->set_content('layouts/dashboard_modal');

        $this->render();
    }

    public function eventslist()
    {
        $p_start = $this->input->get("start");
        $p_end = $this->input->get("end");

        $token = $this->session->userdata('accessToken');

        if(isset($token)) {
            echo $this->googleclient->getEvents($token, $p_start, $p_end);
        } else {
            echo json_encode('');
        }
    }

    private function payment_summary()
    {
        $output = array();
        $result = $this->payment_model->payment_summary(SUMMARY_OTHER);
        foreach ($result as $row) {
            foreach ($row as $key => $value) {
                if ((int)$value < 0) {
                    $value = preg_replace("/-/i", "", $value);
                    $output[$key] = ucfirst(preg_replace("/([sum_]\w{3})/i", "", $key)). "  :  -$" . preg_replace("/(\d)(?=(\d{3})+\.)/i", "$1,", $value);
                } else {
                    $output[$key] = ucfirst(preg_replace("/([sum_]\w{3})/i", "", $key)). "  :  $" . preg_replace("/(\d)(?=(\d{3})+\.)/i", "$1,", $value);
                }
            }
        }
        return $output;
    }

    public function add_taskitem()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $post_data['task_user'] = $this->session->userdata('user_name');
        $validated_data = $this->validate_data($post_data);

        $result = $this->task_model->add_task_item($post_data);

        $data["status"] =  true;
        // $data["saved_data"] = $validated_data;
        echo json_encode($data);
    }

    private function validate_data($post_data)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;


        foreach ($post_data as $key => $value) {
            if ($value == "") {
                $data['inputerror'][] = $key;
                $data['error_string'][] = 'Please provide a valid data';
                $data['status'] = false;
            }
            if (($key =="task_priority") && ($value == "0")) {
                $data['inputerror'][] = $key;
                $data['error_string'][] = 'Please provide a valid data';
                $data['status'] = false;
            }
        }
        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return $post_data;
        }
    }

    public function pagination_task()
    {
        $this->config->load('mypagination', true);

        $config = $this->config->item('mypagination');
        $config["base_url"] = "#";
        $config["total_rows"] = $this->task_model->task_count_all();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;
            
        $this->load->library('pagination', $config);

        $page = $this->uri->segment(3);
        $start = ($page-1) * $config["per_page"];

        $output = array(
            'pagination_link'   => $this->pagination->create_links(),
            'task_details'   => $this->task_model->task_list($config["per_page"], $start)
        );
        echo json_encode($output);
    }

    public function update_taskstatus()
    {
        $post_data = $this->input->post(null, true);
        $this->task_model->update_task_item($post_data);
        echo json_encode(array("status" => true));
    }
}

/* End of file Dashboard.php */
