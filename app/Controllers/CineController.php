<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;

class CineController extends Controller
{
    public function index()
    {
        $peliculaModel = new PeliculaModel();
        
        $peliculas = $peliculaModel->findAll();

       
        if (empty($peliculas)) {
            session()->setFlashdata('error', 'si lees esto hay un error jejeje cual es no sé');
        }

      
        return view('cine_index', ['peliculas' => $peliculas]);
    }
}
?>