<?php

namespace App\Controllers;

use App\Models\PermohonanModel;

class Permohonan extends BaseController
{
    // private $model = new PermohonanModel();





    public function index()
    {
        $data = [
            'tittle' => 'Permohonan User'
        ];
        echo view('pages/PermohonanUser', $data);
    }

    public function cekKetersediaan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $model = new PermohonanModel();

        $tanggal = $this->request->getPost('tanggal');
        $jam_mulai = $this->request->getPost('jam_mulai');
        $jam_selesai = $this->request->getPost('jam_selesai');


        $model = new PermohonanModel();

        $tanggal = $this->request->getPost('tanggal');
        $jam_mulai = $this->request->getPost('jam_mulai');
        $jam_selesai = $this->request->getPost('jam_selesai');
        $jam_mulai_second = strtotime($tanggal . " " . $jam_mulai);
        $jam_selesai_second = strtotime($tanggal . " " . $jam_selesai);

        // echo $jam_mulai_second;

        $response = $model->cekKetersediaan(['tanggal' => $tanggal, 'jam_mulai' => $jam_mulai, 'jam_selesai' => $jam_selesai, 'jam_mulai_second' => $jam_mulai_second, 'jam_selesai_second' => $jam_selesai_second]);



        // echo json_encode($response);
    }
}
