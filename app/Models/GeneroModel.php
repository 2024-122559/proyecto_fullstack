<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneroModel extends Model
{
    protected $table         = 'genero';
    protected $primaryKey = "id_genero";
    protected $allowedFields = [
        'id_genero',
        'nombre',
        'descripcion'
    ];
}

?>