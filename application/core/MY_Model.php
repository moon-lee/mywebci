<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $tb_name;

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
            if ($columns[$value["column"]]["orderable"]) {
                $orderby_cluse[$columns[$value["column"]]["data"]] = $value["dir"];
            }
        }
        
        return  $orderby_clauses;
    }

    protected function get_like_clauses($columns)
    {
        $like_clauses = array();
        
        foreach ($columns as $key => $value) {
            if ($value["searchable"]) {
                $like_clauses[] = $value["data"];
            }
        }

        return $like_clauses;
    }
}

/* End of file MY_Model.php */
