<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Cliente extends BaseController
{
    public function index()
    {
        
        return view('cliente');
    }


    public function guardar()
    {
        // Obtener los datos del formulario
        $nombre = $this->request->getPost('nombre');
        $apellidos = $this->request->getPost('apellidos');
        $usuario = $this->request->getPost('usuario');
        $edad = $this->request->getPost('edad');
        $fecha = $this->request->getPost('fecha');
        $genero = $this->request->getPost('genero');
        $correo = $this->request->getPost('correo');
        $contrasena = $this->request->getPost('contrasena');
        $direccion = $this->request->getPost('direccion');
        $telefono = $this->request->getPost('telefono');

        // Validar los datos si es necesario

        // Crear una instancia del modelo de Cliente
        $clienteModel = new ClienteModel();

        // Guardar los datos en la base de datos
        $data = [
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'usuario' => $usuario,
            'edad' => $edad,
            'fecha' => $fecha,
            'genero' => $genero,
            'correo' => $correo,
            'contrasena' => $contrasena,
            'direccion' => $direccion,
            'telefono' => $telefono
        ];

        $clienteModel->insert($data);

        // Redireccionar a la vista de éxito o a donde desees
        return redirect()->to('/cliente')->with('mensaje', 'Cliente agregado correctamente');
    }
}
?>