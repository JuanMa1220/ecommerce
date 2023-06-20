<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // Aquí puedes cargar y mostrar la vista de administrador
        return view('/administrador'); // Asegúrate de que 'admin/index' sea la ruta correcta de tu vista de administrador
    }

    // Otros métodos y funcionalidades de administración...
}
