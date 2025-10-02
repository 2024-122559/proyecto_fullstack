<?php

namespace App\Controllers;

use App\Models\SalaModel;

class SalasController extends BaseController
{
    public function listar()
    {
        $salaModel = new SalaModel();
        $datos['salas'] = $salaModel->findAll();
        return view('salas/vista_salas', $datos);
    }

    public function crear()
    {
        return view('salas/crearSalas');
    }

    public function guardar()
    {
        $salaModel = new SalaModel();

        $datos = [
            'nombre'            => $this->request->getPost('nombre'),
            'filas'             => $this->request->getPost('filas'),
            'asientos_por_fila' => $this->request->getPost('asientos'),
            'capacidad'         => $this->request->getPost('capacidad'),
            'tipo_sala'         => $this->request->getPost('tipo_sala'),
            'activa'            => $this->request->getPost('activa'),
            'fecha_creacion'    => $this->request->getPost('fecha_creacion'),
        ];

        try {
            $salaModel->insert($datos);
            return redirect()->to(base_url('salas/listar'))->with('mensajin', 'agregado');
        } catch (\Exception $e) {
            log_message('error', 'Error al guardar sala: ' . $e->getMessage());
            return redirect()->to(base_url('salas/crear'))
                             ->with('error', 'No se pudo guardar la sala: ' . $e->getMessage())
                             ->withInput();
        }
    }

    public function editar($id)
    {
        $salaModel = new SalaModel();
        $datos['salas'] = [$salaModel->find($id)]; 
        return view('salas/modificarSalas', $datos);
    }

    public function actualizar($id)
    {
        $salaModel = new SalaModel();

        $datos = [
            'nombre'            => $this->request->getPost('nombre'),
            'filas'             => $this->request->getPost('filas'),
            'asientos_por_fila' => $this->request->getPost('asientos'),
            'capacidad'         => $this->request->getPost('capacidad'),
            'tipo_sala'         => $this->request->getPost('tipo_sala'),
            'activa'            => $this->request->getPost('activa'),
            'fecha_creacion'    => $this->request->getPost('date'),
        ];

        try {
            $salaModel->update($id, $datos);
            return redirect()->to(base_url('salas/listar'))->with('mensajin', 'actualizado');
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar sala: ' . $e->getMessage());
            return redirect()->to(base_url('salas/editar/' . $id))
                             ->with('error', 'No se pudo actualizar la sala: ' . $e->getMessage())
                             ->withInput();
        }
    }

    public function eliminar($id)
    {
        $salaModel = new SalaModel();
        try {
            $salaModel->delete($id);
            return redirect()->to(base_url('salas/listar'))->with('mensajin', 'eliminado');
        } catch (\Exception $e) {
            log_message('error', 'Error al eliminar sala: ' . $e->getMessage());
            return redirect()->to(base_url('salas/listar'))
                             ->with('error', 'No se pudo eliminar la sala: ' . $e->getMessage());
        }
    }
}
