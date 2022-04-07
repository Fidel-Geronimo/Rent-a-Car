<?php

namespace App\Controllers;

session_start();

use App\Models\VehiculoModel;
use App\Models\LoginModel;

class Home extends BaseController
{
    public function index()
    {
        return view('vehiculos/index');
    }
    public function login()
    {
        return view('admin/login');
    }
    public function loginEntrar()
    {
        $usuario = $this->request->getPost("usuario");
        $pass = $this->request->getPost("pass");
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT * FROM usuarios where (nombre = '$usuario') AND (pass = '$pass')");
        if ($query->getNumRows() == 1) {
            $_SESSION["login"] = 1;
            $respuesta['notificaion'] = 1;
        } else {
            $respuesta['notificaion'] = 0;
        }

        return $this->response->setJSON($respuesta);
    }
    public function loginCerrar()
    {
        unset($_SESSION['login']);
        return $this->response->redirect(base_url("/login"));
    }
}
