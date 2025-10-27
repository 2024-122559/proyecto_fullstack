<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table         = 'reservas';
    protected $primaryKey    = 'reserva_id';
    protected $allowedFields = [
        'usuario_id',
        'funcion_id',
        'total',
        'fecha_reserva',
        'codigo_qr'
    ];

    // Método para insertar la relación reserva-asiento
    public function insertAsiento($reserva_id, $asiento_id){
        return $this->db->table('reserva_asiento')->insert([
            'reserva_id' => $reserva_id,
            'asiento_id' => $asiento_id
        ]);
    }

    // Método para obtener detalles completos de la reserva
    public function getReservaDetalle($reserva_id){
        $builder = $this->db->table('reservas r');
        $builder->select('r.*, u.nombre as usuario, f.fecha as fecha_funcion, f.hora as hora_funcion, p.titulo as pelicula');
        $builder->join('usuarios u','u.usuario_id=r.usuario_id');
        $builder->join('funciones f','f.funcion_id=r.funcion_id');
        $builder->join('peliculas p','p.pelicula_id=f.pelicula_id');

        $reserva = $builder->where('r.reserva_id',$reserva_id)->get()->getRowArray();

        // Obtener los asientos
        $asientos = $this->db->table('reserva_asiento ra')
            ->select('a.fila, a.numero')
            ->join('asientos a','a.asiento_id=ra.asiento_id')
            ->where('ra.reserva_id',$reserva_id)
            ->get()->getResultArray();

        $reserva['asientos'] = $asientos;
        return $reserva;
    }
}
?>