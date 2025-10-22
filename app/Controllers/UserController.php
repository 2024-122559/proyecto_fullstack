<?php
namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $session = session();


        if (!$session->get('logged_in')) {
            $session->set('redirect_after_login', '/user');
            return redirect()->to('/login');
        }
        if ($session->get('tipo_usuario') === 'admin') {
            return redirect()->to('/admin');
        }

        $data['nombre'] = $session->get('nombre');
        return view('cine_index', $data);
    }
}
