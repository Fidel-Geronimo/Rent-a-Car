<?php

namespace App\Controllers;

session_start();

use CodeIgniter\Controller;
use App\Models\SolicitudModel;
use App\Models\VehiculoModel;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitud = new SolicitudModel();
        $data = ['datos' => $solicitud->orderBy('fecha', 'DESC')->findAll()];
        return $this->response->setJSON($data);
    }

    public function nuevaSolicitud()
    {
        $solicitud = new SolicitudModel();
        $vehiculo = new VehiculoModel();
        $idVehiculo = $this->request->getPost('idVehiculoReserva');
        $datos = [
            'cliente' =>  $this->request->getPost('nombreCliente'),
            'idvehiculo' => $idVehiculo,
            'fotoVehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('foto'),
            'modeloVehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('modelo'),
            'marcaVehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('marca'),
            'precioVehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('precio'),
            'telefono' =>  $this->request->getPost('telefonoCliente'),
            'email' =>  $this->request->getPost('emailRenta'),
            'fecharecogida' =>  $this->request->getPost('fechaRecogida'),
            'fechadevolucion' =>  $this->request->getPost('fechaDevolucion'),
            'horarecogida' =>  $this->request->getPost('horaRecogida'),
            'horadevolucion' =>  $this->request->getPost('horaDevolucion'),
            'diastotales' =>  $this->request->getPost('diasTotales')
        ];
        $solicitud->insert($datos);
        $_SESSION["SolicitudNueva"] = "Alguien Ha Solicitado Renta";
        $respuesta = ['respuesta' => 'Solicitud Enviada!'];
        return $this->response->setJSON($respuesta);
    }
}
