<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table      = 'empleados';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre',
        'email',
        'foto',
        'funcion',
        'telefono',
        'fecha'

    ];
}
