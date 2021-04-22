<?php

namespace App\Models;

use CodeIgniter\Model;

class PermohonanModel extends Model
{
    protected $table = "permohonan";
    // protected $DBGroup = 'group_name';
    public function cekKetersediaan($data)
    {
        $tanggal = $this->db->table($this->table)->getWhere(['tanggal' => $data['tanggal']])->getResult();

        // $cariJam = $this->db->table($this->table)->where("jam_mulai BETWEEN $data[jam_mulai] AND $data[jam_selesai]")->get();

        $builder = $this->db->table($this->table);
        $builder->select('jam_mulai, jam_selesai');
        $builder->where("jam_mulai BETWEEN" . $data['jam_mulai'] . "AND" . $data['jam_selesai']);
        $builder->get();

        // $jam_selesai = $this->db->table($this->table)->getWhere(['jam_selesai' => $data['jam_selesai']])->getResult();


        return $builder;
        // if ($id === false) {
        //     return $this->table('users')->get()->getResult();
        // }
    }
}
