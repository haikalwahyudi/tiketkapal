<?php

namespace App\Controllers;

use App\Models\M_kapal;

class Kapal extends BaseController
{
    protected $M_kapal;

    public function __construct()
    {
        $this->M_kapal = new M_kapal;
    }
    public function index()
    {
        $data = [
            'title'        => 'Data Kapal',
            'data'      => $this->M_kapal->ambilData()
        ];
        return view('admin/kapal/v_dkapal', $data);
    }
    public function tkapal()
    {
        $data = [
            'title'        => 'Tambah Data Kapal'
        ];
        return view('admin/kapal/v_tkapal', $data);
    }
    public function tkapalaksi()
    {
        $gambar = $this->request->getFile('gambar');
        $RName = $gambar->getRandomName();
        $gambar->move('img', $RName);
        $this->M_kapal->simpan([
            'gambar'        => $RName,
            'nm_kapal'      => $this->request->getVar('nm_kapal'),
            'deskripsi'     => $this->request->getVar('deskripsi'),
        ]);
        session()->setFlashdata('simpan', 'Data berhasil disimpan');
        return redirect()->to('/Kapal/tkapal');
    }
    public function ukapal($id)
    {
        $data = [
            'title'        => 'Ubah Data Kapal',
            'data'        => $this->M_kapal->ambilData($id)->getRow()
        ];
        return view('admin/kapal/v_ukapal', $data);
    }
    public function ukapalaksi()
    {
        $id = $this->request->getVar('id_kapal');
        $inputPoto = $this->request->getFile('gambar');
        if ($inputPoto->getError() == 4) {
            $potoLama = $this->request->getVar('old_gambar');
            $RName = $potoLama;
        } else {
            $RName = $inputPoto->getRandomName();
            $inputPoto->move('img/', $RName);
            unlink('img/' . $this->request->getVar('old_gambar'));
        }
        $this->M_kapal->ubah([
            'gambar'        => $RName,
            'nm_kapal'      => $this->request->getVar('nm_kapal'),
            'deskripsi'     => $this->request->getVar('deskripsi'),
        ], $id);
        session()->setFlashdata('ubah', 'Data berhasil diubah');
        return redirect()->to('Kapal');
    }
    public function hkapal($id)
    {
        $gmb = $this->M_kapal->ambilData($id)->getRow();
        unlink('img/' . $gmb->gambar);
        $this->M_kapal->hapus($id);
        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('Kapal');
    }
}
