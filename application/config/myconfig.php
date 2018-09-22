<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['css_list_default'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/bootstrap.min.css')),
    array('cssdata' => base_url('assets/dist/css/myScripts.css'))
    )
);
$config['css_list_dashboard'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/fullcalendar.min.css'))
    )
);

$config['js_list_default'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/jquery.min.js')),
    array('jsdata' => base_url('assets/dist/js/popper.min.js')),
    array('jsdata' => base_url('assets/dist/js/bootstrap.min.js')),
    array('jsdata' => base_url('assets/dist/js/vendorFonts.js')),
    array('jsdata' => base_url('assets/dist/js/myScripts.js'))
    )
);

$config['js_list_dashboard'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/vendorCalendar.js')),    
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);

$config['js_list_payment'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/vendorChart.js')),    
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);


/* End of file filename.php */
