<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        .container { margin-top: 100px; }
    </style>
</head>

<body style="background-color: #1D5B9B;">

<div class="container">
    <h2>Administrador</h2>
    <br><br>
    <!-- Aquí van los componentes y contenido de la página de administrador -->
    <p>Bienvenido al panel de administración. Aquí puedes gestionar los usuarios, configuraciones, etc.</p>
    <p>Contenido de la página de administrador...</p>

    <!-- Botones para redireccionar -->
    <a href="<?= base_url('home'); ?>" class="btn btn-primary">Ir a Home</a>
    <a href="<?= base_url('productos'); ?>" class="btn btn-primary">Ir a Productos</a>
    <a href="<?= base_url('categorias'); ?>" class="btn btn-primary">Ir a Categorías</a>

    <!-- Ejemplo de tabla para mostrar usuarios -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo electrónico</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td>Administrador</td>
                <td>
                    <a href="#" class="btn btn-primary">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <!-- Agregar más filas de usuarios aquí -->
        </tbody>
    </table>

    <!-- Botón para cerrar sesión -->
    <a href="<?= base_url('login/logout'); ?>" class="btn btn-primary">Cerrar sesión</a>
</div>

</body>
</html>


