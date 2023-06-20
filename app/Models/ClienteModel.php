<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $allowedFields = ['nombre', 'apellidos', 'usuario', 'edad', 'fecha', 'genero', 'correo', 'contrasena', 'direccion', 'telefono'];

    public function guardar($data)
    {
        return $this->insert($data);
    }

    public function obtenerCliente($idcliente)
    {
        return $this->find($idcliente);
    }

    public function actualizarCliente($idcliente, $data)
    {
        return $this->update($idcliente, $data);
    }

    public function eliminarCliente($idcliente)
    {
        return $this->delete($idcliente);
    }
}
?>