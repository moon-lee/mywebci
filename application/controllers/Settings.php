<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
        $this->load->model('keywords_model');
        $this->load->model('transactions_model');
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
        $this->data['css'] = $this->set_css(CSS_JS_SETTING);
        $this->data['js'] = $this->set_js(CSS_JS_SETTING);

        /**
         * Render Content Body
         */
        $this->data['content-body'] = $this->set_content(
            'settings',
            array('contenttitle' => $page_title,
                        'category' =>
                        $this->set_selection(CODE_SELECTION, $this->categories_model->getMainCategory(SPEND_YM_SELECTION))
                    )
        );

        /**
         * Render for Modal
         */
        $mainCategory = $this->categories_model->getMainCategory(CODE_SELECTION);
        $this->data['modal'] = $this->set_content(
            'layouts/categories_modal',
            array('main_category' => $this->set_selection(CODE_SELECTION, $mainCategory)
         )
        );

        //$this->data['modal'] = '';


        $this->render();
    }

    /*
    * Category 
    */
    public function list_categories()
    {
        $post_data = $this->input->post(null, true);
        $list_data = $this->categories_model->categories_list($post_data);
        echo json_encode($list_data);
    }

    public function add_categories()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $validated_data = $this->validate_data($post_data);
        $validated_data['cat_user'] = $this->session->userdata('user_name');
        
        $result = $this->categories_model->categories_add($validated_data);

        $data["status"] =  true;
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
        }
        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return $post_data;
        }
    }

    public function update_categories()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $validated_data = $this->validate_data($post_data);
        $result = $this->categories_model->categories_update($validated_data);
        $data["status"] =  $result;
        echo json_encode($data);
    }

    public function edit_categories()
    {
        $data = array();
        $post_data = $this->input->post(null, true);

        $result = $this->categories_model->get_category_by_id($post_data);

        if ($result) {
            $data = array(
                "mastercode" => $result->mastercode,
                "subcodename" => $result->subcodename,
                "status" => true
            );
        } else {
            $data["status"] =  false;
        }
        echo json_encode($data);
    }

    public function delete_categories()
    {
        $post_data = $this->input->post(null, true);
        $this->categories_model->categories_delete($post_data);
        echo json_encode(array("status" => true));
    }

    /*
    * Keyword
    */
    public function list_keywords()
    {
        $post_data = $this->input->post(null, true);
        $list_data = $this->keywords_model->keywords_list($post_data);
        echo json_encode($list_data);
    }

    /*
    * Transaction 
    */
    public function list_tranactions()
    {
        $post_data = $this->input->post(null, true);
        $list_data = $this->transactions_model->transactions_list($post_data);
        echo json_encode($list_data);
    }

}

/* End of file Settings.php */
