<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\EstadoModel;
class EstadosController extends BaseController
{
    public function index(): string
    {
        //crear un objeto EstadoModel
        $estado = new EstadoModel();
        $datos['datos']=$estado->findAll();
        return view('estados/estados',$datos);
    }

    public function eliminar($id)
    {
        $estado = new EstadoModel();
        $estado->delete($id);
        return $this->index();
    }

    public function agregarEstados()
    {
        //crear un objeto de tipo EstadoModel
        $estado = new EstadoModel();
        $datos=[
            'id_estado'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'descripcion'=>$this->request->getPost('txt_descripcion'),
        ];
        $estado = new EstadoModel();
        $estado->insert($datos);
        return $this->index();
    }

    public function buscarEstados($codigo)
    {
        $estado = new EstadoModel();
        $datos['datos']=$estado->where(['id_estado'=>$codigo])->first();
        return view('estados/form_modificar_estado',$datos);
    }

    public function editar()
    {
        $datos=[
            'nombre'=>$this->request->getPost('txt_nombre'),
            'descripcion'=>$this->request->getPost('txt_descripcion'),
        ];
        $estado = new EstadoModel();
        $estado->update($this->request->getPost('txt_id'),$datos);
        return $this->index();
    }
}