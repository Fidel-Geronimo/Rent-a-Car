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
        ];
        return view('admin/reportes', $colorBotonesPanel);
    }
    public function info()
    {
        $renta = new RentaModel;
        $data = $renta->find();
        return $this->response->setJSON($data);
    }

    // =========================Reportes==========================
    public function Reportes()
    {
        $renta = new RentaModel;
        $tipoReporte = $this->request->getPost("tipoReporte");
        if ($tipoReporte == 1) {
            $idVehiculo = $this->request->getPost("idvehiculo");
            $data = $renta->where('idvehiculo', $idVehiculo)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 2) {
            $idCliente = $this->request->getPost("idcliente");
            $data = $renta->where('idcliente', $idCliente)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 3) {
            $estado = $this->request->getPost("estado");
            $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 4) {
            $estado = $this->request->getPost("estado");
            $idVehiculo = $this->request->getPost("idvehiculo");
            $db = \Config\Database::connect();
            $query   = $db->query("SELECT * FROM renta where (estado = '$estado') AND (idvehiculo = '$idVehiculo')");
            $data = $query->getResult();
            // $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 5) {
            $estado = $this->request->getPost("estado");
            $idCliente = $this->request->getPost("idcliente");
            $db = \Config\Database::connect();
            $query   = $db->query("SELECT * FROM renta where (estado = '$estado') AND (idcliente = '$idCliente')");
            $data = $query->getResult();
            // $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 6) {
            $estado = $this->request->getPost("estado");
            $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 7) {
            $estado = $this->request->getPost("estado");
            $idVehiculo = $this->request->getPost("idvehiculo");
            $db = \Config\Database::connect();
            $query   = $db->query("SELECT * FROM renta where (estado = '$estado') AND (idvehiculo = '$idVehiculo')");
            $data = $query->getResult();
            // $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        } else if ($tipoReporte == 8) {
            $estado = $this->request->getPost("estado");
            $idCliente = $this->request->getPost("idcliente");
            $db = \Config\Database::connect();
            $query   = $db->query("SELECT * FROM renta where (estado = '$estado') AND (idcliente = '$idCliente')");
            $data = $query->getResult();
            // $data = $renta->where('estado', $estado)->find();
            return $this->response->setJSON($data);
        }
    }

    // =========================Reportes END==========================
}
