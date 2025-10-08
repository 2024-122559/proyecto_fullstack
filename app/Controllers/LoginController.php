<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('iniciar_sesion');
    }

    public function login()
    {
        $session = session();
        $usuarioModel = new UsuarioModel();

        $email = trim($this->request->getPost('txt_email')); 
        $password = $this->request->getPost('txt_password');

        $usuario = $usuarioModel->where('email', $email)->first();

        if ($usuario && $password === $usuario['password']) {
            $session->set([
                'usuario_id' => $usuario['usuario_id'],
                'nombre' => $usuario['nombre'],
                'email' => $usuario['email'],
                'tipo_usuario' => $usuario['tipo_usuario'],
                'logged_in' => true
            ]);

            $session->setFlashdata('success', '¡Inicio de sesión exitoso! Bienvenido, ' . $usuario['nombre']);
            return redirect()->to(base_url('movies'))->with('usuario_id', $usuario['usuario_id']);
        }else {
            $session->setFlashdata('error', 'Email o contraseña incorrectos');
            return redirect()->back();
        }
    }
}