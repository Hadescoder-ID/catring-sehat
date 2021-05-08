<?php

namespace App\Controllers;

// use App\Models\pegawaiModel;
use App\Models\pelangganModel;

class Page extends BaseController
{
	// protected $pegawaiModel;
	protected $pelangganModel;

	public function __construct()
	{
		$this->pelangganModel = new pelangganModel();
		// $this->pegawaiModel = new pegawaiModel();
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard',
			'menuActive' => 'Dashboard'
		];

		return view('pages/home', $data);
	}

	public function pegawai()
	{
		// $pegawai = $this->pegawaiModel->findAll();

		// $data = [
		// 	'title' => 'Data Pegawai',
		// 	'menuActive' => 'Pegawai',
		// 	'pegawai' => $pegawai
		// ];

		// return view('pages/pegawai', $data);
	}

	public function pelanggan()
	{
		$pelanggan = $this->pelangganModel->findAll();

		$data = [
			'title' => 'Data Pelanggan',
			'menuActive' => 'Pelanggan',
			'pelanggan' => $pelanggan
		];

		return view('pages/pelanggan', $data);
	}

	public function transaksi()
	{
	}
}
