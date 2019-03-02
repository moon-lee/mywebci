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
    array('cssdata' => base_url('assets/dist/css/flatpickr.min.css'))
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
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);


$config['payment_details'] = array(
    array('value' => "0", "text" => "Select detail"),
    array('value' => "1", "text" => "Base"),
    array('value' => "2", "text" => "Shift"),
    array('value' => "3", "text" => "Overtime(1.5)"),
    array('value' => "4", "text" => "Overtime(2)"),
    array('value' => "5", "text" => "Personal Leave"),
    array('value' => "6", "text" => "Holiday pay"),
    array('value' => "7", "text" => "Holiday Load")
);


$config['account_type'] = array(
    array('value' => "0", "text" => "-- Select Account Type --"),
    array('value' => "1", "text" => "Bank Saving Account"),
    array('value' => "2", "text" => "Credit Card"),
    array('value' => "3", "text" => "Cash")
);

$config['main_category_first'] = array(
    array('value' => "", "text" => "-- Select Main Category --"),
);

$config['sub_category_first'] = array(
    array('value' => "", "text" => "-- Select Main Category first --"),
);

$config['option_template'] = '<option value={value}>{text}</option>';


/* End of file filename.php */
