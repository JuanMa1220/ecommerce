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

    <!-- Botón para cerrar sesión -->
    <a href="<?= base_url('login/logout'); ?>" class="btn btn-primary">Cerrar sesión</a>
</div>

</body>
</html>
