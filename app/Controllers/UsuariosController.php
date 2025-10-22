<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuariosController extends BaseController{
    
    public function vistaUsuarios(): string
    {
        $usuario = new UsuarioModel();
        $datos['datos'] = $usuario->findAll();
        return view('usuarios/vista_usuarios', $datos);
    }

    public function agregarUsuario()
    {
        $usuario = new UsuarioModel();
        $datos = [
            'nombre'         => $this->request->getPost('txt_nombre'),
            'usuario_id'     => $this->request->getPost('txt_id'),
            'email'          => $this->request->getPost('txt_email'),
            'apellido'       => $this->request->getPost('txt_apellido'),
            'telefono'       => $this->request->getPost('txt_telefono'),
            'password'       => password_hash($this->request->getPost('txt_password'), PASSWORD_DEFAULT),
            'fecha_registro' => $this->request->getPost('txt_fecha_registro'),  
            'tipo_usuario'   => $this->request->getPost('txt_tipo'),
            'activo'         => $this->request->getPost('txt_activo') ?? 0,
            'ultimo_acceso'  => $this->request->getPost('txt_ultimo_acceso'),   
        ];
        
        $usuario->insert($datos);
        return redirect()->to(base_url('usuarios'));
    }

    public function eliminarUsuario($id)
    {
        $usuario = new UsuarioModel();
        $usuario->delete($id);
        return redirect()->to(base_url('usuarios'));
    }

   public function buscarUsuario($id)
{
    $usuario = new UsuarioModel();
    $usuario = $usuario->find($id);
    $datos['usuario'] = $usuario; // Pasamos el array a la vista
    return view('usuarios/editar_usuarios', $datos);
}


    public function actualizarUsuario($id)
    {
        $usuario = new UsuarioModel();
         $datos = [
            'nombre'         => $this->request->getPost('txt_nombre'),
            'email'          => $this->request->getPost('txt_email'),
            'apellido'       => $this->request->getPost('txt_apellido'),
            'telefono'       => $this->request->getPost('txt_telefono'),
            'password'       => password_hash($this->request->getPost('txt_password'), PASSWORD_DEFAULT),
            'fecha_registro' => $this->request->getPost('txt_fecha_registro'),  
            'tipo_usuario'   => $this->request->getPost('txt_tipo'),
            'activo'         => $this->request->getPost('txt_activo') ?? 0,
            'ultimo_acceso'  => $this->request->getPost('txt_ultimo_acceso'),   
        ];

        $usuario->update($id, $datos);
        return redirect()->to(base_url('usuarios'));
    }
}
?>