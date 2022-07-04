<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "SIPTIKA";
        return view('v_beranda', $data);
    }
}
