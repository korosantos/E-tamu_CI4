<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	
		$data = [
			'judul' => 'Dashboard Admin'
		];

		echo view('templates/header', $data);
		echo view('templates/sidebar');
		echo view('templates/topbar');
		echo view('admin/home/index');
		echo view('templates/footer');
	}

}
