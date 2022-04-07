<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VehiculoModel;


class vehiculosController extends Controller
{
    public function index()
    {
        $vehiculo = new VehiculoModel();
        $colorBotonesPanel = [
            "dashboard" => "",
            "vehiculos" => "active bg-gradient-primary",
            "clientes" => "",
            "empleados" => "",
            "reportes" => "",
            "perfil" => "",
            "data" => $vehiculo->orderBy('fecha', 'DESC')->findAll()
        ];

        return view("admin/vehiculos", $colorBotonesPanel);
    }
    public function nuevo()
    {
        $vehiculo = new VehiculoModel;
        if ($foto = $this->request->getFile('foto')) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move('./public/uploads', $nuevoNombre);
            $data = [
                'foto' => $nuevoNombre,
                'descripcion' => $this->request->getVar('descripcion'),
                'precio' => $this->request->getVar('precio'),
                'chasis' => $this->request->getVar('chasis'),
                'motor' => $this->request->getVar('motor'),
                'placa' => $this->request->getVar('placa'),
                'tipovehiculo' =>  $this->request->getVar('tipoVehiculo'),
                'marca' => $this->request->getVar('marca'),
                'modelo' => $this->request->getVar('modelo'),
                'tipocombustible' => $this->request->getVar('combustibleVehiculo'),
                'estado' => $this->request->getVar('estadoVehiculo'),
                'personas' => $this->request->getVar('personasVehiculo'),
                'transmision' => $this->request->getVar('transmisionVehiculo'),
                'maletas' => $this->request->getVar('maletasVehiculo')
            ];
            print_r($data);
            $vehiculo->insert($data);
            // $_SESSION["notificacion"] = "Empleado Registrado!";
        }

        return $this->response->redirect(base_url("/admin/vehiculos"));
    }
    public function borrar($id)
    {
        $vehiculo = new VehiculoModel;
        $datos = $vehiculo->where('id', $id)->first();
        $ruta = ("./public/uploads/" . $datos['foto']);
        unlink($ruta);

        $vehiculo->where('id', $id)->delete($id);
        // $_SESSION["notificacion"] = "Empleado Eliminado!";

        return $this->response->redirect(base_url("/admin/vehiculos"));
    }
    public function verData()
    {
        $vehiculo = new VehiculoModel;
        $idVehiculo = $this->request->getPost('idVehiculo');
        $data['vehiculo'] = $vehiculo->find($idVehiculo);
        return $this->response->setJSON($data);
    }
    public function RellenarSelectReporte()
    {
        $vehiculo = new VehiculoModel;
        $data = $vehiculo->findAll();
        return $this->response->setJSON($data);
    }
    public function editar()
    {
        $vehiculo = new VehiculoModel;
        $data = [
            'descripcion' => $this->request->getVar('descripcionEdit'),
            'precio' => $this->request->getVar('precioEdit'),
            'chasis' => $this->request->getVar('chasisEdit'),
            'motor' => $this->request->getVar('motorEdit'),
            'placa' => $this->request->getVar('placaEdit'),
            'tipovehiculo' =>  $this->request->getVar('tipoVehiculoEdit'),
            'marca' => $this->request->getVar('marcaEdit'),
            'modelo' => $this->request->getVar('modeloEdit'),
            'tipocombustible' => $this->request->getVar('combustibleVehiculoEdit'),
            'estado' => $this->request->getVar('estadoVehiculoEdit'),
            'personas' => $this->request->getVar('personasVehiculoEdit'),
            'transmision' => $this->request->getVar('transmisionVehiculoEdit'),
            'maletas' => $this->request->getVar('maletasVehiculoEdit')
        ];
        $id = $this->request->getvar('idVehiculo');
        $vehiculo->update($id, $data);
        // $_SESSION["notificacion"] = "Empleado Editado!";

        $validacion = $this->validate([
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg,image/png]',
                'max_size[foto,1024]',
            ]
        ]);
        if ($validacion) {
            if ($foto = $this->request->getFile('foto')) {

                $datosVehiculo = $vehiculo->where('id', $id)->first();
                $ruta = ("./public/uploads/" . $datosVehiculo['foto']);
                unlink($ruta);

                $nuevoNombre = $foto->getRandomName();
                $foto->move('./public/uploads', $nuevoNombre);

                $data = ["foto" => $nuevoNombre];
                $vehiculo->update($id, $data);
            }
        }

        return $this->response->redirect(base_url("/admin/vehiculos"));
    }
}
