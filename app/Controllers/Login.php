<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function login()
    {
        helper('url');
        return view('Login');
    }
    
    public function ingresar()
    {
        // Cargar el modelo de Usuario
        $userModel = new UserModel();

        // Validar el formulario de inicio de sesión
        if ($this->request->getMethod() === 'post') {
            $usuario = $this->request->getPost('usuario');
            $contrasena = $this->request->getPost('contrasena');

            // Obtener el usuario por las credenciales
            $usuario = $userModel->obtenerUsuarioPorCredenciales($usuario, $contrasena);

            if (!$usuario) {
                // Las credenciales son inválidas, redirigir al formulario de inicio de sesión con errores
                return redirect()->back()->withInput()->with('error', 'Credenciales inválidas');
            } else {
                return redirect()->to('/administrador');
            }
        }

        // Mostrar el formulario de inicio de sesión
        return view('login');
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








