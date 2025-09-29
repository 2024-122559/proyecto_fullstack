<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table         = 'peliculas';
    protected $primaryKey = "id";
    protected $allowedFields = [
        'id',
        'titulo',
        'id_genero',
        'duracion_minutos',
        'sinopsis',
        'poster_url',
        'director',
        'clasificacion',
        'fecha_estreno',
        'id_estado',
        'fecha_creacion',
        'fecha_actualizacion'
    ];
}

?>