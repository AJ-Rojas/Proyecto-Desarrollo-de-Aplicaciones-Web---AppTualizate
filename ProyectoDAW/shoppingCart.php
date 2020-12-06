<?php 

session_start();
include 'servidor/config.php';
include 'servidor/carrito.php';
include 'templates/cabecera.php';

?>
<div class="container mb-4 mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <?php if(!empty($_SESSION["carrito"])){ ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Producto</th>
                            <th scope="col">Código</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-right">Precio</th>
                            <th scope="col" class="text-center">Total</th>
                            <th scope="col" class="text-right"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $total = 0; 
                        $envio = 7;

                        ?>
                        <?php foreach($_SESSION["carrito"] as $indice=>$producto){ ?>
                        <tr>
                            <td><img src="./img/<?php echo $producto["imagen"]; ?>" width="50" high="50" alt=""></td>
                            <td><?php echo $producto["name"] ?></td>
                            <td><?php echo $producto["code"] ?></td>
                            <td class="text-center"><?php echo $producto["cantidad"] ?></td>
                            <td class="text-right"><?php echo $producto["precio"] ?> €</td>
                            <td class="text-center"><?php echo number_format($producto["precio"] * $producto["cantidad"],2); ?> €</td>
                            <td class="text-right">
                            <form action="" method="post">
                                
                                <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto["id"],COD,KEY); ?>">
                                <button name="btnAction" value="Eliminar" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>

                            </form>
                        
                            </td>
                        </tr>
                        <?php $total = $total + ($producto["precio"] * $producto["cantidad"]); ?>
                        <?php } ?>
                        <tr>
                            <td colspan="5" class="text-right">Sub-Total</td>
                            <td class="text-center"><?php echo number_format($total,2); ?> €</td>
                        </tr>
                        <tr>
                        <td colspan="5" class="text-right">Envío</td>
                            <td class="text-center"><?php echo $envio ?> €</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right"><strong>Total</strong></td>
                            <td class="text-center"><strong><?php echo $total + $envio ?> €</strong></td>
                        </tr>
                    </tbody>
                </table>
                <?php }else { ?>
                    <div class="alert alert-success text-center">
                        No hay productos en el carrito
                    </div>
                <?php } ?>
            </div>
        </div>
        <form action="pagar.php" method="post" class="col col-sm-12">
            <div class="col col-lg-12 mb-2">
                <div class="row">
                    <?php if(!empty($_SESSION["carrito"])){ ?>
                        <div class="col-lg-12">
                            <div class="alert alert-primary">
                                <div class="form-group">
                                    <label for="my-input">Correo de contacto:</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Por favor indique su correo" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Provincia:</label>
                                    <input type="text" id="province" name="province" class="form-control" placeholder="Por favor indique su provincia" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Localidad:</label>
                                    <input type="text" id="locality" name="locality" class="form-control" placeholder="Por favor indique su localidad" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Dirección:</label>
                                    <input type="text" id="address" name="address" class="form-control" placeholder="Por favor indique su dirección" required>
                                </div>
                                <small>Los productos se enviaran a la siguiente dirección</small>                                
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(empty($_SESSION["carrito"])){ ?>
                        <div class="col-sm-12">
                            <a href="index.php" role="button" class="btn btn-lg btn-block btn-light">Seguir Comprando</a>
                        </div>
                    <?php }else { ?>
                        <div class="col-md-6">
                            <a href="index.php" role="button" class="btn btn-lg btn-block btn-light">Seguir Comprando</a>
                        </div>
                    <?php } ?>
                    <?php if(!empty($_SESSION["carrito"])){ ?>
                        <div class="col-sm-12 col-md-6">
                            <button type="submit" name="btnAction" value="Pagar" class="btn btn-lg btn-block btn-primary text-uppercase">Realizar Pedido</button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include 'templates/pie.php';
?>