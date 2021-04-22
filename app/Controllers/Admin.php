<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function dashboardAdmin()
	{
        $data = [
			'tittle' => 'Dashboard | Admin'
		];
		echo view('layout/v_dashboard_admin', $data);
		echo view('pages/dashboardAdmin');
	}

}
