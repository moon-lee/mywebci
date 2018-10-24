<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
    private $table = "wtasks";

    public function add_task_item($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    public function task_count_all()
    {
        $this->db->from($this->table);
        $this->db->where_not_in('task_status', array(99));

        return $this->db->count_all_results();
    }

    public function task_list($limit, $start)
    {
        $output ='';
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where_not_in('task_status', array(99));
        $this->db->order_by('task_due_date ASC', 'task_priority ASC');
        $this->db->limit($limit, $start);
        
        $output .= '<ul class="task-list">';

        if ($query = $this->db->get()) {
            foreach ($query->result() as $row) {
                $output .= ' 
                <li class="task_item">
                    <svg class="icon"><use xlink:href="#ellipsis-v"></use></svg>
                    <input type="checkbox" value="">
                    <span class="text">'.$row->task_item.'</span>
                ';
                switch ($row->task_priority) {
                    case 1:
                        $output .= '<div class="badge badge-danger" data-task-id="'.$row->id.'">
                        <svg class="icon"><use xlink:href="#clock"></use></svg>'.$row->task_due_date.'</div>';
                        break;
                    case 2:
                        $output .= '<div class="badge badge-warning" data-task-id="'.$row->id.'">
                        <svg class="icon"><use xlink:href="#clock"></use></svg>'.$row->task_due_date.'</div>';
                        break;
                    case 3:
                        $output .= '<div class="badge badge-primary" data-task-id="'.$row->id.'">
                        <svg class="icon"><use xlink:href="#clock"></use></svg>'.$row->task_due_date.'</div>';
                        break;
                    case 4:
                        $output .= '<div class="badge badge-success" data-task-id="'.$row->id.'">
                        <svg class="icon"><use xlink:href="#clock"></use></svg>'.$row->task_due_date.'</div>';
                        break;
                }
                $output .='
                    <div class="tools">
                        <svg class="icon fa-icon" id="delete_task"><use xlink:href="#trash-alt"></use></svg>
                    </div>
                </li>
                ';
            }
            $output .= '</ul>';
        }

        return $output;
    }

    public function delete_task_item($id)
    {
        //$this->db->delete($this->table, array('id', $id));
        $this->db->update($this->table, array('task_status' => 99), array('id' => $id));
    }
}

/* End of file Task_model.php */
