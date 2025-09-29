<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleReservaModel extends Model
{
    protected $table         = 'detalle_reserva';
    protected $primaryKey = "detalle_id";
    protected $allowedFields = [
        'detalle_id',
        'asiento_id',
        'reserva_id',
        'precio_unitario',
        'numero_ticket'
    ];
}

?>