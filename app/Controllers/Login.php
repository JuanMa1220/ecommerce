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

        $username = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Inicio de sesión exitoso
            // Aquí puedes realizar cualquier acción adicional, como guardar información de sesión o redirigir al usuario a una página específica
            return redirect()->to('/home');
        } else {
            // Inicio de sesión fallido
            // Puedes mostrar un mensaje de error o redirigir al usuario de regreso al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->with('error', 'Inicio de sesión fallido. Verifica tus credenciales.');
        }
    }
}

?>







}
