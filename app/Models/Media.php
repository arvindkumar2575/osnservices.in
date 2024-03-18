<?php

namespace App\Models;
use CodeIgniter\Model;

class Media extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_all_media()
    {
        $query = $this->db->query('SELECT id,type,optional_value,name,display_name,url,alt,status FROM tbl_media');
        $result = $query->getResultArray();
        return $result;
    }

    public function get_media($id)
    {
        $query = $this->db->query('SELECT id,type,name,display_name,url,alt,status FROM tbl_pages WHERE id="'.$id.'"');
        $result = $query->getRowArray();
        return $result;
    }
}