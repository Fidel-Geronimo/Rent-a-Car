<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmpleadosModel;

class EmpleadosController extends Controller
{

    public function index()
    {
        $colorBotonesPanel = [
            "dashboard" => "",
            "clientes" => "",
            "empleados" => "active bg-gradient-primary",
            "reportes" => "",
            "perfil" => "",
        ];
        return view('admin/empleados', $colorBotonesPanel);
    }
    public function nuevo()
    {
        $empleados = new EmpleadosModel;
        if ($foto = $this->request->getFile('foto')) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move('./public/uploads', $nuevoNombre);
            $data = [
                "nombre" => $this->request->getVar('nombre'),
                "email" => $this->request->getVar('email'),
                "foto" => $nuevoNombre,
                "funcion" => $this->request->getVar('funcion'),
                "telefono" => $this->request->getVar('telefono'),

            ];
            $empleados->insert($data);
        } else {
        }

        return $this->response->redirect(base_url("/admin/empleados"));
    }
}
