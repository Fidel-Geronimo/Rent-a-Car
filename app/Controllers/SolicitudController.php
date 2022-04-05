<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SolicitudModel;

class SolicitudController extends Controller
{
    public function nuevaSolicitud()
    {
        $solicitud = new SolicitudModel();
        $datos = [
            'idvehiculo' =>  $this->request->getPost('nombreCliente'),
            'cliente' => $this->request->getPost('idVehiculoReserva'),
            'telefono' =>  $this->request->getPost('telefonoCliente'),
            'email' =>  $this->request->getPost('emailRenta'),
            'fecharecogida' =>  $this->request->getPost('fechaRecogida'),
            'fechadevolucion' =>  $this->request->getPost('fechaDevolucion'),
            'horarecogida' =>  $this->request->getPost('horaRecogida'),
            'horadevolucion' =>  $this->request->getPost('horaDevolucion'),
            'diastotales' =>  $this->request->getPost('diasTotales')
        ];
        $solicitud->insert($datos);
        $respuesta = ['respuesta' => 'Solicitud Enviada!'];
        return $this->response->setJSON($respuesta);
    }
}
