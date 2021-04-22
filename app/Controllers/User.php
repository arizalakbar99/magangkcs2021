<?php

namespace App\Controllers;

use App\Models\LinkModel;

class User extends BaseController
{
	public function PermohonanUser()
	{
		$data = [
			'tittle' => 'Permohonan User'
		];
		echo view('pages/PermohonanUser', $data);
	}

	public function Arsip()
	{
		$data = [
			'tittle' => 'Arsip'
		];
		echo view('layout/v_dashboard_user', $data);
		echo view('pages/Arsip');
	}

	public function redirectToZoom($param)
	{
		$model = new LinkModel();

		$data = [
			'tittle' => 'Zoom',
			'data_link' => $model->permohonanLink($param)
		];

		echo view('pages/redirectToZoom', $data);
	}
}
