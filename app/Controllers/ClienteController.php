<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class ClienteController extends BaseController
{
    public function index()
  {
    return view('cliente');
  }
    public function insertar()
    {
        $model = new ClienteModel();

        
            $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'apellidos' => $this->request->getPost('apellido'),
            'edad'      => $this->request->getPost('edad'),
            'fecha'     => $this->request->getPost('fecha'),
            'genero'    => $this->request->getPost('genero'),
            'correo'    => $this->request->getPost('correo'),
            'direccion' => $this->request->getPost('direccion'),
            'telefono'  => $this->request->getPost('telefono'),
            ];
        helper('url');
        return view('Cliente');
    }
}
?>