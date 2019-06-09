<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transactions_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tb_name['transaction'] = "wtransaction";
        $this->tb_name['upload'] = "wuploaddata";
        $this->view_tb_name['view_transaction'] = "v_transaction";
    }

    public function transactions_list($post_data)
    {
        $this->_get_select_transaction($post_data);
        $this->db->limit($post_data['length'], $post_data['start']);
        
        if ($query = $this->db->get()) {
            return array(
                'draw' => $post_data['draw'],
                'recordsTotal' => $this->transactions_count_all(99),
                'recordsFiltered' => $this->filtered_transactions_count($post_data),
                'enable_match' => (bool)$this->transaction_count(0),
                'enable_apply' => (bool)$this->transaction_count(1),
                'enable_archive' => (bool)$this->transaction_count(2),
                'data' => $query->result_array(),
                'query' => $this->db->last_query()
            );
        } else {
            return false;
        }
    }

    private function _get_select_transaction($post_data)
    {
        $select_columns = 'DT_RowId, '.$this->get_columns_name($post_data['columns']);

        $this->db->select($select_columns);
        $this->db->from($this->view_tb_name['view_transaction']);

        $this->_get_filtered_transaction($post_data);
    }

    private function _get_filtered_transaction($post_data)
    {
        $search_columns = $this->get_like_clauses($post_data['columns']);

        foreach ($search_columns as $key => $value) {
            if ($post_data['search']['value']) {
                if ($key === 0) {
                    $this->db->group_start();
                    $this->db->like($value, $post_data['search']['value']);
                } else {
                    $this->db->or_like($value, $post_data['search']['value']);
                }
                if ($key == array_keys($search_columns)[count($search_columns)-1]) {
                    $this->db->group_end();
                }
            }
        }

        if ($post_data['category_code'] != '') {
            $this->db->like('sub_code', $post_data['category_code'], 'after');
        }
        if ($post_data['tstatus'] != '') {
            $this->db->like('t_status', $post_data['tstatus'], 'after');
        }
    }

    public function transactions_count_all($transstatus)
    {
        $sql = "SELECT COUNT(ID) as cnt FROM wtransaction 
                WHERE trans_status <> ".$transstatus;

        if ($query = $this->db->query($sql)) {
            $row =  $query->row();
            return $row->cnt;
        } else {
            return 0;
        }        

    }

    public function filtered_transactions_count($post_data)
    {
        $this->_get_select_transaction($post_data);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function transactions_load(&$data)
    {
        //return $this->db->insert($this->tb_name['upload'], $data);

        if ($this->db->insert($this->tb_name['upload'], $data)) {
            $data['upload_id'] = $this->db->insert_id();
            if ($this->_load_csv_data($data)) {
                return true;
            } else {
                $data['error_msg'] = 'Fail to load transaction data to database.';
                return false;
            }
        } else {
            $data['error_msg'] = 'Fail to insert the upload information.';
            return false;
        }
    }
    private function _load_csv_data($data)
    {
        /* //////////////////////////////////////////////////// */
        $this->db->trans_start();
        /* /////////////////////////////////////////
            2. Load csv file to temp table
        //////////////////////////////////////////*/
        $sql = "LOAD DATA INFILE '".$data['upload_file_name']."'
                INTO TABLE wtransaction
                FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'
                LINES TERMINATED BY '\r\n'
                (@trans_date, @trans_amount, trans_desc)
                SET trans_date = CAST(str_to_date(@trans_date,'%d/%m/%Y') AS DATE),
                    trans_amount = CAST(@trans_amount AS DECIMAL(13,2))";

        if ($query = $this->db->query($sql)) {
            $this->db->update($this->tb_name['upload'], array('upload_file_status' => 99), array('id' =>  $data['upload_id']));

        } else {
            return false;
        }

        $this->db->trans_complete();

        return $this->db->trans_status();
    }

    public function transactions_match($user)
    {
        $sql = "CALL sp_match_trans_data('".$user."')";

        if ($query = $this->db->query($sql)) {
            return array(
                'recordsTotal' => $this->transactions_count_all(99),
                'recordsMatched' => $this->transaction_count(1),
                'query' => $this->db->last_query(),
                'status' => true
            );
        } else {
            return false;
        }
    }

    public function transactions_apply($user)
    {
        $default_account = '1';

        $sql = "CALL sp_trans_spend_data('".$default_account."', '". $user ."')";

        if ($query = $this->db->query($sql)) {
            return array(
                'recordsTotal' => $this->transactions_count_all(99),
                'recordsApply' => $this->transaction_count(2),
                'query' => $this->db->last_query(),
                'status' => true
            );
        } else {
            return false;
        }
    }

    public function transactions_archive() {
        $before_archive_cnt = $this->transaction_count(2);

        $res = $this->db->update($this->tb_name['transaction'], array('trans_status' => 99), array('trans_status' =>  2));

        $after_archive_cnt = $this->transaction_count(2);

        if ($after_archive_cnt == 0 ) {
            $total_archive_cnt = $before_archive_cnt;
        } else {
            $total_archive_cnt = $before_archive_cnt - $after_archive_cnt;
        }

        if ($res) {
            return array(
                'recordsTotal' => $before_archive_cnt,
                'recordsArchive' => $total_archive_cnt,
                'query' => $this->db->last_query(),
                'status' => true
            );
        } else {
            return false;
        }
    }

    public function transaction_count ($transstatus) {
        $sql = "SELECT COUNT(ID) as cnt FROM wtransaction 
                WHERE trans_status = ".$transstatus;

        if ($query = $this->db->query($sql)) {
            $row =  $query->row();
            return $row->cnt;
        } else {
            return 0;
        }        

    }
}

/* End of file Transactions_model.php */
