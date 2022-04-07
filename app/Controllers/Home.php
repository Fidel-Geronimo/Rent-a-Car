<?php

namespace App\Controllers;

session_start();

use App\Models\VehiculoModel;

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
        $_SESSION["login"] = 1;

        return $this->response->redirect(base_url("/admin"));
    }
    public function loginCerrar()
    {
        unset($_SESSION['login']);
        return $this->response->redirect(base_url("/login"));
    }
}
