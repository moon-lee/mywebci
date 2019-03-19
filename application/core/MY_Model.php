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
}

/* End of file MY_Model.php */
