<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('vehiculos/index');
    }

    public function catalogo()
    {
        return view('vehiculos/catalogo');
    }
}
