<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        .container { margin-top: 100px; }
        ul { list-style-type: none; }
        li { margin-bottom: 10px; }
    </style>
</head>

<body style="background-color: #E6E6FA;">

<div class="container">
    <h2>Carrito de Compras</h2>
    <br><br>
    <!-- Lista de productos en el carrito -->
    <ul>
        <li>Producto 1</li>
        <li>Producto 2</li>
        <li>Producto 3</li>
        <!-- Agrega más elementos de la lista según tus necesidades -->
    </ul>
    
    <!-- Botones de redirección -->
    <a href="<?= base_url('home'); ?>" class="btn btn-primary">Ir a Home</a>
    <a href="<?= base_url('productos'); ?>" class="btn btn-primary">Ir a Productos</a>
</div>

</body>
</html>

