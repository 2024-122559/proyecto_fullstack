<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login'); // Formulario de login
    }

    public function autenticar()
    {
        $session = session();
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuarioModel->where('email', $email)->first();

        if ($usuario) {
            // Verificar si el usuario está activo
            if ($usuario['activo'] != 1) {
                return redirect()->back()->with('error', 'Usuario bloqueado');
            }

            // Verificar contraseña
            if (password_verify($password, $usuario['password'])) {
                // Regenerar sesión
                $session->regenerate();

                // Guardar datos correctos en sesión
                $sessionData = [
                    'usuario_id' => $usuario['usuario_id'], // 🔹 ID real del usuario
                    'nombre' => $usuario['nombre'],         // opcional
                    'tipo_usuario' => $usuario['tipo_usuario'],
                    'logged_in' => true
                ];
                $session->set($sessionData);

                // Actualizar último acceso
                $usuarioModel->update($usuario['usuario_id'], ['ultimo_acceso' => date('Y-m-d H:i:s')]);

                // Redirigir según rol
                if ($usuario['tipo_usuario'] === 'admin') {
                    return redirect()->to('/admin');
                } else {
                    $redirect = $session->get('redirect_after_login') ?? '/user';
                    $session->remove('redirect_after_login');
                    return redirect()->to($redirect);
                }
            }
        }

        // Si email o contraseña no coinciden
        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); 
        return redirect()->to('/login');
    }
}