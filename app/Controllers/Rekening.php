<?php

namespace App\Controllers;

use App\Models\M_rekening;

class Rekening extends BaseController
{
    protected $M_rekening;

    public function __construct()
    {
        $this->M_rekening = new M_rekening;
    }
    public function index()
    {
        $data = [
            'title' => "SIPTIKA",
            'data'  => $this->M_rekening->ambilData()
        ];
        return view('rekening/v_drekening', $data);
    }
    public function trekening()
    {
        $data = [
            'title' => 'Tambah Rekening',
        ];
        return view('/rekening/v_trekening', $data);
    }
    public function urekening($id)
    {
        $data = [
            'title' => 'Ubah Rekening',
            'data'  => $this->M_rekening->ambilData($id)->getRow()
        ];
        return view('/rekening/v_urekening', $data);
    }
    public function trekeningaksi()
    {
        $this->M_rekening->simpan([
            'bank'  => $this->request->getVar('bank'),
            'norek'  => $this->request->getVar('norek'),
        ]);
        session()->setFlashdata('simpan', 'Data rekening berhasil disimpan');
        return redirect()->to('/Rekening/trekening');
    }
    public function urekeningaksi()
    {
        $id = $this->request->getVar('id');
        $this->M_rekening->ubah([
            'bank'       => $this->request->getVar('bank'),
            'norek'       => $this->request->getVar('norek'),
        ], $id);
        session()->setFlashdata('ubah', 'Rekening berhasil diupdate');
        return redirect()->to('/Rekening');
    }
    public function hrekening($id)
    {
        $this->M_rekening->hapus($id);
        session()->setFlashdata('hapus', 'Rekening berhasil dihapus');
        return redirect()->to('/Rekening');
    }
}
