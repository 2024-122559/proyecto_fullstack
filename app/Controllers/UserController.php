<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;

class UserController extends Controller
{
    public function index()
    {
        $session = session();

        // Verificar si el usuario está logueado
        if (!$session->get('logged_in')) {
            $session->set('redirect_after_login', '/cine');
            return redirect()->to('/login');
        }

        // Redirigir si es admin
        if ($session->get('tipo_usuario') === 'admin') {
            return redirect()->to('/admin');
        }

        // Obtener nombre de usuario
        $data['nombre'] = $session->get('nombre');

        // Obtener películas
        $peliculaModel = new PeliculaModel();
        $peliculas = $peliculaModel->findAll();
        
        if (empty($peliculas)) {
            $session->setFlashdata('error', 'Si lees esto hay un error jejeje cual es no sé');
        }

        // Pasar datos a la vista
        $data['peliculas'] = $peliculas;

        return view('cine_index', $data);
    }
}
