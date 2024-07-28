<?php

namespace App\Models;
use CodeIgniter\Model;

class Components extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_all_components()
    {
        $query = $this->db->query('SELECT id,name,value,status FROM tbl_components');
        $result = $query->getResultArray();
        return $result;
    }

    public function get_components($id)
    {
        $query = $this->db->query('SELECT id,name,value,status, FROM tbl_components WHERE id="'.$id.'"');
        $result = $query->getRowArray();
        return $result;
    }
}