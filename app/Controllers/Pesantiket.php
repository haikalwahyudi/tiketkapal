<?php

namespace App\Controllers;

use App\Models\M_pesantiket;
use App\Models\M_rekening;

class Pesantiket extends BaseController
{
    protected $M_pesantiket;
    protected $M_rekening;
    public function __construct()
    {
        $this->M_pesantiket = new M_pesantiket();
        $this->M_rekening = new M_rekening();
    }
    public function index()
    {

        $data = [
            'title' => "Pesan Tiket",
            'dtiket'  => $this->M_rekening->ambilData()
        ];
        return view('pesantiket/v_dpesantiket', $data);
    }
    public function berhasil()
    {
        $data = [
            'title' => "Tiket Kapal",
            'cariId'    => $this->M_pesantiket->cariId(session()->get('id_pengguna'))
        ];
        return view('/pesantiket/v_berhasil', $data);
    }
    public function simpan_pemesanan()
    {
        $this->M_pesantiket->simpan([
            'nm_pemesan'    => $this->request->getVar('nm_pemesan'),
            'id_pengguna'    => session()->get('id_pengguna'),
            'jk'    => $this->request->getVar('jk'),
            'tempat_lahir'    => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'    => $this->request->getVar('tgl_lahir'),
            'tgl_pemesanan'    => date('Y-m-d', time() + (60 * 60 * 14)),
            'nik'    => $this->request->getVar('nik'),
            'nohp'    => $this->request->getVar('nohp'),
            'alamat'    => $this->request->getVar('alamat'),
            'dewasa'    => $this->request->getVar('dewasa'),
            'bayi'    => $this->request->getVar('bayi'),
            'jeniskendaraan'    => $this->request->getVar('kendaraan'),
            'id_pembayaran'    => $this->request->getVar('pembayaran'),
            'gambar'    => 'default.png',
            'aksi'    => '1',
            'total_pembayaran'    => $this->request->getVar('biaya'),
        ]);
        session()->setFlashdata('simpan', 'Pemesanan tiket berhasil');
        return redirect()->to('/Pesantiket/berhasil');
    }
    public function riwayat()
    {
        $data = [
            'title'     => "Riwayat Pembeliat Tiket",
            'cariId'    => $this->M_pesantiket->cariId(session()->get('id_pengguna'))
        ];
        return view('/pesantiket/v_riwayat', $data);
    }
    public function uploadbukti()
    {
        $id_pemesanan = $this->request->getVar('id_pemesanan');
        $inputPoto = $this->request->getFile('gambar');
        $nmPoto = $inputPoto->getRandomName();
        $inputPoto->move('img/', $nmPoto);
        $this->M_pesantiket->ubah([
            'gambar'    => $nmPoto,
            'aksi'      => '2'
        ], $id_pemesanan);
        session()->setFlashdata('simpan', 'Bukti pembayaran berhasil diupload');
        return redirect()->to('/Pesantiket/berhasil');
    }
    public function uploadbuktiriwayat()
    {
        $id_pemesanan = $this->request->getVar('id_pemesanan');
        $inputPoto = $this->request->getFile('gambar');
        $nmPoto = $inputPoto->getRandomName();
        $inputPoto->move('img/', $nmPoto);
        $this->M_pesantiket->ubah([
            'gambar'    => $nmPoto,
            'aksi'      => '2'
        ], $id_pemesanan);
        session()->setFlashdata('simpan', 'Bukti pembayaran berhasil diupload');
        return redirect()->to('/Pesantiket/riwayat');
    }
    public function cetaktiket($id_pemesanan)
    {
        $data = [
            'data'  => $this->M_pesantiket->ambilData($id_pemesanan)->getRow()
        ];
        return view('/Pesantiket/v_cetaktiket', $data);
    }
    public function cetaktiket2($id_pemesanan)
    {
        $data = [
            'data'  => $this->M_pesantiket->ambilData($id_pemesanan)->getRow()
        ];
        return view('/Pesantiket/v_cetaktiket2', $data);
    }
    public function cetaktiket3($id_pemesanan)
    {
        $data = [
            'data'  => $this->M_pesantiket->ambilData($id_pemesanan)->getRow()
        ];
        return view('/admin/v_cetaktiket', $data);
    }
    public function dtiket()
    {
        $data = [
            'title' => "Konfirmasi Pemesanan",
            'data'  => $this->M_pesantiket->ambilData()
        ];
        return view('/admin/v_dpesantiket', $data);
    }
    public function konfirmasi($id)
    {
        $this->M_pesantiket->ubah([
            'aksi'      => '3'
        ], $id);
        session()->setFlashdata('simpan', 'Berhasil dikonfirmasi');
        return redirect()->to('/Pesantiket/dtiket');
    }
}
