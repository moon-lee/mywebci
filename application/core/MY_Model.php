<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $tb_name = array();
    protected $view_tb_name = array();

    
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->config->load('myconfig', true);
    //     $this->myconfig = $this->config->item('myconfig');
    // }
    
    
    protected function get_columns_name($columns)
    {
        $columns_name = "";

        foreach ($columns as $key => $value) {
            if ($key != "0") {
                $columns_name .= ",".$value["data"];
            } else {
                $columns_name .= $value["data"];
            }
        }

        return $columns_name;
    }

    protected function get_orders($orders, $columns)
    {
        $orderby_clauses = array();

        foreach ($orders as $key => $value) {
            $orderable = $columns[$value["column"]]["orderable"] === "true" ? true: false;

            if ($orderable) {
                $orderby_clauses[$columns[$value["column"]]["data"]] = $value["dir"];
            }
        }
        
        return  $orderby_clauses;
    }

    protected function get_like_clauses($columns)
    {
        $like_clauses = array();
        
        foreach ($columns as $key => $value) {
            $searchable = $value["searchable"] === "true" ? true: false;

            if ($searchable) {
                $like_clauses[] = $value["data"];
            }
        }

        return $like_clauses;
    }

    protected function _debug_print($output)
    {
        echo "<pre>.$output.</pre>";
    }
}

/* End of file MY_Model.php */
