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
            'title'        => 'Laporan',
            'data'      => $this->M_pesantiket->ambilData()
        ];
        return view('/admin/laporan/v_dlaporan', $data);
    }
}
