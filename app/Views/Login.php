<!DOCTYPE html>
<html>
  <head>
    <title>Login en PHP</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      .container{margin-top:100px}
    </style>
  </head>

  <body style="background-color: #1D5B9B;">

    <div class="container">
    <h2>Login</h2>
    <br><br>
      <form class="form-horizontal" action="login.php" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="usuario" id="inputusuario" placeholder="Usuario" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">entrar</button>
          </div>
        </div>

        <form class="form-inline my-2 my-lg-0">          
          <a href="http://localhost/ecommerce/home" class="btn btn-primary">home</a>
          </form>
      </form>
    </div>

  </body>
</html>