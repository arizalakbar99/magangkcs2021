<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Sistem KCS Zoom | LOGIN'
		];

		echo 1;
		die;
		echo view('layout/v_login', $data);
		echo view('pages/login');
	}
}
