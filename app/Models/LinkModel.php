<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $table = "daftar_link";

    public function permohonanLink($idPermohonan)
    {
        return $this->table('daftar_link')->getWhere(['permohonan_id' => $idPermohonan])->getRow();
    }
}
