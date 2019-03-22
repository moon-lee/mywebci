<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends MY_Model
{
    private $table = "wcategory";

    public function getMainCategory()
    {
        $sql = "SELECT SUBSTR(cat_code,1,1) as value, cat_name as text FROM wcategory
        WHERE cat_code LIKE '%00' ";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function getSubCategory($mainCategory_code)
    {
        $sql = "SELECT cat_code as value, cat_name as text FROM wcategory
        WHERE SUBSTR(cat_code,2,2) != '00'
        AND cat_code LIKE '".$mainCategory_code."%' ";
        if ($query = $this->db->query($sql)) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}

/* End of file Category_model.php */
