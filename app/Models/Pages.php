<?php

namespace App\Models;
use CodeIgniter\Model;

class Pages extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_all_pages()
    {
        $query = $this->db->query('SELECT id,name,slug,status FROM tbl_pages');
        $result = $query->getResultArray();
        return $result;
    }

    public function get_page($id)
    {
        $query = $this->db->query('SELECT id,name,slug,status FROM tbl_pages WHERE id="'.$id.'"');
        $result = $query->getRowArray();
        return $result;
    }
}