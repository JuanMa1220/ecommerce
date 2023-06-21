<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        helper('url');
        return view('Login');
    }
    public function validarDatos()
    {
        // Obtener los datos del formulario
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        // Instanciar el modelo de Login
        $UserModel = new UserModel();

        // Validar los datos
        $isValid = $UserModel->validateData($usuario, $contrasena);

        if ($isValid) {
            // Si los datos son válidos, redirigir a la vista de administrador
            return redirect()->to('/administrador');
        } else {
            // Si los datos no son válidos, redirigir al formulario de inicio de sesión con un mensaje de error
            return redirect()->to('/login')->with('mensaje', 'Nombre de usuario o contraseña incorrectos');
        }
    }

    public function index()
    {
        
        return view('/cliente');
    }
    public function logout()
    {
        // Destruir la sesión actual
        session()->destroy();

        // Redirigir al formulario de inicio de sesión o a otra página
        return redirect()->to('');
    }
}

?>








