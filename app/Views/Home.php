<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#7189A3;">
  <form>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--comentario-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>            
          </ul>
    
          <form class="form-inline my-2 my-lg-0">            
          <a href="<?=base_url('/')?>" class="btn btn-primary">Login</a>
          </form>
          <br><br>

          <?php
            $margin = '20px'; // Valor del margen que deseas aplicar
            echo '<div style="margin: ' . $margin . ';">';
            echo '</div>';
          ?>

          <form class="form-inline my-2 my-lg-0">          
          <a href="<?=base_url('cliente')?>" class="btn btn-primary">Registrar</a>
          </form>
        </div>
      </nav>
    </header>

    <header>
      <?php
        print "Hola bienvenido";
        echo "<br><br>";
      ?>
   
      <div class="container">
        <h1 class="title">Productos</h1>
      </div>
    </header>
   
    <header>
    <div class="row justify-content-around">
      <div class="row justify-content-around">
      <h1 class="title">      </h1>      
        <!--Clase del slider-->
        <div class="slider" x-data="(start: true, end: false)">
          <!--imagen 1-->
          <div class="slider_item">
            <img class="image" src="assets\image\imagen1.jpg">
              <div class="info">
                <h2>pantalla</h2>
                <form class="form-inline my-2 my-lg-0">          
                  <a href="<?=base_url('carrito')?>" class="btn btn-primary">Agregar</a>
                </form>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
      <?php
        $margin = '20px'; // Valor del margen que deseas aplicar
        echo '<div style="margin: ' . $margin . ';">';
        echo '</div>';
      ?>
        <h1 class="title">      </h1>
        <!--Clase del slider-->
        <div class="slider" x-data="(start: true, end: false)">
          <!--imagen 1-->
          <div class="slider_item">
            <img class="image" src="assets\image\imagen2.jpeg">
            <div class="info">
              <h2>pantalla</h2>
              <form class="form-inline my-2 my-lg-0">          
                  <a href="" class="btn btn-primary">agregar</a>
                </form>
          </div>
        </div>
      </div>
  
      <div class="row justify-content-around">
      <?php
        $margin = '20px'; // Valor del margen que deseas aplicar
        echo '<div style="margin: ' . $margin . ';">';
        echo '</div>';
      ?>
        <h1 class="title"></h1>
        <!--Clase del slider-->
        <div class="slider" x-data="(start: true, end: false)">
          <!--imagen 1-->
          <div class="slider_item">
            <img class="image" src="assets\image\imagen3.jpeg">
              <div class="info">
                <h2>pantalla</h2>
                <form class="form-inline my-2 my-lg-0">          
                  <a href="<?=base_url('carrito')?>" class="btn btn-primary">agregar</a>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    </header>
    
  </form>   
</body>
</html>