<?php

namespace App\Controllers;

class Carrito extends BaseController
{
    public function carrito()
    {
        helper('url');
        return view('Carrito');
    }
}