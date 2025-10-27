<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\AsientoModel;
class AsientosController extends BaseController
{
    public function index(): string
    {
        //crear un objeto AsientoModel
        $asiento = new AsientoModel();
        $datos['datos']=$asiento->findAll();
        return view('asientos/asientos',$datos);
    }

    public function eliminar($id)
    {
        $asiento = new AsientoModel();
        $asiento->delete($id);
        return $this->index();
    }

    public function agregarAsientos()
    {
        //crear un objeto de tipo AsientoModel
        $asiento = new AsientoModel();
        $datos=[
            'asiento_id'=>$this->request->getPost('txt_id'),
            'sala_id'=>$this->request->getPost('txt_sala'),
            'fila'=>$this->request->getPost('txt_fila'),
            'numero'=>$this->request->getPost('txt_numero'),
            'tipo'=>$this->request->getPost('txt_tipo'),
            'activo'=>$this->request->getPost('txt_activo'),
        ];
        $asiento = new AsientoModel();
        $asiento->insert($datos);
        return $this->index();
    }

    public function buscarAsientos($codigo)
    {
        $asiento = new AsientoModel();
        $datos['datos']=$asiento->where(['asiento_id'=>$codigo])->first();
        return view('asientos/form_modificar_asiento',$datos);
    }

    public function editar()
    {
        $datos=[
            'sala_id'=>$this->request->getPost('txt_sala'),
            'fila'=>$this->request->getPost('txt_fila'),
            'numero'=>$this->request->getPost('txt_numero'),
            'tipo'=>$this->request->getPost('txt_tipo'),
            'activo'=>$this->request->getPost('txt_activo'),
        ];
        $asiento = new AsientoModel();
        $asiento->update($this->request->getPost('txt_id'),$datos);
        return $this->index();
    }
}