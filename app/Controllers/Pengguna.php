<?php 
namespace App\Controllers;

use App\Models\M_pengguna;

class Pengguna extends BaseController
{
	protected $M_pengguna;

	public function __construct()
	{
		$this->M_pengguna = new M_pengguna;
	}
	public function index()
	{
		$data = [
			'title'		=> 'Data Pengguna',
            'data'      => $this->M_pengguna->ambilData()
		];
		return view('pengguna/v_dpengguna', $data);
	}
	public function tpengguna()
	{
		$data = [
			'title'		=> 'Tambah Data Pengguna'
		];
		return view('pengguna/v_tpengguna', $data);
	}
	public function upengguna()
	{
		$data = [
			'title'		=> 'Ubah Data Pengguna'
		];
		return view('pengguna/v_upengguna', $data);
	}
}