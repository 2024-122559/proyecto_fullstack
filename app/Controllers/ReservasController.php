<?php
namespace App\Controllers;
use App\Models\ReservaModel;

class ReservasController extends BaseController
{
    public function listar()
    {
        $reservaModel = new ReservaModel();
        $datos['reservas'] = $reservaModel->findAll();
        return view('reservas/vista_reservas', $datos);
    }

    public function crear()
    {
        return view('reservas/crearReservas');
    }

   public function guardar()
{
    $reservaModel = new ReservaModel();
    $codigo_qr = $this->request->getPost('codigo_qr');

    $existe = $reservaModel->where('codigo_qr', $codigo_qr)->first();
    if ($existe) {
        log_message('debug', 'Código QR duplicado detectado: ' . $codigo_qr);
        return redirect()->to(base_url('reservas/crear'))
                       ->with('error', 'El código QR "' . $codigo_qr . '" ya existe.')
                       ->withInput();
    }

    $datos = [
        'usuario_id' => $this->request->getPost('usuario_id'),
        'funcion_id' => $this->request->getPost('funcion_id'),
        'total' => $this->request->getPost('total'),
        'fecha_reserva' => $this->request->getPost('fecha_reserva'),
        'codigo_qr' => $codigo_qr,
    ];

    try {
        $reservaModel->insert($datos);
        $reserva_id = $reservaModel->getInsertID(); // Obtener el ID insertado
        log_message('debug', 'Reserva insertada con ID: ' . $reserva_id);
        // Redirigir al detalle de la reserva
        return redirect()->to(base_url('reservas/detalle/' . $reserva_id));
    } catch (\Exception $e) {
        log_message('error', 'Error al insertar reserva: ' . $e->getMessage());
        return redirect()->to(base_url('reservas/crear'))
                       ->with('error', 'Error al guardar la reserva: ' . $e->getMessage())
                       ->withInput();
    }
}

// Nuevo método para detalle
public function detalle($id)
{
    $reservaModel = new ReservaModel();
    $reserva = $reservaModel->find($id);

    if (!$reserva) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Reserva no encontrada');
    }

    $data['reserva'] = $reserva;
    return view('reservas/detalle', $data);
}


    public function editar($id)
    {
        $reservaModel = new ReservaModel();
        $datos['reserva'] = $reservaModel->find($id);
        return view('reservas/modificarReservas', $datos);
    }

    public function actualizar($id)
    {
        $reservaModel = new ReservaModel();
        $codigo_qr = $this->request->getPost('codigo_qr');

        $existe = $reservaModel->where('codigo_qr', $codigo_qr)->where('reserva_id !=', $id)->first();
        if ($existe) {
            log_message('debug', 'Código QR duplicado detectado: ' . $codigo_qr);
            return redirect()->to(base_url('reservas/editar/' . $id))
                           ->with('error', 'El código QR "' . $codigo_qr . '" ya existe.')
                           ->withInput();
        }

        $datos = [
            'usuario_id' => $this->request->getPost('usuario_id'),
            'funcion_id' => $this->request->getPost('funcion_id'),
            'total' => $this->request->getPost('total'),
            'fecha_reserva' => $this->request->getPost('fecha_reserva'),
            'codigo_qr' => $codigo_qr,
        ];

        try {
            $reservaModel->update($id, $datos);
            return redirect()->to(base_url('reservas/listar'))->with('mensajes', 'Reserva actualizada correctamente');
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar reserva: ' . $e->getMessage());
            return redirect()->to(base_url('reservas/editar/' . $id))
                           ->with('error', 'Error al actualizar la reserva: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function eliminar($id)
    {
        $reservaModel = new ReservaModel();
        try {
            $reservaModel->delete($id);
            return redirect()->to(base_url('reservas/listar'))->with('mensaje', 'eliminado');
        } catch (\Exception $e) {
            log_message('error', 'Error al eliminar reserva: ' . $e->getMessage());
            return redirect()->to(base_url('reservas/listar'))
                           ->with('error', 'Error al eliminar la reserva: ' . $e->getMessage());
        }
    }
    
    
}