<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Spendings extends Application
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
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

    public function get_subcategory() {
        $post_data = $this->input->post(null, true);
        $result = $this->category_model->getSubCategory($post_data['mcategory_code']);
        $subCategory = $this->set_selection($result);
        $subCategory_first =  $this->myconfig['sub_category_first'];
        echo  $this->set_selection($subCategory_first) . $subCategory;
    }
}

/* End of file Spendings.php */
