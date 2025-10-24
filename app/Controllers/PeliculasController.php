<?php
namespace App\Controllers;
use App\Models\PeliculaModel;

class PeliculasController extends BaseController
{
    public function listar()
    {
        $peliculaModel = new PeliculaModel();
        $datos['peliculas'] = $peliculaModel->findAll();
        return view('peliculas/peliculasview', $datos);
    }

    public function crear()
    {
        return view('peliculas/crearpeliculas');
    }

    public function guardar()
    {
        $peliculaModel = new PeliculaModel();
        $titulo = $this->request->getPost('titulo');

        // Check for duplicate movie title
        $existe = $peliculaModel->where('titulo', $titulo)->first();
        if ($existe) {
            log_message('debug', 'Título duplicado detectado: ' . $titulo);
            return redirect()->to(base_url('peliculas/crear'))
                           ->with('error', 'La película "' . $titulo . '" ya existe.')
                           ->withInput();
        }

        $datos = [
            'titulo' => $titulo,
            'id_genero' => $this->request->getPost('id_genero'),
            'duracion_minutos' => $this->request->getPost('duracion_minutos'),
            'sinopsis' => $this->request->getPost('sinopsis'),
            'poster_url' => $this->request->getPost('poster_url'),
            'director' => $this->request->getPost('director'),
            'clasificacion' => $this->request->getPost('clasificacion'),
            'fecha_estreno' => $this->request->getPost('fecha_estreno'),
            'id_estado' => $this->request->getPost('id_estado'),
            'fecha_creacion' => date('Y-m-d H:i:s'),
            'fecha_actualizacion' => date('Y-m-d H:i:s')
        ];

        try {
            log_message('debug', 'Intentando insertar película: ' . json_encode($datos));
            $peliculaModel->insert($datos);
            log_message('debug', 'Película insertada, redirigiendo a peliculas/listar');
            return redirect()->to(base_url('peliculas/listar'))->with('mensaje', 'agregado');
        } catch (\Exception $e) {
            log_message('error', 'Error al insertar película: ' . $e->getMessage());
            return redirect()->to(base_url('peliculas/crear'))
                           ->with('error', 'Error al guardar la película: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function editar($id)
    {
        $peliculaModel = new PeliculaModel();
        $datos['pelicula'] = $peliculaModel->find($id);
        if (!$datos['pelicula']) {
            return redirect()->to(base_url('peliculas/listar'))
                           ->with('error', 'La película no existe.');
        }
        return view('peliculas/modificarpeliculas', $datos);
    }

    public function actualizar($id)
    {
        $peliculaModel = new PeliculaModel();
        $datos = [
            'titulo' => $this->request->getPost('titulo'),
            'id_genero' => $this->request->getPost('id_genero'),
            'duracion_minutos' => $this->request->getPost('duracion_minutos'),
            'sinopsis' => $this->request->getPost('sinopsis'),
            'poster_url' => $this->request->getPost('poster_url'),
            'director' => $this->request->getPost('director'),
            'clasificacion' => $this->request->getPost('clasificacion'),
            'fecha_estreno' => $this->request->getPost('fecha_estreno'),
            'id_estado' => $this->request->getPost('id_estado'),
            'fecha_actualizacion' => date('Y-m-d H:i:s')
        ];

        try {
            $peliculaModel->update($id, $datos);
            return redirect()->to(base_url('peliculas/listar'))->with('mensajes', 'Película actualizada correctamente');
        } catch (\Exception $e) {
            log_message('error', 'Error al actualizar película: ' . $e->getMessage());
            return redirect()->to(base_url('peliculas/editar/' . $id))
                           ->with('error', 'Error al actualizar la película: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function eliminar($id)
    {
        $peliculaModel = new PeliculaModel();
        try {
            $peliculaModel->delete($id);
            return redirect()->to(base_url('peliculas/listar'))->with('mensaje', 'se jue');
        } catch (\Exception $e) {
            log_message('error', 'Error al eliminar película: ' . $e->getMessage());
            return redirect()->to(base_url('peliculas/listar'))
                           ->with('error', 'Error al eliminar la película: ' . $e->getMessage());
        }
    }
}