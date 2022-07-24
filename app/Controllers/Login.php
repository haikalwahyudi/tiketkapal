<?php

namespace App\Controllers;

use App\Models\M_pengguna;
use App\Models\M_login;

class Login extends BaseController
{
	protected $M_pengguna;
	protected $M_login;

	public function __construct()
	{
		$this->M_pengguna = new M_pengguna;
		$this->M_login = new M_login;
	}
	public function index()
	{
		return view('/login/v_login');
	}
	public function daftar()
	{
		return view('/login/v_daftarakun.php');
	}
	public function daftarAksi()
	{
		$this->M_pengguna->simpan([
			'nm_pengguna'		=> $this->request->getVar('nama'),
			'email'				=> $this->request->getVar('email'),
			'jk'				=> $this->request->getVar('jk'),
			'nohp'				=> $this->request->getVar('nohp'),
			'password'			=> $this->request->getVar('password'),
			'level'				=> 'Pengguna',
		]);
		session()->setFlashdata('simpan', 'Akun berhasil dibuat, silahkan masuk');
		return redirect()->to('Login/daftar');
	}
	public function cekLogin()
	{
		$email 		= $this->request->getVar('email');
		$password 	= $this->request->getVar('password');

		$cek = $this->M_login->cekData($email);

		// dd($cek);

		if ($cek != null) {
			if ($cek['level'] == 'Admin') {
				$data_ses = [
					'nama'		=> $cek['nm_pengguna'],
					'email'		=> $cek['email'],
					'level'		=> $cek['level'],
					'log_in'	=> true,
				];
				if ($cek['password'] == $password) {
					session()->set($data_ses);
					return redirect()->to('/Home');
				} else {
					session()->setFlashdata('gagal', 'Password yang anda masukkan salah');
					return redirect()->to('/Login');
				}
			} else {
				$data_ses = [
					'id_pengguna'	=> $cek['id_pengguna'],
					'nama'			=> $cek['nm_pengguna'],
					'email'			=> $cek['email'],
					'level'			=> $cek['level'],
					'log_in'		=> true,
				];
				if ($cek['password'] == $password) {
					session()->set($data_ses);
					return redirect()->to('/Home/landingpage');
				} else {
					session()->setFlashdata('gagal', 'Password yang anda masukkan salah');
					return redirect()->to('/Login');
				}
			}
		} else {
			session()->setFlashdata('gagal', 'Email anda tidak terdaftar');
			return redirect()->to('/Login');
		}
	}
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/Home/landingpage');
	}
}
