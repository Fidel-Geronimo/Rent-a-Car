<?php

namespace App\Controllers;

use App\Models\VehiculoModel;

class Home extends BaseController
{
    public function index()
    {
        return view('vehiculos/index');
    }
}
