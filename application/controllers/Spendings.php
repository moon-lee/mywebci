<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spendings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('spending_model');
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

        /**
         * Render Content Body
         */
        $this->data['content-body'] = $this->set_content('spendings', 
                        array('contenttitle' => $page_title,
                        'spend_year_month' => 
                        $this->set_selection(SPEND_YM_SELECTION, $this->spending_model->get_spending_year_month()),
                        'category' => 
                        $this->set_selection(CODE_SELECTION, $this->spending_model->getMainCategory(SPEND_YM_SELECTION))
                    ));

        /**
         * Render for Modal
         */
        $accountType = $this->myconfig['account_type'];
        $subCategory_first =  $this->myconfig['sub_category_first'];
        $mainCategory = $this->spending_model->getMainCategory(CODE_SELECTION);
        $this->data['modal'] = $this->set_content(
            'layouts/spendings_modal',
            array('account_type' => $this->set_selection(CODE_SELECTION, $accountType),
                    'main_category' => $this->set_selection(CODE_SELECTION, $mainCategory),
                    'sub_category_first' => $this->set_selection(CODE_SELECTION, $subCategory_first))
         ).$this->set_content('layouts/upload_file_modal');

        $this->render();
    }

    public function get_subcategory()
    {
        $post_data = $this->input->post(null, true);
        $result = $this->spending_model->getSubCategory($post_data['mcategory_code']);
        $subCategory = $this->set_selection(CODE_SELECTION, $result);
        $subCategory_first =  $this->myconfig['sub_category_first'];
        echo  $this->set_selection(CODE_SELECTION, $subCategory_first) . $subCategory;
    }

    public function add_spendingdata()
    {
        $data = array();
        $post_data = $this->input->post(null, true);
        $validated_data = $this->validate_data($post_data);
        $validated_data['spend_user'] = $this->session->userdata('user_name');

        $result = $this->spending_model->add_spending_detail($validated_data);

        $data["status"] =  true;
        echo json_encode($data);
    }
    private function validate_data($post_data)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = true;
        $spendingtax = false;
        $unformatted = array();
 
        foreach ($post_data as $key => $value) {
            if (preg_match("/(spendingamount)/i", $key)) {
                $unformatted[$key] = preg_replace("/([^0-9\\.\\-])/i", "", $value);
            } else {
                $unformatted[$key] = $value;
            }
        }

        foreach ($unformatted as $key => $value) {
            if (!preg_match("/^[o?]/i", $key) && ($value == "")) {
                $data['inputerror'][] = $key;
                $data['error_string'][] = 'Please provide a valid data';
                $data['status'] = false;
            }
        }

        // check tax refund key and value
        if (isset($unformatted['ospendingtax'])) {
            $spendingtax = true;
        }

        if (!$data['status']) {
            echo json_encode($data);
            exit;
        } else {
            return array(
                'spend_date'        => $unformatted['spendingdate'],
                'spend_amount'      => $unformatted['spendingamount'],
                'spend_account'     => $unformatted['accounttype'],
                'spend_category'    => $unformatted['subcategory'],
                'spend_tax_refund'  => $spendingtax,
                'spend_description' => $unformatted['ospendingdesc']
            );
        }
    }

    public function list_spendingdata()
    {
        $post_data = $this->input->post(null, true);
        $list_data = $this->spending_model->spending_list($post_data);
        echo json_encode($list_data);
    }

    public function delete_spendingdata()
    {
        $post_data = $this->input->post(null, true);
        $this->spending_model->spending_delete($post_data);
        echo json_encode(array("status" => true));
    }

    public function upload_spendingdata()
    {
        $config['upload_path']  = '/opt/lampstack-7.1.26-0/mysql/uploads/';
        $config['allowed_types'] = 'csv|pdf';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('spend_data')) {
            $upload_result = array('upload_data' => $this->upload->data());
            $data['upload_file_name'] = $config['upload_path'].$upload_result['upload_data']['file_name'];
            $data['upload_orig_name'] = $upload_result['upload_data']['orig_name'];
            $data['upload_file_type'] = $upload_result['upload_data']['file_type'];
            $data['upload_file_size'] = $upload_result['upload_data']['file_size'];
            $data['upload_user'] = $this->session->userdata('user_name');
            if ($this->spending_model->add_upload_data($data)) {
                $data['status'] = true;
                $data['msg'] = 'File successfully uploaded. ';     
            } else {
                $data['status'] = false;
                $data['inputerror'][] = 'spend_data';
                $data['error_string'][] = $error['error'];
                }
        } else {
            $error = array('error' => $this->upload->display_errors('',''));
            $data['inputerror'][] = 'spend_data';
            $data['error_string'][] = $error['error'];
            $data['status'] = false;
        }

        echo json_encode($data);
    }
}

/* End of file Spendings.php */
