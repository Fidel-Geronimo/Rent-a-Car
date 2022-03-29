<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RentaModel; //modelo de las rentas
use App\Models\ClientesModel; //modelo de los clientes
use App\Models\VehiculoModel; //modelo de los vehiculos
use CodeIgniter\I18n\Time; //hora

class AdminControllerRenta extends Controller
{

    public function index()
    {
        $renta = new RentaModel;
        $colorBotonesPanel = [
            "dashboard" => "active bg-gradient-primary",
            "vehiculos" => "",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
            "data" => $renta->orderBy('fecha', 'DESC')->findAll()
        ];
        return view('admin/renta', $colorBotonesPanel);
    }

    public function nuevaRentaAdmin()
    {
        $renta = new RentaModel;
        $clientes = new ClientesModel;
        $vehiculo = new VehiculoModel;
        $idVehiculo = $this->request->getPost('idVehiculo');
        $idCliente = $this->request->getPost('idCliente');
        // $myTime = new Time($this->request->getPost('fechaDevolucion'));
        // $diferencia = $myTime->difference($this->request->getPost('fechaDevolucion'));
        // $dias = $diferencia->getDays();
        $time = Time::parse('March 10, 2017', 'America/Chicago');
        $diff = $time->difference('July 4, 1975 13:32:05', 'America/Chicago');

        $precioRenta = $vehiculo->where('id', $idVehiculo)->findColumn('precio');
        $precioRentaTotal = intval($precioRenta) * $diff->getDays();;
        //===============================================================
        $data = [
            "cliente" => $clientes->where('id', $idCliente)->findColumn('nombre'),
            "foto" => $vehiculo->where('id', $idVehiculo)->findColumn('foto'),
            "telefono" => $this->request->getPost('telefonoRenta'),
            "email" => $this->request->getPost('emailRenta'),
            "fecharecogida" => $this->request->getPost('fechaRecogida'),
            "fechadevolucion" => $this->request->getPost('fechaDevolucion'),
            "horarecogida" => $this->request->getPost('horaRecogida'),
            "horadevolucion" => $this->request->getPost('horaDevolucion'),
            "idvehiculo" => $idVehiculo,
            "gato" => $this->request->getPost('gato'),
            "luces" => $this->request->getPost('luces'),
            "goma" => $this->request->getPost('goma'),
            "kitherramientas" => $this->request->getPost('kitHerramientas'),
            "combustible" => $this->request->getPost('combustible'),
            "descripcionvehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('descripcion'),
            "marcavehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('marca'),
            "modelovehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('modelo'),
            "preciorenta" => $precioRentaTotal
        ];
        $renta->insert($data);
        $respuesta = ['notificacion' => $diff];
        return $this->response->setJSON($respuesta);
    }
}
