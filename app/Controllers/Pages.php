<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('pages/home');
	}
	public function about()
	{
		return view('about');
	}
}
