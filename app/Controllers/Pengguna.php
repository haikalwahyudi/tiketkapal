<?php namespace App\Controllers;

class Pengguna extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'Data Pengguna'
		];
		return view('pengguna/v_dpengguna', $data);
	}
}