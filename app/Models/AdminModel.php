<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'cliente'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idcliente'; // Nombre de la clave primaria

    protected $allowedFields = ['usuario', 'contrasena']; // Campos permitidos para asignación masiva

    // Aquí puedes agregar métodos adicionales para interactuar con la tabla de clientes
}
