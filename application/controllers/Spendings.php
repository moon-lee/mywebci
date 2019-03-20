<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spendings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
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
        $this->data['content-body'] = $this->set_content('spendings', array('contenttitle' => $page_title));
        // Set modal with selections
        $accountType = $this->myconfig['account_type'];
        $mainCategory_first =  $this->myconfig['main_category_first'];
        $subCategory_first =  $this->myconfig['sub_category_first'];
        $mainCategory = $this->category_model->getMainCategory();
        $this->data['modal'] = $this->set_content(
            'layouts/spendings_modal',
            array('account_type' => $this->set_selection($accountType),
                    'main_category_first' => $this->set_selection($mainCategory_first),
                    'main_category' => $this->set_selection($mainCategory),
                    'sub_category_first' => $this->set_selection($subCategory_first))
         );

        $this->render();
    }

    public function get_subcategory()
    {
        $post_data = $this->input->post(null, true);
        $result = $this->category_model->getSubCategory($post_data['mcategory_code']);
        $subCategory = $this->set_selection($result);
        $subCategory_first =  $this->myconfig['sub_category_first'];
        echo  $this->set_selection($subCategory_first) . $subCategory;
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
        $data = array();
        $post_data = $this->input->post(null, true);

        $result = $this->spending_model->spending_list($post_data);

        echo json_encode($result);
    }
}

/* End of file Spendings.php */
