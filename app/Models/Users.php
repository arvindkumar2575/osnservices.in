<?php

namespace App\Models;
use CodeIgniter\Model;

class Users extends Model
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    public function get_all_users()
    {
        $query = $this->db->query('SELECT id,user_type,username,first_name,last_name,verified,status FROM tbl_users');
        $result = $query->getResultArray();
        return $result;
    }

    public function get_user($id)
    {
        $query = $this->db->query('SELECT id,user_type,username,first_name,last_name,verified,status FROM tbl_users WHERE id="'.$id.'"');
        $result = $query->getRowArray();
        return $result;
    }
}