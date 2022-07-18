<?php

namespace App\Controllers;

class Rekening extends BaseController
{
    public function index()
    {
        $data['title'] = "SIPTIKA";
        return view('rekening/v_rekening', $data);
    }
}
