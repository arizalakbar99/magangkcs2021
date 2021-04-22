<?php

namespace App\Controllers;

use App\Models\UserModel;

class KelolaUser extends BaseController
{
    public function index()
    {

        $data['tittle'] = 'Kelola User';

        $UserModel = new UserModel();

        /*
         siapkan data untuk dikirim ke view dengan nama $newses
         dan isi datanya dengan news yang sudah terbit
        */
        $data['users'] = $UserModel->getUser();
        // kirim data ke view
        echo view('pages/kelolaUser.php', $data);
    }

    public function store()
    {
        $UserModel = new UserModel();
        // Mengambil value dari form dengan method POST
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password_hash');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'username' => $username,
            'email' => $email,
            'password_hash' => password_hash($password, PASSWORD_DEFAULT),
            'password' => base64_encode($password)
        ];

        /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_product dan membawa parameter data 
    */
        $simpan = $UserModel->insertUser($data);

        // Jika simpan berhasil, maka ...
        if ($simpan) {
            // // Deklarasikan session flashdata dengan tipe success
            // session()->setFlashdata('success', 'Created product successfully');
            // // Redirect halaman ke product
            return redirect()->to(base_url('admin/user'));
        }
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $data = array(
            'username'      => $this->request->getPost('username'),
            'email'         => $this->request->getPost('email'),
            'password_hash' => password_hash($this->request->getPost('password_hash'), PASSWORD_DEFAULT),
            'password' => base64_encode($this->request->getPost('password_hash'))
        );
        $model->updateUser($data, $id);
        return redirect()->to(base_url('admin/user'));
    }

    public function delete()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $model->deleteUser($id);
        return redirect()->to(base_url('admin/user'));
    }
}
