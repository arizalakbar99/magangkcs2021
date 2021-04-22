<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "users";
    // protected $DBGroup = 'group_name';
    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->table('users')->get()->getResult();
        }
    }

    public function insertUser($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table('users')->update($data, array('id' => $id));
        return $query;
    }

    public function deleteUser($id)
    {
        $query = $this->db->table('users')->delete(array('id' => $id));
        return $query;
    }
}
