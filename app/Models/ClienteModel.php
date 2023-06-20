<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'Cliente';
    public function insertData($data)
    {
        
    }
    protected $allowedFields = ['nombre','apellidos', 'edad', 'fecha', 'genero', 'correo', 'direccion', 'telefono'];
}
?>