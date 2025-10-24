<?php
namespace App\Controllers;

use App\Models\PeliculaModel;

class PeliculasController extends BaseController
{
    // Mostrar todas las películas
    public function vistaPeliculas(): string
    {
        $pelicula = new PeliculaModel();
        $datos['peliculas'] = $pelicula->findAll();
        return view('peliculas/vista_peliculas', $datos);
    }

    // Agregar nueva película
    public function agregarPelicula()
    {
        $pelicula = new PeliculaModel();
        $datos = [
            'titulo'             => $this->request->getPost('txt_titulo'),
            'id_genero'          => $this->request->getPost('txt_genero'),
            'duracion_minutos'   => $this->request->getPost('txt_duracion'),
            'sinopsis'           => $this->request->getPost('txt_sinopsis'),
            'poster_url'         => $this->request->getPost('txt_poster_url'),
            'director'           => $this->request->getPost('txt_director'),
            'clasificacion'      => $this->request->getPost('txt_clasificacion'),
            'fecha_estreno'      => $this->request->getPost('txt_fecha_estreno'),
            'id_estado'          => $this->request->getPost('txt_estado') ?? 1,
            'fecha_creacion'     => date('Y-m-d H:i:s'),
            'fecha_actualizacion'=> date('Y-m-d H:i:s')
        ];

        $pelicula->insert($datos);
        return redirect()->to(base_url('peliculas'));
    }

    // Eliminar película
    public function eliminarPelicula($id)
    {
        $pelicula = new PeliculaModel();
        $pelicula->delete($id);
        return redirect()->to(base_url('peliculas'));
    }

    // Buscar película para editar
    public function buscarPelicula($id)
    {
        $pelicula = new PeliculaModel();
        $pelicula = $pelicula->find($id);
        $datos['pelicula'] = $pelicula;
        return view('peliculas/editar_peliculas', $datos);
    }

    // Actualizar película
    public function actualizarPelicula($id)
    {
        $pelicula = new PeliculaModel();
        $datos = [
            'titulo'             => $this->request->getPost('txt_titulo'),
            'id_genero'          => $this->request->getPost('txt_genero'),
            'duracion_minutos'   => $this->request->getPost('txt_duracion'),
            'sinopsis'           => $this->request->getPost('txt_sinopsis'),
            'poster_url'         => $this->request->getPost('txt_poster_url'),
            'director'           => $this->request->getPost('txt_director'),
            'clasificacion'      => $this->request->getPost('txt_clasificacion'),
            'fecha_estreno'      => $this->request->getPost('txt_fecha_estreno'),
            'id_estado'          => $this->request->getPost('txt_estado') ?? 1,
            'fecha_actualizacion'=> date('Y-m-d H:i:s')
        ];

        $pelicula->update($id, $datos);
        return redirect()->to(base_url('peliculas'));
    }
}
?>
