<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class RegisterController extends Controller
{
    public function index()
    {
        helper('form');
        return view('registrarse');
    }

    public function store()
    {
        $session = session();
        $userModel = new UserModel();

        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password_confirm = $this->request->getPost('password_confirm');

        // Validar que las contraseñas coincidan
        if ($password !== $password_confirm) {
            $session->setFlashdata('error', 'Las contraseñas no coinciden.');
            return redirect()->back()->withInput();
        }

        // Validar que el email no exista
        $existingUser = $userModel->where('email', $email)->first();
        if ($existingUser) {
            $session->setFlashdata('error', 'El correo ya está registrado.');
            return redirect()->back()->withInput();
        }

        // Guardar usuario con contraseña encriptada
        $userModel->insert([
            'nombre' => $nombre,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'tipo_usuario' => 'usuario' // por defecto
        ]);

        $session->setFlashdata('success', 'Cuenta creada correctamente. Ahora inicia sesión.');
        return redirect()->to('/login');
    }
}