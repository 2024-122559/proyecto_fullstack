<?php
namespace App\Controllers;

class PanelController extends BaseController
{
    public function index()
    {
        return view('panel'); // carga panel.php
    }
}