<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReservaModel;
use App\Models\FuncionModel;
use App\Models\PeliculaModel;
use App\Models\AsientoModel;
use App\Models\ReservaAsientoModel;

class UserController extends Controller
{
    public function index()
    {
        $session = session();

        if (!$session->get('logged_in')) {
            $session->set('redirect_after_login', '/cine');
            return redirect()->to('/login');
        }

        if ($session->get('tipo_usuario') === 'admin') {
            return redirect()->to('/admin');
        }

        $data['nombre'] = $session->get('nombre');

        $peliculaModel = new PeliculaModel();
        $peliculas = $peliculaModel->findAll();
        $data['peliculas'] = $peliculas;

        return view('cine_index', $data);
    }

     public function misReservas()
    {
        $session = session();
        $usuario_id = $session->get('usuario_id');

        if (!$usuario_id) {
            return redirect()->to('/login')->with('error', 'Debes iniciar sesión.');
        }

        $reservaModel = new ReservaModel();
        $funcionModel = new FuncionModel();
        $peliculaModel = new PeliculaModel();
        $asientoModel = new AsientoModel();
        $reservaAsientoModel = new ReservaAsientoModel();

        $reservas = $reservaModel->where('usuario_id', $usuario_id)->findAll();
        $detalles = [];

        foreach ($reservas as $r) {
            $funcion = $funcionModel->find($r['funcion_id']);
            $pelicula = $peliculaModel->find($funcion['pelicula_id']);

            // Obtener asientos de esta reserva
            $asientosReservados = $reservaAsientoModel->where('reserva_id', $r['reserva_id'])->findAll();
            $asientos = [];
            $total_asientos = 0;

            foreach ($asientosReservados as $ar) {
                $asiento = $asientoModel->find($ar['asiento_id']);
                if ($asiento) {
                    $asientos[] = [
                        'nombre' => $asiento['fila'] . $asiento['numero'],
                        'precio' => $ar['precio']
                    ];
                    $total_asientos += $ar['precio'];
                }
            }

            $total_pagar = $funcion['precio_base'] + $total_asientos;

            $detalles[] = [
                'reserva' => $r,
                'funcion' => $funcion,
                'pelicula' => $pelicula,
                'asientos' => $asientos,
                'total_asientos' => $total_asientos,
                'total_pagar' => $total_pagar,
                'codigo_qr' => $r['codigo_qr']
            ];
        }

        return view('mis_reservas', ['detalles' => $detalles]);
    }
}