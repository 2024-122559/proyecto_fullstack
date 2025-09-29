<?php

namespace App\Models;

use CodeIgniter\Model;

class PagoModel extends Model
{
    protected $table         = 'pagos';
    protected $primaryKey = "pago_id";
    protected $allowedFields = [
        'pago_id',
        'reserva_id',
        'monto',
        'metodo_pago',
        'referencia_pago',
        'estado_pago',
        'fecha_pago',
        'detalles_transaccion'
    ];
}

?>