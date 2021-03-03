<?php

namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);

		echo view('template/header', $data);
		echo view('login');
		echo view('template/footer');
	}

	public function register(){
		$data = [];
		helper(['form']);

		echo view('template/header', $data);
		echo view('register');
		echo view('template/footer');
	}
}
