<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RentaModel; //modelo de las rentas
use App\Models\ClientesModel; //modelo de los clientes
use App\Models\VehiculoModel; //modelo de los vehiculos

class AdminControllerRenta extends Controller
{

    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "active bg-gradient-primary",
            "vehiculos" => "",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/renta', $colorBotonesPanel);
    }

    public function nuevaRentaAdmin()
    {
        $renta = new RentaModel;
        $clientes = new ClientesModel;
        $vehiculo = new VehiculoModel;
        //===================================
        $idVehiculo = $this->request->getPost('idVehiculoRenta');
        $idCliente = $this->request->getVar('clienteRenta');
        $data = [
            "cliente" => $clientes->where('id', $idCliente)->findColumn('nombre'),
            "foto" => $vehiculo->where('id', $idVehiculo)->findColumn('foto'),
            "telefono" => $this->request->getVar('telefonoRenta'),
            "email" => $this->request->getVar('emailRenta'),
            "fecharecogida" => $this->request->getVar('fechaRecogida'),
            "fechadevolucion" => $this->request->getVar('fechaDevolucion'),
            "horarecogida" => $this->request->getVar('horaRecogida'),
            "horadevolucion" => $this->request->getVar('horaDevolucion'),
            "idvehiculo" => $idVehiculo
        ];
        print_r($data);
        $renta->insert($data);

        // $apellido =  $this->request->getVar('apellido');
        // $email = $this->request->getVar('email');
        // $telefono = $this->request->getVar('telefono');

        // if ($nombre != "" || $apellido != "" || $email != "" || $telefono != "") {
        //     $datos = [
        //         "nombre" => $this->request->getVar('nombre'),
        //         "email" => $this->request->getVar('email'),
        //         "telefono" => $this->request->getVar('telefono')
        //     ];
        //     $clientes->insert($datos);
        //     $_SESSION["notificacion"] = "Cliente Registrado!";
        // } else {
        //     $_SESSION["notificacion"] = "Algo Salio Mal!";
        // }
        // return $this->response->redirect(base_url("admin/clientes"));
    }
}
