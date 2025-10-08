<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\MoviesModel;

class ReservarController extends Controller
{
    public function index($id = null)
    {
        // Si no hay ID de película, redirigir a peliculas
        if (!$id) {
            return redirect()->to(base_url('peliculas'))->with('errors', 'No se seleccionó ninguna película.');
        }

        // Verificar si el usuario está autenticado
        $session = session();
        if (!$session->has('usuario_id')) {
            // Redirigir a iniciar_sesion, pasando el id de la película
            return redirect()->to(base_url('iniciar_sesion?pelicula_id=' . $id))->with('errors', 'Por favor, inicia sesión para reservar.');
        }

        // Cargar la película seleccionada
        $peliculaModel = new MoviesModel();
        $pelicula = $peliculaModel->find($id);

        if (!$pelicula) {
            return redirect()->to(base_url('peliculas'))->with('errors', 'Película no encontrada.');
        }

        // Mostrar la página de reservas con los datos de la película
        $data = [
            'pelicula' => $pelicula
        ];
        return view('reservar', $data);
    }

    public function login()
    {
        // Obtener datos del formulario
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $pelicula_id = $this->request->getGet('pelicula_id'); // ID de la película desde la URL

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
                'tipo_usuario' => $usuario['tipo_usuario'],
                'logged_in' => true
            ]);

            // Opcional: Restringir acceso según tipo_usuario
            // Por ejemplo, solo tipo_usuario = 2 o 3 puede reservar
            if (!in_array($usuario['tipo_usuario'], [2, 3])) {
                $session->destroy(); // Cerrar sesión si no tiene permiso
                return redirect()->to(base_url('iniciar_sesion?pelicula_id=' . $pelicula_id))
                                ->withInput()
                                ->with('errors', 'Usuario sin permiso para reservar.');
            }

            // Redirigir a la página de reservas con el ID de la película
            return redirect()->to(base_url('reservar/' . $pelicula_id));
        } else {
            // Credenciales incorrectas, redirigir a iniciar_sesion
            return redirect()->to(base_url('iniciar_sesion?pelicula_id=' . $pelicula_id))
                            ->withInput()
                            ->with('errors', 'Correo o contraseña incorrectos, o usuario inactivo.');
        }
    }
}
?>