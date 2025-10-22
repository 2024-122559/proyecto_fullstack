<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    public function index(){
        return view('login'); // Formulario único
    }

    public function autenticar(){
        $session = session();
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuarioModel->where('email', $email)->first();

        if($usuario){
            if($usuario['activo'] != 1){
                return redirect()->back()->with('error','Usuario bloqueado');
            }

            if(password_verify($password, $usuario['password'])){
                $session->regenerate();
                $sessionData = [
                    'id' => $usuario['usuario_id'],
                    'nombre' => $usuario['nombre'],
                    'tipo_usuario' => $usuario['tipo_usuario'],
                    'logged_in' => true
                ];
                $session->set($sessionData);

                // Actualizar último acceso
                $usuarioModel->update($usuario['usuario_id'], ['ultimo_acceso' => date('Y-m-d H:i:s')]);

                // Redirigir según rol
                if($usuario['tipo_usuario'] === 'admin'){
                    return redirect()->to('/admin');
                } else {
                    $redirect = $session->get('redirect_after_login') ?? '/user';
                    $session->remove('redirect_after_login');
                    return redirect()->to($redirect);
                }
            }
        }

        return redirect()->back()->with('error','Usuario o contraseña incorrectos');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}