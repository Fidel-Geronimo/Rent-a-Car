<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ClientesController extends Controller
{
    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "active bg-gradient-primary",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/clientes', $colorBotonesPanel);
    }
}
