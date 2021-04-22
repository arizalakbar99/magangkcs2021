<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminArsip extends BaseController
{
    public function index()
    {
        $data['tittle'] = 'Arsip';

        $ArsipModel = new ArsipModel();

        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        $data['Permohonan'] = $ArsipModel->get();
        // kirim data ke view
        echo view('pages/kelolaUser.php', $data);
    }