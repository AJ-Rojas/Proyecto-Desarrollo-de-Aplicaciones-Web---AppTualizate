<?php 
  include './servidor/config.php';
  include './servidor/conexion.php';
  include './servidor/carrito.php';
  include './templates/cabecera.php';
?>

       <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade mt-5 pt-5" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 h-90" src="./img/carousel1.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="./img/carousel2.jpg"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="./img/carousel3.jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
      <!-- Inicio Contenedor -->

      <!-- CATEGORIAS -->

      <h4 class="container mt-5">SELECCION DE <strong>MEJORES OFERTAS</strong></h4>
      <div class="container pt-5 border-top">  
        <!--Section: Content-->
        <section class="dark-grey-text text-center">          
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
          </div>
          <!-- Grid row -->
          <div class="row">
            <?php
          
              $sentencia=$pdo->prepare("SELECT * FROM `categorias`");
              $sentencia->execute();
              $listaCategorias=$sentencia->fetchAll(PDO::FETCH_ASSOC);  
          
            ?>

            <?php foreach($listaCategorias as $categoria) { ?>
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <a href="#"><img src="./img/<?php echo $categoria["imagen"]; ?>" class="card-img-top"
                    alt=""></a>
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <h5 class="font-weight-bold dark-text mb-3">
                  <?php echo $categoria["name"]; ?>
                  </h5>
                  <p class="card-text"><small class="text-muted"><?php echo $categoria["descripcion"]; ?></small></p>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
            </div>
            <!-- Grid column -->
            <?php } ?>
          </div>
      <!-- PRODUCTOS -->

      <h4 class="container mt-5 text-left">NUESTROS <strong>MEJORES PRODUCTOS</strong></h4>
      <div class="container pt-5 border-top">  
        <!--Section: Content-->
        <section class="dark-grey-text text-center">
              <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
          </div>
          <!-- Grid row -->
          <div class="row">
                    
          <?php
          
            $sentencia=$pdo->prepare("SELECT * FROM `productos`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);  
            
          ?>

          <?php foreach($listaProductos as $producto) { ?>
            <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <img src="./img/<?php echo $producto["imagen"]; ?>" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <p class="card-text"><small class="text-muted"><?php echo $producto["name"]; ?></small></p>
                  <h5 class="font-weight-bold dark-text mb-0">
                    <strong><?php echo $producto["precio"]; ?> €</strong>
                  </h5>
                  <a href="itemDetails.php" class="btn btn-primary btn-shopping mt-3 hidden" role="button">Ver Detalles <i class="fas fa-eye"></i></a>
                  <form action="" method="post">

                  <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto["id"],COD,KEY); ?>">
                  <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($producto["imagen"],COD,KEY); ?>">
                  <input type="hidden" name="name" id="name" value="<?php echo openssl_encrypt($producto["name"],COD,KEY); ?>">
                  <input type="hidden" name="code" id="code" value="<?php echo openssl_encrypt($producto["code"],COD,KEY); ?>">
                  <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto["precio"],COD,KEY); ?>">
                  <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">

                  <button class="btn btn-primary mt-3" name="btnAction" value="Agregar" type="submit">Añadir al carrito <i class="fas fa-cart-plus"></i></button>
                    
                  </form>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
              </div>
            <!-- /Grid column -->
          <?php
            }
          ?>  
          </div>
          <!-- Grid row -->
        </section>
        <!--Section: Content-->
      </div>
    </div>
  </main>
  <!--Main layout-->
  

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $("#frameModalTopInfoDemo").modal("toggle");
  });

  $('.carousel-example-2').carousel({
    touch: true
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
<?php
  include 'templates/pie.php';
?>