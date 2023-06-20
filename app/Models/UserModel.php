<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $allowedFields = ['usuario', 'contrasena'];
    
    public function login($usuario, $contrasena)
    {
        $usuario = $this->where('usuario', $usuario)->first();

        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            // Inicio de sesión exitoso
            return true;
        } else {
            // Inicio de sesión fallido
            return false;
        }
    }
}

?>