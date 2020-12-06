<?php 
  include 'templates/cabecera.php';
?>
      <div class="container mt-5 pt-5">
        <div class="row">
            <!-- Image -->
            <div class="row mt-4 mb-4">
                <div class="col-lg-1 text-center">
                    <ul class="nav nav-tabs row text-center pro-details" id="myTab" role="tablist">
                        <li class="nav-item col-lg-12 mb-2">
                            <img class="img-fluid active h-100" src="img/tarjetagrafica2.jpg" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" />
                        </li>
                        <li class="nav-item col-lg-12 mb-2">
                            <div style="height:50px">
                                <img class="img-fluid h-100" src="img/tarjetagrafica3.png" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"/>
                            </div>
                        </li>
                        <li class="nav-item col-lg-12 mb-2">
                            <img class="img-fluid h-100" src="img/tarjetagrafica4.png" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false"/>
                        </li>
                        <li class="nav-item col-lg-12 mb-2">
                            <img class="img-fluid h-100" src="img/tarjetagrafica5.png" id="productTwo-tab" data-toggle="tab" href="#productTwo" role="tab" aria-controls="productTwo" aria-selected="false"/>
                        </li>
                        <li class="nav-item col-lg-12 mb-2">
                            <img class="img-fluid h-100" src="img/tarjetagrafica6.jpg" id="productThree-tab" data-toggle="tab" href="#productThree" role="tab" aria-controls="productThree" aria-selected="false"/>
                        </li>
                        <li class="nav-item col-lg-12 mb-2">
                            <img class="img-fluid h-100" src="img/tarjetagrafica.jpg" id="productFour-tab" data-toggle="tab" href="#productFour" role="tab" aria-controls="productFour" aria-selected="false"/>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center border-right d-none d-md-block mb-5">
                    <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
                        <div class="tab-pane fade show active col-lg-12" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <img class="img-fluid" src="img/tarjetagrafica2.jpg" />
                        </div>
                        <div class="tab-pane fade col-lg-12" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <img class="img-fluid" src="img/tarjetagrafica3.png" />
                        </div>
                        <div class="tab-pane fade col-lg-12" id="product" role="tabpanel" aria-labelledby="product-tab">
                            <img class="img-fluid" src="img/tarjetagrafica4.png" />
                        </div>
                        <div class="tab-pane fade col-lg-12" id="productTwo" role="tabpanel" aria-labelledby="productTwo-tab">
                            <img class="img-fluid" src="img/tarjetagrafica5.png" />
                        </div>
                        <div class="tab-pane fade col-lg-12" id="productThree" role="tabpanel" aria-labelledby="productThree-tab">
                            <img class="img-fluid" src="img/tarjetagrafica6.jpg" />
                        </div>
                        <div class="tab-pane fade col-lg-12" id="productFour" role="tabpanel" aria-labelledby="productFour-tab">
                            <img class="img-fluid" src="img/tarjetagrafica.jpg" />
                        </div>
                    </div>
                </div>
                <!-- Add to cart -->
            <div class="col-12 col-lg-6 add_to_cart_block">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <p class="title">Tarjeta Gráfica MSI GEFORCE GTX 1060</p>
                        <p class="price"><strong class="text-muted">Precio: 473,54€</stong></p>
                        <form method="get" action="carrito.php">
                            </div>
                            <div class="form-group">
                            <label>Cantidad :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button id="cantidad" type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                                <div class="input-group-append">
                                    <button id="cantidad" type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                            <a href="cart.html" class="btn btn-primary btn-lg btn-block text-uppercase">
                                <i class="fas fa-cart-plus"></i> Añadir al carro
                            </a>
                        </form>
                        <div class="product_rassurance">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>Entrega Rápida</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>Pago Seguro</li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>+34 1 22 54 65 60</li>
                            </ul>
                        </div>
                        <div class="reviews_product p-3 mb-2 ">
                            3 opiniones
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-secondary"></i>
                            (4/5)
                        </div>
                        <!-- Alert -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissable">
                                    <h4>
                                        Información!
                                    </h4> <strong>Atención!</strong> En caso de no haber disponibilidad del producto nos pondremos en contacto con usted,
                                    o para consultar cualquier duda <a href="contacto.php">Contacte con nosotros</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
    
        <div class="row mb-5">
            <!-- Descripcion -->
            <div class="col-12">
                <div id="MainMenu">
                    <div class="list-group panel">
                        <a href="#descripcion" class="list-group-item bg-primary text-light" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-align-justify"></i> Caracteristicas</a>
                        <div class="collapse" id="descripcion">
                            <p class="card-text mt-3">
                                <strong class="text-muted">- LA ÚLTIMA PLATAFORMA GAMING</strong> <small class="text-muted">Prepárate para el juego con GeForce® GTX. Las tarjetas GeForce GTX son las más avanzadas jamás creadas. Descubre un rendimiento sin precedentes, eficiencia energética y experiencias gaming de nueva generación.</small>
                            </p>
                            <p class="card-text mb-3">
                                <strong class="text-muted">- VR READY</strong> <small class="text-muted"> Descubre la siguiente generación en VR, la menor latencia y compatibilidad con visores líderes - usando la tecnología NVIDIA VRWORKS™. El audio VR, físicas y hápticos te permitirán escuchar y sentir cada momento.</small>
                            </p>
                            <p class="card-text mt-3">
                                <strong class="text-muted">- LAS ÚLTIMAS TECNOLOGÍAS GAMING</strong> <small class="text-muted"> Pascal ha sido diseñado para las demandas de las pantallas de próxima generación, incluyendo VR, resolución ultra y múltiples monitores. También incorpora NVIDIA GameWorks™ consiguiendo una experiencia de juego extremadamente fluida con efectos cinemáticos espectaculares. Además, también incluye una nueva captura revolucionaria de 360º</small>
                            </p>
                            <p class="card-text mt3">
                              <strong class="text-muted">- RENDIMIENTO</strong> <small class="text-muted"> Las tarjetas gráficas basadas en Pascal te ofrecen un rendimiento y eficiencia energética superiores, usando el ultra rápido FinFET con soporte DirectX™ 12 para ofrecer la experiencia gaming más rápida, fluia y eficiente posible.</small>
                            </p>
                        </div>
                                <a href="#detalles" class="list-group-item bg-primary text-light" data-toggle="collapse" data-parent="#MainMenu"><i class="fas fa-file"></i> Especificaciones</a>
                                <div class="collapse" id="detalles">
                                    <ul>
                                      <li class="text-muted">Memory 6GB GDDR5</li>
                                      <li class="text-muted">Motor Gráfico NVIDIA ® GeForce ® GTX 1060</li>
                                      <li class="text-muted">Bus Standard PCI Express x16 3.0</li>
                                      <li class="text-muted">Interfaz de Memoria 256-bit</li>
                                      <li class="text-muted">Velocidad de Reloj de Núcleo(MHz) 1683 MHz / 1607 MHz</li>
                                      <li class="text-muted">Velocidad del Reloj de Memoria(MHz) 8008 MHz</li>
                                      <li class="text-muted">Maximum Displays 4</li>
                                      <li class="text-muted">Multi-GPU Technology SLI, 2-Way</li>
                                      <li class="text-muted">Soporte HDCP 2.2</li>
                                      <li class="text-muted">Power consumption (W) 180 W</li>
                                      <li class="text-muted">
                                        Output
                                        <ul>
                                          <li class="text-muted">DisplayPort x 3 (Version 1.4)</li>
                                          <li class="text-muted">HDMI (Version 2.0)</li>
                                          <li class="text-muted">DL-DVI-D</li>
                                        </ul>
                                      </li>
                                      <li class="text-muted">Recommended Power Supply (W) 500 W</li>
                                      <li class="text-muted">Virtual Reality Ready Y</li>
                                      <li class="text-muted">Power Connectors 6-pin x 1, 8-pin x 1</li>
                                      <li class="text-muted">Versión Soportada de DirectX 12</li>
                                      <li class="text-muted">Versión Soportada de OpenGL 4.5</li>
                                      <li class="text-muted">Dimensiones de Tarjeta(mm) 279 x 140 x 42 mm</li>
                                      <li class="text-muted">Peso 1075 g / 1707 g</li>
                                    </ul>
                                </div>
                                <!-- Comentarios -->
                        <a href="#comentarios" class="list-group-item bg-primary text-light" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-comment"></i> Opiniones <span class="badge badge-light">3</span></a>
                        <div class="collapse" id="comentarios">
                            <div class="col-12" id="reviews">
                                <div class="card border-light mb-3">
                                            <div class="card-body">
                                                <div class="review">
                                                    <ul class="list-unstyled">
                                                        <li class="media">
                                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min1.jpg" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2 font-weight-bold">Anna Smith</h5>
                                                            <!--Review-->
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                            Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                        </li>
                                                        <li class="media my-4">
                                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min2.jpg" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2 font-weight-bold">Tom Brown</h5>
                                                            <!--Review-->
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-secondary"> </i>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                            Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                        </li>
                                                        <li class="media">
                                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/avatar-min3.jpg" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h5 class="mt-0 mb-2 font-weight-bold">Natalie Doe</h5>
                                                            <!--Review-->
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-warning"> </i>
                                                            <i class="fas fa-star text-secondary"> </i>
                                                            <i class="fas fa-star text-secondary"> </i>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                            Donec lacinia congue felis in faucibus.</p>
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Section: Content-->
        <section class="dark-grey-text text-center mt-5 pt-5">
          
            <!-- Section heading -->
            <h3 class="font-weight-bold mb-4 pb-2 border-bottom">Búsquedas recientes</h3>      
              <!-- Grid row -->
            <div class="row">
        
              <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <img src="./img/portatil.jpg" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <p class="card-text"><small class="text-muted">Asus Chromebook Z1400CN-BV0306 14" HD</small></p>
                  <h5 class="font-weight-bold dark-text mb-0">
                    <strong>349 €</strong>
                  </h5>
                  <a href="#" class="btn btn-primary btn-shopping mt-3 hidden" role="button">Ver Detalles <i class="fas fa-eye"></i></a>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
            </div>
            <!-- Grid column -->
        
              <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <img src="./img/movil.jpg" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <p class="card-text"><small class="text-muted">Xiaomi Redmi Note 8 Pro 6/64GB Naranja Libre</small></p>
                  <h5 class="font-weight-bold dark-text mb-0">
                    <strong>250 €</strong>
                  </h5>
                  <a href="#" class="btn btn-primary btn-shopping mt-3 hidden" role="button">Ver Detalles <i class="fas fa-eye"></i></a>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
            </div>
        
              <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <img src="./img/torre.jpg" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <p class="card-text"><small class="text-muted">Nox Hummer MC Pro ARGB USB 3.0 Negra/Blanca</small></p>
                  <h5 class="font-weight-bold dark-text mb-0">
                    <strong>50 €</strong>
                  </h5>
                  <a href="#" class="btn btn-primary btn-shopping mt-3 hidden" role="button">Ver Detalles <i class="fas fa-eye"></i></a>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
            </div>
        
              <!-- Grid column -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
              <!-- Card -->
              <div class="card align-items-center border-0">
                <!-- Card image -->
                <div class="view overlay">
                  <img src="./img/ram.jpg" class="card-img-top"
                    alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class="card-body text-center">
                  <!-- Category & Title -->
                  <p class="card-text"><small class="text-muted">RAM Corsair Vengeance RGB PRO 32GB DDR4 3200Mhz Blanco</small></p>
                  <h5 class="font-weight-bold dark-text mb-0">
                    <strong>150 €</strong>
                  </h5>
                  <a href="#" class="btn btn-primary btn-shopping mt-3 hidden" role="button">Ver Detalles <i class="fas fa-eye"></i></a>
                </div>
                <!-- /Card content -->
              </div>
              <!-- /Card -->
            </div>
        
            </div>
            <!-- Grid row -->
        
          </section>
          <!--Section: Content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
<?php 
include 'templates/pie.php';
?>