<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller
{

    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "active bg-gradient-primary",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/renta', $colorBotonesPanel);
    }
}
