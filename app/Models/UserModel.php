<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $allowedFields = ['usuario', 'contrasena'];
    
    public function validateData($usuario, $contrasena)
    {
        // Verificar si existe un registro en la tabla cliente con el usuario y contraseña proporcionados
        $query = $this->where(['usuario' => $usuario, 'contrasena' => $contrasena])->countAllResults();

        return ($query > 0); // Retorna true si se encontró un registro, false de lo contrario
    }
    
    public function registrar($datos)
    {
        
        return redirect()->to('/cliente');
    }
}

?>