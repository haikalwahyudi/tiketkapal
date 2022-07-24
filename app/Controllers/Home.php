<?php

namespace App\Controllers;

use App\Models\M_pesantiket;

class Home extends BaseController
{
    protected $M_pesantiket;

    public function __construct()
    {
        $this->M_pesantiket = new M_pesantiket();
    }
    public function index()
    {

        $jmltiket = $this->M_pesantiket->cariId(session()->get('id_pengguna'));

        $jt = 0;
        foreach ($jmltiket as $j) {
            $jt++;
        }
        $data = [
            'title' => "SIPTIKA",
            'jt'    => $jt
        ];
        return view('v_beranda', $data);
    }

    public function landingpage()
    {
        return view('landingpage');
    }
}
