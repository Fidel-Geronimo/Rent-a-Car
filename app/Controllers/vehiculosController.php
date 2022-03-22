<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class vehiculosController extends Controller
{
    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "vehiculos" => "active bg-gradient-primary",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
        ];
        return view("admin/vehiculos", $colorBotonesPanel);
    }
}
