<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Aquí puedes cargar y mostrar la vista de administrador
        return view('/administrador'); 
    }

    
}
