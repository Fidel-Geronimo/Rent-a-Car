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
            "vehiculos" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
            "data" => $clientes->orderBy('fecha', 'DESC')->findAll()
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

    public function borrar($id = null)
    {
        $clientes = new ClientesModel;
        $datos = $clientes->where('id', $id)->first();
        if ($datos) {
            $clientes->where('id', $id)->delete();
            $_SESSION["notificacion"] = "Cliente Eliminado!";
        } else {
            $_SESSION["notificacion"] = "Algo Salio Mal!";
        }

        return $this->response->redirect(base_url("admin/clientes"));
    }

    public function verData()
    {
        $clientes = new ClientesModel;
        $idCliente = $this->request->getPost('idCliente');
        $data['cliente'] = $clientes->find($idCliente);

        return $this->response->setJSON($data);
    }
    public function verDataRenta()
    {
        $clientes = new ClientesModel;
        $data = $clientes->findAll();
        return $this->response->setJSON($data);
    }
    public function rellenarInputs()
    {
        $clientes = new ClientesModel;
        $idCliente = $this->request->getPost('idCliente');
        $data['cliente']  = $clientes->find($idCliente);
        return $this->response->setJSON($data);
    }
    public function editar()
    {
        $clientes = new ClientesModel;
        $data = [
            "nombre" => $this->request->getVar('nombre'),
            "email" => $this->request->getVar('email'),
            "telefono" => $this->request->getVar('telefono')
        ];
        $id = $this->request->getvar('idCliente');
        if ($id) {
            $clientes->update($id, $data);
            $_SESSION["notificacion"] = "Cliente Editado!";
        }

        return $this->response->redirect(base_url("/admin/clientes"));
    }
}
