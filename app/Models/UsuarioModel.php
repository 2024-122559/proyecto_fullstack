<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey = "usuario_id";
    protected $allowedFields = [
        'usuario_id',
        'nombre',
        'apellido',
        'email',
        'password',
        'telefono',
        'tipo_usuario',
        'fecha_registro',
        'ultimo_acceso',
        'activo'
    ];
}

?>