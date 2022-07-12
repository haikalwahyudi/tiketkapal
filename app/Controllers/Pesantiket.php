<?php

namespace App\Controllers;

class Pesantiket extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Pesan Tiket",
        ];
        return view('pesantiket/v_dpesantiket', $data);
    }
}
