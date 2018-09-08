<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['css_list_default'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/bootstrap.min.css')),
    array('cssdata' => base_url('assets/dist/css/custom.css'))
    )
);
$config['css_list_dashboard'] = array(
    'csslist' => array(
    array('cssdata' => base_url('assets/dist/css/fullcalendar.min.css'))
    )
);

$config['js_list_default'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/jquery.slim.min.js')),
    array('jsdata' => base_url('assets/dist/js/popper.min.js')),
    array('jsdata' => base_url('assets/dist/js/bootstrap.min.js')),
    array('jsdata' => base_url('assets/dist/js/fonts.js')),
    array('jsdata' => base_url('assets/dist/js/custom.js'))
    )
);

$config['js_list_dashboard'] = array(
    'jslist' => array(
    array('jsdata' => base_url('assets/dist/js/fullcalendar.js')),    
    array('jsdata' => base_url('assets/dist/js/bundles.moment.js'))
    )
);


/* End of file filename.php */
