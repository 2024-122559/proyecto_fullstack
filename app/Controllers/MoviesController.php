<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;

class MoviesController extends Controller
{
    public function index()
    {
        $peliculaModel = new PeliculaModel();
        
        $data['peliculas'] = $peliculaModel->findAll();
        
        return view('peliculas', $data);
    }
}
?>