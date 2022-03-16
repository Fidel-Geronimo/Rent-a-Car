<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EmpleadosController extends Controller
{

    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "",
            "empleados" => "active bg-gradient-primary",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/empleados', $colorBotonesPanel);
    }
}
