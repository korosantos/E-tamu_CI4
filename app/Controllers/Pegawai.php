<?php
namespace App\Controllers;

use App\Models\M_pegawai;

class Pegawai extends BaseController
{
	public function index()
	{
		$Pegawai = new M_pegawai();
		$data = [
			'judul' => 'Data Pegawai',
			'dataPegawai' => $Pegawai->getPegawai()
		];

		echo view('templates/header', $data);
		echo view('templates/sidebar');
		echo view('templates/topbar');
		echo view('admin/home/pegawai', $data);
		echo view('templates/footer');
	}

}
