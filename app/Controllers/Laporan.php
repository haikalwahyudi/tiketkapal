<?php

namespace App\Controllers;

use App\Models\M_pesantiket;

class Laporan extends BaseController
{
    protected $M_pesantiket;

    public function __construct()
    {
        $this->M_pesantiket = new M_pesantiket;
    }
    public function index()
    {
        $data = [
            'title'         => 'Laporan',
            'data'          => $this->M_pesantiket->ambilData()
        ];
        return view('/admin/laporan/v_dlaporan', $data);
    }
    public function filter()
    {
        $tanggal = [
            'awal'  => $this->request->getVar('tgl_awal'),
            'akhir' => $this->request->getVar('tgl_akhir')
        ];

        $data = [
            'title'     => 'Laporan',
            'tanggal'   => $tanggal,
            'caridata'  => $this->M_pesantiket->filter($tanggal)
        ];
        return view('/admin/laporan/v_tlaporan', $data);
    }
}
