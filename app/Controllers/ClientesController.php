<?php

namespace App\Controllers;

session_start();

use CodeIgniter\Controller;

use App\Models\ClientesModel;
use Exception;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = new ClientesModel;
        $data = [
            "dashboard" => "",
            "clientes" => "active bg-gradient-primary",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
            "data" => $clientes->orderBy('id', 'ASC')->findAll()
        ];
        return view("admin/clientes", $data);
    }


    public function nuevo()
    {
        $clientes = new ClientesModel;

        $nombre = $this->request->getVar('nombre');
        $apellido =  $this->request->getVar('apellido');
        $email = $this->request->getVar('email');
        $telefono = $this->request->getVar('telefono');

        if ($nombre != "" || $apellido != "" || $email != "" || $telefono != "") {
            $datos = [
                "nombre" => $this->request->getVar('nombre'),
                "apellido" => $this->request->getVar('apellido'),
                "email" => $this->request->getVar('email'),
                "telefono" => $this->request->getVar('telefono')
            ];
            $clientes->insert($datos);
            $_SESSION["notificacion"] = "Cliente Registrado!";
        } else {
            $_SESSION["notificacion"] = "Algo Salio Mal!";
        }
        return $this->response->redirect(base_url("admin/clientes"));
    }
}
