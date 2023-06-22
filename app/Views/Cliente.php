<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Agregar cliente</title>
</head>
<body style="background-color:#7189A3;">
    <?php if (session()->has('mensaje')): ?>
        <p><?= session('mensaje') ?></p>
    <?php endif; ?>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach (session('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h2 class="container">Agregar cliente</h2>
    <br><br>

    <div class="container">
        <form class="form-horizontal" action="<?= base_url('cliente/agregar'); ?>" method="post">
            <div class="form-group">
                <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Nombre" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="apellidos" id="inputApellidos" placeholder="Apellidos" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputUsuario" class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="usuario" id="inputUsuario" placeholder="Usuario" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEdad" class="col-sm-2 control-label">Edad</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="edad" id="inputEdad" placeholder="Edad" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputFecha" class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="fecha" id="inputFecha" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputGenero" class="col-sm-2 control-label">Género</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="genero" id="inputGenero" placeholder="Género" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputCorreo" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="correo" id="inputCorreo" placeholder="Correo" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputContrasena" class="col-sm-2 control-label">Contraseña</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="contrasena" id="inputContrasena" placeholder="Contraseña" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="direccion" id="inputDireccion" placeholder="Dirección" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputTelefono" class="col-sm-2 control-label">Teléfono</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="telefono" id="inputTelefono" placeholder="Teléfono" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Agregar</button>
                </div>
            </div>
        </form>

        <form class="form-inline my-2 my-lg-0">
            <a href="<?=base_url('home')?>" class="btn btn-primary">Volver</a>
        </form>
    </div>
</body>
</html>
