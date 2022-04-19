<?php

namespace App\Models;

use CodeIgniter\Model;

class Push extends Model
{
    protected $table = 'push';
    protected $allowedFields = [
        'cantidad'
    ];
}
