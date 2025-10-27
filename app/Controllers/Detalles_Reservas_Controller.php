<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\DetalleReservaModel;
class Detalles_Reservas_Controller extends BaseController
{
    public function index(): string
    {
        //crear un objeto DetalleReservaModel
        $detallereserva = new DetalleReservaModel();
        $datos['datos']=$detallereserva->findAll();
        return view('detalle/detalles_reservas',$datos);
    }

    public function eliminar($id)
    {
        $detallereserva = new DetalleReservaModel();
        $detallereserva->delete($id);
        return $this->index();
    }

    public function agregarDetalles_reservas()
    {
        //crear un objeto de tipo DetalleReservaModel
        $detallereserva = new DetalleReservaModel();
        $datos=[
            'detalle_id'=>$this->request->getPost('txt_id'),
            'asiento_id'=>$this->request->getPost('txt_asiento'),
            'reserva_id'=>$this->request->getPost('txt_reserva'),
            'precio_unitario'=>$this->request->getPost('txt_precio'),
            'numero_ticket'=>$this->request->getPost('txt_ticket'),
        ];
        $detallereserva = new DetalleReservaModel();
        $detallereserva->insert($datos);
        return $this->index();
    }

    public function buscarDetalles_reservas($codigo)
    {
        $detallereserva = new DetalleReservaModel();
        $datos['datos']=$detallereserva->where(['detalle_id'=>$codigo])->first();
        return view('detalle/form_modificar_detalles_reservas',$datos);
    }

    public function editar()
    {
        $datos=[
            'asiento_id'=>$this->request->getPost('txt_asiento'),
            'reserva_id'=>$this->request->getPost('txt_reserva'),
            'precio_unitario'=>$this->request->getPost('txt_precio'),
            'numero_ticket'=>$this->request->getPost('txt_ticket'),
        ];
        $detallereserva = new DetalleReservaModel();
        $detallereserva->update($this->request->getPost('txt_id'),$datos);
        return $this->index();
    }
}