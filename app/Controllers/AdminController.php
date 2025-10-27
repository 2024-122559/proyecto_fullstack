<?php
namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(){
        $session = session();
        if(!$session->get('logged_in') || $session->get('tipo_usuario') !== 'admin'){
            return redirect()->to('/login');
        }

        return view('panel');
    }
}