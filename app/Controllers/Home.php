<?php

namespace App\Controllers;

use App\Models\M_pesantiket;
use App\Models\M_kapal;
use App\Models\M_pengguna;

class Home extends BaseController
{
    protected $M_pesantiket;
    protected $M_kapal;
    protected $M_pengguna;

    public function __construct()
    {
        $this->M_pesantiket = new M_pesantiket();
        $this->M_kapal = new M_kapal();
        $this->M_pengguna = new M_pengguna();
    }
    public function index()
    {

        $jmltiket = $this->M_pesantiket->cariId(session()->get('id_pengguna'));
        $jlhkpl = $this->M_kapal->ambilData();
        $jmlpg = $this->M_pengguna->ambilData();

        $jt = 0;
        $jkpl = 0;
        $jp   = 0;
        foreach ($jmltiket as $j) {
            $jt++;
        }
        foreach ($jlhkpl as $jk) {
            $jkpl++;
        }
        foreach ($jmlpg as $jpp) {
            $jp++;
        }
        $data = [
            'title' => "SIPTIKA",
            'jt'    => $jt,
            'jkpl'  => $jkpl,
            'jp'  => $jp
        ];
        return view('v_beranda', $data);
    }

    public function landingpage()
    {
        return view('landingpage');
    }
}
