<?php

namespace App\Models;
use CodeIgniter\Model;

class Settings extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_all_settings()
    {
        $query = $this->db->query('SELECT id,setting_type,name,display_name,value,status FROM tbl_settings');
        $result = $query->getResultArray();
        return $result;
    }
}