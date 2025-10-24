<?php
namespace App\Controllers;
use App\Models\FuncionModel;

class FuncionesController extends BaseController
{
    public function vistaFunciones(): string
    {
        $funcion = new FuncionModel();
        $datos['funciones'] = $funcion->findAll();
        return view('funciones/vista_funciones', $datos);
    }

    public function agregarFuncion()
    {
        $funcion = new FuncionModel();
        $datos = [
            'pelicula_id'    => $this->request->getPost('txt_pelicula_id'),
            'sala_id'        => $this->request->getPost('txt_sala_id'),
            'fecha'          => $this->request->getPost('txt_fecha'),
            'hora_inicio'    => $this->request->getPost('txt_hora_inicio'),
            'hora_fin'       => $this->request->getPost('txt_hora_fin'),
            'precio_base'    => $this->request->getPost('txt_precio_base'),
            'estado'         => $this->request->getPost('txt_estado'),
            'fecha_creacion' => date('Y-m-d H:i:s'),
        ];
        
        $funcion->insert($datos);
        return redirect()->to(base_url('funciones'));
    }

    public function eliminarFuncion($id)
    {
        $funcion = new FuncionModel();
        $funcion->delete($id);
        return redirect()->to(base_url('funciones'));
    }

    public function buscarFuncion($id)
    {
        $funcion = new FuncionModel();
        $funcion = $funcion->find($id);
        $datos['funcion'] = $funcion;
        return view('funciones/editar_funciones', $datos);
    }

    public function actualizarFuncion($id)
    {
        $funcion = new FuncionModel();
        $datos = [
            'pelicula_id'    => $this->request->getPost('txt_pelicula_id'),
            'sala_id'        => $this->request->getPost('txt_sala_id'),
            'fecha'          => $this->request->getPost('txt_fecha'),
            'hora_inicio'    => $this->request->getPost('txt_hora_inicio'),
            'hora_fin'       => $this->request->getPost('txt_hora_fin'),
            'precio_base'    => $this->request->getPost('txt_precio_base'),
            'estado'         => $this->request->getPost('txt_estado'),
        ];

        $funcion->update($id, $datos);
        return redirect()->to(base_url('funciones'));
    }
    

}
?>