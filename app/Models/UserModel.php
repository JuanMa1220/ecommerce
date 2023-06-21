<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $allowedFields = ['usuario', 'contrasena'];

    public function obtenerUsuarioPorCredenciales($usuario, $contrasena)
    {
        return $this->where('usuario', $usuario)
            ->where('contrasena', $contrasena)
            ->first();
    }
    
    
    public function registrar($datos)
    {
        
        return redirect()->to('/cliente');
    }
}

?>