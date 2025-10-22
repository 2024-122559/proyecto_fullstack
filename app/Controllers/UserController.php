<?php
namespace App\Controllers;

class ReservasController extends BaseController
{
    public function index(){
        $session = session();
        if(!$session->get('logged_in') || $session->get('tipo_usuario') !== 'usuario'){
            $session->set('redirect_after_login','/user');
            return redirect()->to('/login');
        }

        return view('vista_prueba'); 
    }
}