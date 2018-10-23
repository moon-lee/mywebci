<?php

defined('BASEPATH') or exit('No direct script access allowed');

// custom paging configuration
$config['num_links'] = 1;
$config['use_page_numbers'] = true;
$config['full_tag_open'] = '<ul class="pagination pagination-sm justify-content-end">';
$config['full_tag_close'] = '</ul>';
$config['first_link'] = "First";
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';
$config['last_link'] = "Last";
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';
$config['next_link'] = "<span aria-hidden=\"true\">&raquo;</span>";
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';
$config['prev_link'] = "<span aria-hidden=\"true\">&laquo;</span>";
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tag_close'] = '</li>';
$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['attributes'] = array('class' => 'page-link');
$config['attributes']['rel'] = false;
