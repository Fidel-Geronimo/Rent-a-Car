<?php

namespace App\Models;

use CodeIgniter\Model;

class RentaModel extends Model
{
    protected $table = 'renta';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'cliente',
        'telefono',
        'email',
        'fecharecogida',
        'fechadevolucion',
        'horarecogida',
        'horadevolucion',
        'fecha',
        'idvehiculo'
    ];
}
