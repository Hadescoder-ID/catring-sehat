<?php

namespace App\Controllers;
use App\Models\pegawaiModel;

class Pegawai extends BaseController
{
    protected $pegawaiModel;
    public function __construct()
    {
        $this->pegawaiModel = new pegawaiModel();
    }
	public function index()
	{
        $pegawai = $this->pegawaiModel->findAll();
      
		$data = [
            'title' => 'Data Pegawai',
            'pegawai' => $pegawai
         ];
         
         

         return view('pegawai/index',$data);
    }


}
