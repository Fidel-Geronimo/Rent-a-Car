<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ClientesModel;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = new clientesModel;

        $datos['clientes'] = $clientes ->findAll();
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "active bg-gradient-primary",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/clientes', $colorBotonesPanel);
    }

    public function nuevo()
    {
        $clientes = new clientesModel;
        $data = [
            "nombre" => $this->request->getPost('nombre'),
            "apellido" => $this->request->getPost('apellido'),
            "email" => $this->request->getPost('email'),
            "telefono" => $this->request->getPost('telefono')
        ];
        $clientes->save($data);
        $data = ['status' => 'Cliente Registrado!'];
        return $this->response->setJSON($data);
    }
}
