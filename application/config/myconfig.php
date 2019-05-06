<?php

defined('BASEPATH') or exit('No direct script access allowed');

$config['css_list_default'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/bootstrap.min.css')),
    array('cssdata' => base_url('assets/dist/css/myCommon.css'))
    )
);
$config['css_list_dashboard'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/vendorCalendar.css')),
    array('cssdata' => base_url('assets/dist/css/flatpickr.min.css'))
    )
);

$config['css_list_payment'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/flatpickr.min.css'))
    )
);

$config['css_list_spending'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/flatpickr.min.css')),
    array('cssdata' => base_url('assets/dist/css/dataTables.bootstrap4.min.css')),
    array('cssdata' => base_url('assets/dist/css/select.bootstrap4.min.css')),
    array('cssdata' => base_url('assets/dist/css/buttons.bootstrap4.min.css')),
    )
);

$config['js_list_default'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/jquery.min.js')),
    array('jsdata' => base_url('assets/dist/js/popper.min.js')),
    array('jsdata' => base_url('assets/dist/js/bootstrap.min.js')),
    array('jsdata' => base_url('assets/dist/js/myCommon.js'))
    )
);

$config['js_list_dashboard'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/myDashboard.js')),
    array('jsdata' => base_url('assets/dist/js/vendorCalendar.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.flatpickr.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);

$config['js_list_payment'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/myPayments.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.flatpickr.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);

$config['js_list_spending'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/mySpendings.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.flatpickr.js')),
    // array('jsdata' => base_url('assets/dist/js/bundles.datatable.js')),
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);

$config['account_type'] = array(
    array('code_value' => "",  "code_name" => "Select Account Type"),
    array('code_value' => "1", "code_name" => "Bank Saving Account"),
    array('code_value' => "2", "code_name" => "Credit Card"),
    array('code_value' => "3", "code_name" => "Cash")
);

$config['sub_category_first'] = array(
    array('code_value' => "", "code_name" => "Select Main Category first"),
);


/* End of file filename.php */
