<?php

namespace App\Models;

use CodeIgniter\Model;

class ModUsers extends Model
{
    // get single row based on 1 condition
    function get_row_c1($table_name, $col1, $val1)
    {
        $this->db->where($col1, $val1);
        $query = $this->db->get($table_name);
        return $query->row();
        if ($query->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    // get single row based on 2 condition
    function get_row_c2($table_name, $col1, $val1, $col2, $val2)
    {
        $this->db->where($col1, $val1);
        $this->db->where($col2, $val2);
        $query = $this->db->get($table_name);
        return $query->row();
    }

    // get single row based on 2 condition
    function get_row_c3($table_name, $col1, $val1, $col2, $val2, $col3, $val3)
    {
        $this->db->where($col1, $val1);
        $this->db->where($col2, $val2);
        $this->db->where($col3, $val3);
        $query = $this->db->get($table_name);
        return $query->row();
    }

    // get single row based on 4 condition
    function get_row_c4($table_name, $col1, $val1, $col2, $val2, $col3, $val3, $col4, $val4)
    {
        $this->db->where($col1, $val1);
        $this->db->where($col2, $val2);
        $this->db->where($col3, $val3);
        $this->db->where($col4, $val4);
        $query = $this->db->get($table_name);
        return $query->row();
    }

    // get all rows
    function get_rows($table_name)
    {
        $query = $this->db->get($table_name);
        return $query->result_array();
    }

    //deleteRecord
    public function deleteRecord($table, $cond)
    {
        $this->db->where($cond);
        $this->db->delete($table);
        //echo $this->db->last_query();
        return True;
    }
}
