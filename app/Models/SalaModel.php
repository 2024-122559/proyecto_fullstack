<?php

namespace App\Models;

use CodeIgniter\Model;

class SalaModel extends Model
{
    protected $table         = 'salas';
    protected $primaryKey = "sala_id";
    protected $allowedFields = [
        'sala_id',
        'nombre',
        'filas',
        'asientos_por_fila',
        'capacidad',
        'tipo_sala',
        'activa',
        'fecha_creacion'
    ];
}

?>