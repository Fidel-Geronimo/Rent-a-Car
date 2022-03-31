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

        // calculo de diferencia de fechas
        $dias = $this->request->getPost('diasTotales');
        $precioRenta = $vehiculo->where('id', $idVehiculo)->findColumn('precio');
        if ($dias == 0) {
            $dias = 1;
        }
        $preciototal = (int)$precioRenta[0] * (int)$dias;

        // //===============================================================
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
            "chasisvehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('chasis'),
            "transmisionvehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('transmision'),
            "motorvehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('motor'),
            "placavehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('placa'),
            "tipovehiculo" => $vehiculo->where('id', $idVehiculo)->findColumn('tipovehiculo'),
            "preciorenta" =>  $preciototal
        ];
        $renta->insert($data);
        $respuesta = ['notificacion' => 'Renta Registrada'];
        return $this->response->setJSON($respuesta);
    }

    public function borrar($id)
    {
        $renta = new RentaModel;
        $renta->where('id', $id)->delete($id);
        // $_SESSION["notificacion"] = "Empleado Eliminado!";

        return $this->response->redirect(base_url("admin"));
    }
    public function info()
    {
        $renta = new RentaModel;
        $idRenta = $this->request->getPost("idRenta");
        $data = $renta->find($idRenta);
        return $this->response->setJSON($data);
    }
}
