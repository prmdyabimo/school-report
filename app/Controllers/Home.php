<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [
            'title'     => "Home School Report | SMK Negeri 17 Jakarta",
        ];

        return view('pages/v_home', $data);

    }
}
