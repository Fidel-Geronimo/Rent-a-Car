<?php

namespace App\Controllers;

session_start();

use CodeIgniter\Controller;
use App\Models\EmpleadosModel;

class EmpleadosController extends Controller
{

    public function index()
    {
        $empleados = new EmpleadosModel;
        $datos = [
            "dashboard" => "",
            "clientes" => "",
            "vehiculos" => "",
            "empleados" => "active bg-gradient-primary",
            "reportes" => "",
            "perfil" => "",
            "data" => $empleados->orderBy('fecha', 'DESC')->findAll()
        ];
        return view('admin/empleados', $datos);
    }
    public function ListarEmpleados()
    {
        $empleados = new EmpleadosModel();
        $data['empleado'] = $empleados->orderBy('fecha', 'DESC')->findAll();
        return $this->response->setJSON($data);
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
            $_SESSION["notificacion"] = "Empleado Registrado!";
        }
        return $this->response->redirect(base_url("/admin/empleados"));
    }

    public function borrar()
    {
        $empleados = new EmpleadosModel();
        $idEmpleado = $this->request->getPost('idEmpleado');
        $empleados->where('id', $idEmpleado)->delete();
        $data['notification'] = "Empleado Eliminado!";
        return $this->response->setJSON($data);
    }

    public function verData()
    {
        $empleados = new EmpleadosModel();
        $idEmpleado = $this->request->getPost('idEmpleado');
        $data['empleado'] = $empleados->find($idEmpleado);

        return $this->response->setJSON($data);
    }
    public function editar()
    {
        $empleados = new EmpleadosModel();
        $data = [
            "nombre" => $this->request->getVar('nombre'),
            "email" => $this->request->getVar('email'),
            "funcion" => $this->request->getVar('funcion'),
            "telefono" => $this->request->getVar('telefono'),

        ];
        $id = $this->request->getvar('idEmpleado');
        $empleados->update($id, $data);
        $_SESSION["notificacion"] = "Empleado Editado!";

        $validacion = $this->validate([
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg,image/png]',
                'max_size[foto,1024]',
            ]
        ]);
        if ($validacion) {
            if ($foto = $this->request->getFile('foto')) {

                $datosEmpleado = $empleados->where('id', $id)->first();
                $ruta = ("./public/uploads/" . $datosEmpleado['foto']);
                unlink($ruta);

                $nuevoNombre = $foto->getRandomName();
                $foto->move('./public/uploads', $nuevoNombre);

                $data = ["foto" => $nuevoNombre];
                $empleados->update($id, $data);
            }
        }

        return $this->response->redirect(base_url("/admin/empleados"));
    }
}
