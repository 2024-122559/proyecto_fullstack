<?php
namespace App\Controllers;
use App\Models\GeneroModel;

class GenerosController extends BaseController
{
    public function listar()
    {
        $generoModel = new GeneroModel();
        $datos['generos'] = $generoModel->findAll(); 
        return view('generos/vista_generos', $datos);
    }

    public function crear()
    {
        return view('generos/crearGeneros');
    }

public function guardar()
    {
        $generoModel = new GeneroModel();
        $nombre = $this->request->getPost('nombre');

        $existe = $generoModel->where('nombre', $nombre)->first();
        if ($existe) {
            log_message('debug', 'Nombre duplicado detectado: ' . $nombre);
            return redirect()->to(base_url('generos/crear'))
                           ->with('error', 'El género "' . $nombre . '" ya existe.')
                           ->withInput();
        }

        $datos = [
            'nombre' => $nombre,
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        try {
            log_message('debug', 'Intentando insertar género: ' . json_encode($datos));
            $generoModel->insert($datos);
            log_message('debug', 'Género insertado, redirigiendo a generos/listar');
            return redirect()->to(base_url('generos/listar'))->with('mensaje', 'agregado');
        } catch (\Exception $e) {
            log_message('error', 'Error al insertar género: ' . $e->getMessage());
            return redirect()->to(base_url('generos/crear'))
                           ->with('error', 'Error al guardar el género: ' . $e->getMessage())
                           ->withInput();
        }
    }

    public function editar($id)
    {
        $generoModel = new GeneroModel();
        $datos['genero'] = $generoModel->find($id); 
        return view('generos/modificarGenero', $datos);
    }

    public function actualizar($id)
    {
        $generoModel = new GeneroModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'), 
        ];
        $generoModel->update($id, $datos);
        return redirect()->to(base_url('generos/listar'))->with('mensajes', 'nueva info agregada');
    }

    public function eliminar($id)
    {
        $generoModel = new GeneroModel();
        $generoModel->delete($id);
        return redirect()->to(base_url('generos/listar'))->with('mensaje', 'se jue');
    }
}