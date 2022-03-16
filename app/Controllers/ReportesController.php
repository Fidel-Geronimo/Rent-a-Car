<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ReportesController extends Controller
{
    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "active bg-gradient-primary",
            "perfil" => "",
        ];
        return view('admin/reportes', $colorBotonesPanel);
    }
}
