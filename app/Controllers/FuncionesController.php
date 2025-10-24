<?php
namespace App\Controllers;
use App\Models\FuncionModel;

class FuncionesController extends BaseController
{
    public function listar()
    {
        $funcionModel = new FuncionModel();
        $datos['funciones'] = $funcionModel->findAll();
        return view('funciones/funcionesview', $datos);
    }

    public function crear()
    {
        return view('funciones/crearfunciones');
    }

    public function guardar()
    {
        $funcionModel = new FuncionModel();
        $pelicula_id = $this->request->getPost('pelicula_id');
        $sala_id = $this->request->getPost('sala_id');
        $fecha = $this->request->getPost('fecha');
        $hora_inicio = $this->request->getPost('hora_inicio');

        // Check for duplicate showtime (same movie, room, date, and start time)
        $existe = $funcionModel->where([
            'pelicula_id' => $pelicula_id,
            'sala_id' => $sala_id,
            'fecha' => $fecha,
            'hora_inicio' => $hora_inicio
        ])->first();

        if ($existe) {
            log_message('debug', 'Showtime duplicado detectado: ' . json_encode([
                'pelicula_id' => $pelicula_id,
                'sala_id' => $sala_id,
                'fecha' => $fecha,
                'hora_inicio' => $hora_inicio
            ]));
            return redirect()->to(base_url('funciones/crear'))
                           ->with('error', 'Ya existe una función con los mismos datos.')
                           ->withInput();
        }

        $datos = [
            'pelicula_id' => $pelicula_id,
            'sala_id' => $sala_id,
            'fecha' => $fecha,
            'hora_inicio' => $hora_inicio,
            'hora_fin' => $this->request->getPost('hora_fin'),
            'precio_base' => $this->request->getPost('precio_base'),
            'estado' => $this->request->getPost('estado'),
            'fecha_creacion' => date('Y-m-d H:i:s')
        ];

        try {
            log_message('debug', 'Intentando insertar función: ' . json_encode($datos));
            $funcionModel->insert($datos);
            log_message('debug', 'Función insertada, redirigiendo a funciones/listar');
            return redirect()->to(base_url('funciones/listar'))->with('mensaje', 'agregado');
        } catch (\Exception $e) {
            log_message('error', 'Error al insertar función: ' . $e->getMessage());
            return redirect()->to(base_url('funciones/crear'))
                           ->with('error', 'Error al guardar la función: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function editar($id)
    {
        $funcionModel = new FuncionModel();
        $datos['funcion'] = $funcionModel->find($id);
        if (!$datos['funcion']) {
            return redirect()->to(base_url('funciones/listar'))
                           ->with('error', 'La función no existe.');
        }
        return view('funciones/modificarfunciones', $datos);
    }

    public function actualizar($id)
    {
        $funcionModel = new FuncionModel();
        $datos = [
            'pelicula_id' => $this->request->getPost('pelicula_id'),
            'sala_id' => $this->request->getPost('sala_id'),
            'fecha' => $this->request->getPost('fecha'),
            'hora_inicio' => $this->request->getPost('hora_inicio'),
            'hora_fin' => $this->request->getPost('hora_fin'),
            'precio_base' => $this->request->getPost('precio_base'),
            'estado' => $this->request->getPost('estado')
        ];

        try {
            $funcionModel->update($id, $datos);
            return redirect()->to(base_url('funciones/listar'))->with('mensajes', 'Función actualizada correctamente');
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar función: ' . $e->getMessage());
            return redirect()->to(base_url('funciones/editar/' . $id))
                           ->with('error', 'Error al actualizar la función: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function eliminar($id)
    {
        $funcionModel = new FuncionModel();
        try {
            $funcionModel->delete($id);
            return redirect()->to(base_url('funciones/listar'))->with('mensaje', 'se jue');
        } catch (\Exception $e) {
            log_message('error', 'Error al eliminar función: ' . $e->getMessage());
            return redirect()->to(base_url('funciones/listar'))
                           ->with('error', 'Error al eliminar la función: ' . $e->getMessage());
        }
    }
}