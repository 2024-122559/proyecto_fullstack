<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PeliculaModel;

class ReservarController extends Controller
{
    public function index($id)
    {
        $peliculaModel = new PeliculaModel();
        
       
        $pelicula = $peliculaModel->where('id', $id)->first();

        return view('reservar', [
            'pelicula' => $pelicula,
           
        ]);
    }
}
?>