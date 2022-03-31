<?php

namespace App\Models;

use CodeIgniter\Model;

class RentasCompletadasModel extends Model
{
    protected $table = 'rentascompletadas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'idcliente',
        'idvehiculo',
        'gato',
        'luces',
        'goma',
        'kitherramientas',
        'rayaduras',
        'abolladuras',
        'piezasfaltantes',
        'fecha'
    ];
}
