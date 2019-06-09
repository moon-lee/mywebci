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
        $subCategory_first =  $this->myconfig['sub_category_first'];
        $mainCategory = $this->categories_model->getMainCategory(CODE_SELECTION);
        $this->data['modal'] = $this->set_content(
                'layouts/categories_modal',
                array(
                  'main_category' => $this->set_selection(CODE_SELECTION, $mainCategory)
                )
            )
            .$this->set_content('layouts/load_trans_modal')
            .$this->set_content(
                'layouts/keywords_modal',
                array(
                  'main_category' => $this->set_selection(CODE_SELECTION, $mainCategory),
                  'sub_category_first' => $this->set_selection(CODE_SELECTION, $subCategory_first)
                )
            );

        $this->render();
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

            if ($key == "keywordname") {
                $validated = $this->keywords_model->is_unique_keyword($value);
                if (! $validated) {
                    $data['inputerror'][] = $key;
                    $data['error_string'][] = 'keyword is not unique';
                    $data['status'] = false;
                }
            }
        }
        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return $post_data;
        }
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

    public function get_subcategory()
    {
        $post_data = $this->input->post(null, true);
        $result = $this->categories_model->getSubCategory($post_data['mcategory_code']);
        $subCategory = $this->set_selection(CODE_SELECTION, $result);
        $subCategory_first =  $this->myconfig['sub_category_first'];
        echo  $this->set_selection(CODE_SELECTION, $subCategory_first) . $subCategory;
    }


    public function add_keywords()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $validated_data = $this->validate_data($post_data);
        $validated_data['key_user'] = $this->session->userdata('user_name');
        
        $result = $this->keywords_model->keywords_add($validated_data);

        $data["status"] =  true;
        echo json_encode($data);
    }

    public function delete_keywords()
    {
        $post_data = $this->input->post(null, true);
        $this->keywords_model->keywords_delete($post_data);
        echo json_encode(array("status" => true));
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

    public function load_transactions() {
        $config['upload_path']  = '/opt/lampstack-7.1.26-0/mysql/uploads/';
        $config['allowed_types'] = 'csv|pdf';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('load_data')) {
            $upload_result = array('upload_data' => $this->upload->data());
            $data['upload_file_name'] = $config['upload_path'].$upload_result['upload_data']['file_name'];
            $data['upload_orig_name'] = $upload_result['upload_data']['orig_name'];
            $data['upload_file_type'] = $upload_result['upload_data']['file_type'];
            $data['upload_file_size'] = $upload_result['upload_data']['file_size'];
            $data['upload_user'] = $this->session->userdata('user_name');
            if ($this->transactions_model->transactions_load($data)) {
                $data['status'] = true;
                $data['msg'] = 'Transactions Data successfully loaded. ';     
            } else {
                $data['status'] = false;
                $data['inputerror'][] = 'load_data';
                $data['error_string'][] = $error['error'];
                }
        } else {
            $error = array('error' => $this->upload->display_errors('',''));
            $data['inputerror'][] = 'load_data';
            $data['error_string'][] = $error['error'];
            $data['status'] = false;
        }

        echo json_encode($data);    
    }

    public function match_transactions() {
        $result = $this->transactions_model->transactions_match($this->session->userdata('user_name'));
        echo json_encode($result);
    }

    public function apply_transactions() {
        $result = $this->transactions_model->transactions_apply($this->session->userdata('user_name'));
        echo json_encode($result);        
    }
    public function archive_transactions() {
        $result = $this->transactions_model->transactions_archive($this->session->userdata('user_name'));
        echo json_encode($result);        
    }
}

/* End of file Settings.php */
