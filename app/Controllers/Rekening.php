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
        return view('rekening/v_rekening', $data);
    }
    public function urekeningAksi()
    {
        $id = $this->request->getVar('id');
        $this->M_rekening->ubah([
            'bri'       => $this->request->getVar('bri'),
            'bni'       => $this->request->getVar('bni'),
            'mandiri'   => $this->request->getVar('mandiri'),
            'bca'       => $this->request->getVar('bca'),
            'ntb'       => $this->request->getVar('ntb'),
            'ovo'       => $this->request->getVar('ovo'),
            'dana'      => $this->request->getVar('dana'),
            'linkaja'   => $this->request->getVar('linkaja'),
        ], $id);
        session()->setFlashdata('ubah', 'Rekening berhasil diupdate');
        return redirect()->to('/Rekening');
    }
}
