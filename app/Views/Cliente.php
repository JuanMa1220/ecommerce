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
            <form class="form-horizontal" action="login.php" method="post">
                <div class="form-group">
                    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="apellidos" id="inputApellidos" placeholder="Apellidos" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Edad</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="edad" id="inputEdad" placeholder="Edad" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Genero</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="genero" id="inputGenero" placeholder="Genero" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="direccion" id="inputDireccion" placeholder="Direccion" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="telefono" id="inputtelefono" placeholder="Telefono" required>
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">agregar</button>
                    </div>
                </div>               
            </form>
            <form class="form-inline my-2 my-lg-0">          
                <a href="http://localhost/ecommerce/home" class="btn btn-primary">home</a>
            </form>
        </div>
</body>
</html>