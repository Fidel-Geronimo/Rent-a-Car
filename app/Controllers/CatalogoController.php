<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VehiculoModel;

class CatalogoController extends Controller
{
    public function index()
    {
        $vehiculos = new VehiculoModel();
        $data = [
            "data" => $vehiculos->orderBy('fecha', 'DESC')->findAll()
        ];
        return view('vehiculos/catalogo', $data);
    }
}
