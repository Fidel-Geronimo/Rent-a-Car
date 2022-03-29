<?php

namespace App\Models;

use CodeIgniter\Model;

class RentaModel extends Model
{
    protected $table = 'renta';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'cliente',
        'foto',
        'telefono',
        'email',
        'fecharecogida',
        'fechadevolucion',
        'horarecogida',
        'horadevolucion',
        'fecha',
        'idvehiculo',
        'gato',
        'luces',
        'goma',
        'kitherramientas',
        'combustible',
        'descripcionvehiculo',
        'marcavehiculo',
        'modelovehiculo',
        'preciorenta',
    ];
}
