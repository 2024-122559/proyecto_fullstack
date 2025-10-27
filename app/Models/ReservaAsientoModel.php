<?php
namespace App\Models;

use CodeIgniter\Model;

class ReservaAsientoModel extends Model
{
    protected $table      = 'reserva_asiento';
    protected $primaryKey = 'id';
    protected $allowedFields = ['reserva_id', 'asiento_id', 'precio', 'fecha_creacion'];
    protected $useTimestamps = true;
    protected $createdField  = 'fecha_creacion';
    protected $updatedField  = '';
}