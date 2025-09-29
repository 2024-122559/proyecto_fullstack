<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table         = 'reservas';
    protected $primaryKey = "reserva_id";
    protected $allowedFields = [
        'reserva_id',
        'usuario_id',
        'funcion_id',
        'total',
        'fecha_reserva',
        'codigo_qr'
    ];
}

?>