<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{
    protected $table = 'vehiculos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'foto',
        'precio',
        'descripcion',
        'chasis',
        'motor',
        'placa',
        'tipovehiculo',
        'marca',
        'modelo',
        'tipocombustible',
        'estado',
        'personas',
        'transmision',
        'maletas',
        'fecha'
    ];
}
