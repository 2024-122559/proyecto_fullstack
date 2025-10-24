<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;
use App\Models\FuncionModel;
use App\Models\ReservaModel;


class ReservarController extends Controller
{
    public function index($id)
    {
        $peliculaModel = new PeliculaModel();
        $funcionModel  = new FuncionModel();

        $pelicula = $peliculaModel->find($id);

        if (!$pelicula) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Película no encontrada');
        }

        $funciones = $funcionModel->where('pelicula_id', $id)->findAll();

        return view('reservar', [
            'pelicula'  => $pelicula,
            'funciones' => $funciones,
        ]);
    }

   public function asientos()
{
    $funcion_id = $this->request->getGet('funcion_id');
    
    $funcionModel  = new FuncionModel();
    $peliculaModel = new PeliculaModel();
    $asientoModel  = new \App\Models\AsientoModel();

    $funcion = $funcionModel->find($funcion_id);
    if (!$funcion) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Función no encontrada');
    }

    $pelicula = $peliculaModel->find($funcion['pelicula_id']);
    
    // Obtener todos los asientos de la sala
    $asientos = $asientoModel->where('sala_id', $funcion['sala_id'])->findAll();

    return view('asientos', [
        'pelicula'    => $pelicula,
        'funcion_id'  => $funcion_id,
        'asientos'    => $asientos,
        'usuario_id'  => session()->get('usuario_id'),
        'fecha_reserva' => date('Y-m-d'),
        'codigo_qr'   => uniqid('QR_')
    ]);
}


   public function detalle()
{
    $reservaModel = new ReservaModel();

    $data = [
        'usuario_id'        => $this->request->getPost('usuario_id'),
        'funcion_id'        => $this->request->getPost('funcion_id'),
        'asiento_seleccionado' => $this->request->getPost('asiento_seleccionado'),
        'total'             => $this->request->getPost('total'),
        'fecha_reserva'     => $this->request->getPost('fecha_reserva'),
        'codigo_qr'         => $this->request->getPost('codigo_qr'),
    ];

    $reservaModel->insert($data);

    return redirect()->to(base_url('reservas/listar'))->with('mensaje', 'Reserva realizada con éxito');
}

}
