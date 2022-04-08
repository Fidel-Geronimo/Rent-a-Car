<?php

namespace App\Controllers;

session_start();

use CodeIgniter\Controller;
use App\Models\RentaModel; //modelo de las rentas
use App\Models\ClientesModel; //modelo de los clientes
use App\Models\VehiculoModel; //modelo de los vehiculos
use App\Models\RentasCompletadasModel; //Modelo de rentas Completas
use App\Models\SolicitudModel; //Modelo de rentas Solicitudes

class AdminControllerRenta extends Controller
{

    public function index()
    {
        $solicitudes = new SolicitudModel();

        $colorBotonesPanel = [
            "dashboard" => "active bg-gradient-primary",
            "vehiculos" => "",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            'solicitudes' => $solicitudes->countAll()
        ];
        return view('admin/renta', $colorBotonesPanel);
    }
    public function ListarRentas()
    {
        $renta = new RentaModel;
        $data = $renta->where('estado', 0)->orderBy('fecha', 'DESC')->findAll();
        return $this->response->setJSON($data);
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
            "idcliente" => $idCliente,
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
        // $_SESSION["notificacion"] = "Renta Registrada!";
        return $this->response->setJSON($respuesta);
    }


    public function borrar()
    {
        $renta = new RentaModel;
        $idRenta = $this->request->getPost("idRenta");
        $renta->where('id', $idRenta)->delete();
        // $_SESSION["notificacion"] = "Renta Eliminada!";
        $data = ['notificacion' => "Renta Eliminada!"];
        return $this->response->setJSON($data);
    }
    public function info()
    {
        $renta = new RentaModel;
        $idRenta = $this->request->getPost("idRenta");
        $data = $renta->find($idRenta);
        return $this->response->setJSON($data);
    }

    public function Devolucion()
    {
        $rentaCompleta = new RentasCompletadasModel();
        $renta = new RentaModel;
        $idRenta = $this->request->getPost('idRenta');
        $idCliente = $renta->where('id', $idRenta)->findColumn('idcliente');
        $idVehiculo = $renta->where('id', $idRenta)->findColumn('idvehiculo');
        $data = [
            'idcliente' => $idCliente,
            'idvehiculo' => $idVehiculo,
            'gato' => $this->request->getPost('gatoDevolucion'),
            'kitherramientas' => $this->request->getPost('kitHerramientasDevolucion'),
            'goma' => $this->request->getPost('gomaDevolucion'),
            'abolladuras' => $this->request->getPost('abolladurasDevolucion'),
            'rayaduras' => $this->request->getPost('rayadurasDevolucion'),
            'piezasfaltantes' => $this->request->getPost('piezasFaltantesDevolucion'),

        ];
        $estado = ['estado' => '1'];
        $rentaCompleta->insert($data);
        $renta->update($idRenta, $estado);
        $respuesta = [
            'notificacion' => 'Devolucion Completada'
        ];
        // $_SESSION["notificacion"] = "Renta Retornada!";
        return $this->response->setJSON($respuesta);
    }
}
