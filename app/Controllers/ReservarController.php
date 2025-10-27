<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;
use App\Models\FuncionModel;
use App\Models\ReservaModel;
use App\Models\AsientoModel;


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
    $session = session();
    $usuario_id = $session->get('usuario_id');

    if (!$usuario_id) {
        return redirect()->to('/login')->with('error', 'Debes iniciar sesión para reservar.');
    }

    $asientosSeleccionados = $this->request->getPost('asiento_seleccionado');
    $funcion_id = $this->request->getPost('funcion_id');
    $fecha_reserva = date('Y-m-d H:i:s');

    if (empty($asientosSeleccionados)) {
        return redirect()->back()->with('error', 'Debes seleccionar al menos un asiento.');
    }

    $reservaModel = new \App\Models\ReservaModel();
    $funcionModel = new \App\Models\FuncionModel();
    $peliculaModel = new \App\Models\PeliculaModel();
    $asientoModel = new \App\Models\AsientoModel();
    $reservaAsientoModel = new \App\Models\ReservaAsientoModel();

    // 1️⃣ Obtener datos de la función y película
    $funcion = $funcionModel->find($funcion_id);
    $pelicula = $peliculaModel->find($funcion['pelicula_id']);
    $precio_funcion = $funcion['precio_base']; // precio de la función

    // 2️⃣ Calcular total de los asientos y obtener detalles
    $total_asientos = 0;
    $asientos = [];
    foreach ($asientosSeleccionados as $asiento_id) {
        $asiento = $asientoModel->find($asiento_id);
        if ($asiento) {
            $asientos[] = $asiento;
            $total_asientos += $asiento['precio']; // <-- tu tabla asientos debe tener este campo
        }
    }

    // 3️⃣ Total a pagar = función + asientos
    $total_pagar = $precio_funcion + $total_asientos;

    // 4️⃣ Guardar la reserva
    $reservaModel->insert([
        'usuario_id' => $usuario_id,
        'funcion_id' => $funcion_id,
        'total' => $total_pagar,
        'fecha_reserva' => $fecha_reserva,
        'codigo_qr' => null
    ]);
    $reserva_id = $reservaModel->insertID();

    // 5️⃣ Guardar los asientos en la tabla reserva_asiento
    foreach ($asientos as $a) {
        $reservaAsientoModel->insert([
            'reserva_id' => $reserva_id,
            'asiento_id' => $a['asiento_id'],
            'precio' => $a['precio'] // precio del asiento
        ]);
    }

    // 6️⃣ Generar QR con API externa
    $qrContent = "Reserva: " . implode(',', array_map(fn($a) => $a['fila'].$a['numero'], $asientos)) .
                 "\nPelícula: {$pelicula['titulo']}" .
                 "\nFunción: {$funcion['fecha']} {$funcion['hora_inicio']}" .
                 "\nTotal a pagar: Q" . number_format($total_pagar, 2);
    $codigo_qr = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($qrContent);

    // 7️⃣ Actualizar la reserva con QR
    $reservaModel->update($reserva_id, ['codigo_qr' => $codigo_qr]);

    // 8️⃣ Pasar datos a la vista
    session()->setFlashdata('reserva_exitosa', '¡Tu reserva se ha realizado con éxito!');
    return view('detalle', [
        'pelicula' => $pelicula,
        'funcion' => $funcion,
        'asientos' => $asientos,
        'fecha_reserva' => $fecha_reserva,
        'precio_funcion' => $precio_funcion,
        'total_asientos' => $total_asientos,
        'total_pagar' => $total_pagar,
        'codigo_qr' => $codigo_qr
    ]);
}

}