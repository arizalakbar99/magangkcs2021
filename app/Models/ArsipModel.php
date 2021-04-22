<?php

namespace App\Models;

use CodeIgniter\Model;

class ArsipModel extends Model
{
    protected $table = "permohonan";
    // protected $DBGroup = 'group_name';
    public function getPermohonan($id = false)
    {
        if ($id === false) {
            return $this->table('permohonan')->get()->getResult();
        }
    }
}
