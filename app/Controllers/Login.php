<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        helper('url');
        return view('Login');
    }
}
