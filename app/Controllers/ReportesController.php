<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RentaModel;

class ReportesController extends Controller
{
    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "",
            "vehiculos" => "",
            "empleados" => "",
            "reportes" => "active bg-gradient-primary",
            "perfil" => "",
        ];
        return view('admin/reportes', $colorBotonesPanel);
    }
    public function info()
    {
        $renta = new RentaModel;
        $data = $renta->find();
        return $this->response->setJSON($data);
    }
}
