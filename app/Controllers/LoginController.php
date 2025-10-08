<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class LoginController extends Controller
{
    public function index()
    {
        // Pasar pelicula_id a la vista para mantener el contexto
        $data = [
            'pelicula_id' => $this->request->getGet('pelicula_id') ?? ''
        ];
        return view('iniciar_sesion', $data);
    }

    public function login()
    {
        // Obtener datos del formulario
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $pelicula_id = $this->request->getGet('pelicula_id');

        // Validar credenciales
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->where('activo', 1)->first();

        if ($usuario && password_verify($password, $usuario['password'])) {
            // Credenciales correctas, guardar datos en la sesión
            $session = session();
            $session->set([
                'usuario_id' => $usuario['usuario_id'],
                'email' => $usuario['email'],
                'nombre' => $usuario['nombre'],
                'logged_in' => true
            ]);

            // Redirigir a peliculas
            return redirect()->to(base_url('movies'));
        } else {
            // Credenciales incorrectas, redirigir con mensaje de error
            return redirect()->to(base_url('iniciar_sesion?pelicula_id=' . $pelicula_id))
                            ->withInput()
                            ->with('errors', 'Usuario no encontrado');
        }
    }

    public function logout()
    {
        // Cerrar sesión
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('iniciar_sesion'))->with('message', 'Sesión cerrada correctamente.');
    }
}
?>