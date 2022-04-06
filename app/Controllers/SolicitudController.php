<?php

namespace App\Controllers;

session_start();

use CodeIgniter\Controller;
use App\Models\SolicitudModel;
use App\Models\VehiculoModel;
use App\Models\ClientesModel;

class SolicitudController extends Controller
{
    public function index()
    {
        $solicitud = new SolicitudModel();
        $data = ['datos' => $solicitud->orderBy('fecha', 'DESC')->findAll()];
        return $this->response->setJSON($data);
    }

    public function ProcesarSolicitud()
    {
        $solicitud = new SolicitudModel();
        $idCliente = $this->request->getPost('idCliente');
        $data = ['datos' => $solicitud->where('idcliente', $idCliente)->find()];
        return $this->response->setJSON($data);
    }
    public function EliminarSolicitud()
    {
        $solicitud = new SolicitudModel();
        $idSolicitud = $this->request->getPost('idSolicitud');
        $solicitud->where('id', $idSolicitud)->delete();
        $respuesta = ['notificacion'];
        return $this->response->setJSON($respuesta);
    }

    public function nuevaSolicitud()
    {

        $solicitud = new SolicitudModel();
        $vehiculo = new VehiculoModel();
        $cliente = new ClientesModel();

        $datosCliente = [
            'nombre' =>  $this->request->getPost('nombreCliente'),
            'email' =>  $this->request->getPost('emailRenta'),
            'telefono' =>  $this->request->getPost('telefonoCliente'),
        ];
        $cliente->insert($datosCliente);
        // obtener ultimo id insertado en base de datos cliente
        $db = \Config\Database::connect();
        $idCliente   = $db->insertID();
        // ====================================================
        $idVehiculo = $this->request->getPost('idVehiculoReserva');
        $datos = [
            'cliente' =>  $this->request->getPost('nombreCliente'),
            'idcliente' =>  $idCliente,
            'idvehiculo' => $idVehiculo,
            'fotovehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('foto'),
            'descripcionvehiculo' => $vehiculo->where('id', $idVehiculo)->findColumn('descripcion'),
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
