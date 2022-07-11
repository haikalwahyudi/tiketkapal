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
	public function tpenggunaAksi()
	{
		$this->M_pengguna->simpan([
			'nm_pengguna'		=> $this->request->getVar('nama'),
			'email'				=> $this->request->getVar('email'),
			'jk'				=> $this->request->getVar('jk'),
			'nohp'				=> $this->request->getVar('nohp'),
			'password'			=> $this->request->getVar('password'),
			'level'				=> $this->request->getVar('level'),
		]);
		session()->setFlashdata('simpan', 'Data berhasil disimpan');
		return redirect()->to('Pengguna/tpengguna');
	}
	public function upengguna($id)
	{
		$data = [
			'title'		=> 'Ubah Data Pengguna',
			'data'		=> $this->M_pengguna->ambilData($id)->getRow()
		];
		return view('pengguna/v_upengguna', $data);
	}
	public function upenggunaAksi()
	{
		$id = $this->request->getVar('id_pengguna');

		$this->M_pengguna->ubah([
			'nm_pengguna'		=> $this->request->getVar('nama'),
			'email'				=> $this->request->getVar('email'),
			'jk'				=> $this->request->getVar('jk'),
			'nohp'				=> $this->request->getVar('nohp'),
			'password'			=> $this->request->getVar('password'),
			'level'				=> $this->request->getVar('level'),
		], $id);
		session()->setFlashdata('ubah', 'Data berhasil diubah');
		return redirect()->to('Pengguna');
	}
	public function hpengguna($id)
	{
		$this->M_pengguna->hapus($id);
		session()->setFlashdata('hapus', 'Data berhasil dihapus');
		return redirect()->to('Pengguna');
	}
}
