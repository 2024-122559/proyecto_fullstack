<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionModel extends Model
{
    protected $table         = 'funciones';
    protected $primaryKey = "funcion_id";
    protected $allowedFields = [
        'funcion_id',
        'pelicula_id',
        'sala_id',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'precio_base',
        'estado',
        'fecha_creacion'
    ];
}

?>