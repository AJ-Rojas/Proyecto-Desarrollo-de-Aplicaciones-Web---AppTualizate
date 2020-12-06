<?php 
session_start();
include 'servidor/carrito.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppTualizate</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  
  } else {
    echo('<div class="modal fade" id="frameModalTopInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
            <div class="modal-header">
              <h5 class="modal-title col-11 text-center bg-color-success" id="exampleModalLabel">#QuédateEnCasa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <img src="./img/envío.jpg" alt="envios-a-toda-Sevilla" title="Envíos a toda Sevilla" class="modal-content" width="100%" height="100%" />
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>');
  }
    ?>
  <!-- Inicio Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top d-flex">
        <a class="navbar-brand" id="logoPrincipal" href="index.php">
          <img src="./img/logoPrincipal2.png" width="150" height="50" class="d-inline-block align-top" alt="logoAppTualizatze">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse xl-auto" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-5">
              <li class="nav-item active mr-5">
                <div class="dropdown show">
                  <a class="dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Componentes</a>
                    <a class="dropdown-item" href="#">Ordenadores</a>
                    <a class="dropdown-item" href="#">Smartphones y Telefonía</a>
                    <a class="dropdown-item" href="#">Audio, Foto y Vídeo</a>
                    <a class="dropdown-item" href="#">Periféricos</a>
                    <a class="dropdown-item" href="#">Tablets</a>
                    <a class="dropdown-item" href="#">Impresoras y Consumibles</a>
                    <a class="dropdown-item" href="#">Redes</a>
                    <a class="dropdown-item" href="#">Cables</a>
                  </div>
                </div>
              </li>
              <li class="nav-item active mr-5">
                <div class="dropdown show">
                    <a class="dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="#">Mantenimiento Particulares</a>
                    <a class="dropdown-item" href="#">Mantenimiento Empresas</a>
                    <a class="dropdown-item" href="#">Desarrollo Web a Medida</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="mr-5 text-dark" href="#">
                  Promociones
                </a>
              </li>
              <li>
                <a class="mr-5 text-dark" href="#">
                  Premium
                </a>
              </li>
            </ul>
            <?php
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                $user = $_SESSION["name"];
                echo('
            <div class="dropdown show">
                <a class="dropdown-toggle mr-4 text-dark" href="#" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./img/user-solid.svg" width="20" height="20" class="d-inline-block align-top" alt="Mi-cuenta" data-toggle="tooltip" data-placement="bottom" title="LogIn">' . 
                    $user .
                '</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                    <a class="dropdown-item mb-2" href="#">
                        <i class="fas fa-box"></i>
                        Mis Pedidos
                    </a>
                    <a class="dropdown-item mb-2" href="#">
                        <i class="fas fa-cogs"></i>
                        Ajustes
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item mb-2" href="./servidor/cerrarSesion.php">
                        <i class="fas fa-sign-out-alt"></i>
                        Cerrar Sesión
                    </a>
                </div>
            </div>');
              } else {
                echo('<a class="mr-4 text-dark" href="login.php">
                    <img src="./img/user-solid.svg" width="20" height="20" class="d-inline-block align-top" alt="Mi-cuenta" data-toggle="tooltip" data-placement="bottom" title="LogIn">
                    Mi cuenta
                </a>');
              }
            ?>
            <a class="nav-link mr-4 text-dark" href="shoppingCart.php">
                <img src="./img/shopping-cart-solid.svg" width="20" height="20" class="d-inline-block align-top" alt="carrito-compra" data-toggle="tooltip" data-placement="bottom" title="Carrito de la compra">
                Mi carrito(<?php echo (empty($_SESSION["carrito"]))?0:count($_SESSION["carrito"]); ?>)
              </a>
            <form class="form-inline my-md-2 my-lg-0 xs-justify-content-center">
              <input class="form-control mr-sm-2 mr-md-3" type="search" placeholder="Buscar..." aria-label="Search">
              <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
      </nav>
      <!-- Fin Navbar -->