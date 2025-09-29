<?php

namespace App\Models;

use CodeIgniter\Model;

class EstadoModel extends Model
{
    protected $table         = 'estado';
    protected $primaryKey = "id_estado";
    protected $allowedFields = [
        'id_estado',
        'nombre',
        'descripcion'
    ];
}

?>