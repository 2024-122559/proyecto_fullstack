<?php

namespace App\Models;

use CodeIgniter\Model;

class AsientoModel extends Model
{
    protected $table         = 'asientos';
    protected $primaryKey = "asiento_id";
    protected $allowedFields = [
        'asiento_id',
        'sala_id',
        'fila',
        'numero',
        'tipo',
        'activo'
    ];
}

?>