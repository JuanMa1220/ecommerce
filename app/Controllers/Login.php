<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        helper('url');
        return view('Login');
    }
    public function processLogin()
    {
        $userModel = new UserModel();

        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $user = $userModel->where('usuario', $usuario)->first();

        if ($user && password_verify($contrasena, $usuario['contrasena'])) {
            // Inicio de sesión exitoso
            // Aquí puedes realizar cualquier acción adicional, como guardar información de sesión o redirigir al usuario a una página específica
            return redirect()->to('/administrador');
        } else {
            // Inicio de sesión fallido
            // Puedes mostrar un mensaje de error o redirigir al usuario de regreso al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->with('error', 'Inicio de sesión fallido. Verifica tus credenciales.');
        }
    }
    public function index()
    {
        
        return view('cliente');
    }
    public function logout()
    {
        // Destruir la sesión actual
        session()->destroy();

        // Redirigir al formulario de inicio de sesión o a otra página
        return redirect()->to('/login');
    }
}

?>








