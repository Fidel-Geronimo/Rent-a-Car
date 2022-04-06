<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudModel extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'idvehiculo',
        'cliente',
        'idcliente',
        'precioVehiculo',
        'modeloVehiculo',
        'marcaVehiculo',
        'fotovehiculo',
        'descripcionvehiculo',
        'telefono',
        'email',
        'fecharecogida',
        'fechadevolucion',
        'horarecogida',
        'horadevolucion',
        'diastotales',
        'fecha'
    ];
}
