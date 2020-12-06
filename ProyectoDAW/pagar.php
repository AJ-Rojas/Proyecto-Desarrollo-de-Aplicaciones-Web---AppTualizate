<?php 
  include './servidor/config.php';
  include './servidor/conexion.php';
  include './servidor/carrito.php';
  include './templates/cabecera.php';
?>

<?php 

    if($_POST){

        $total = 0;
        $idCliente = $_SESSION["id"];
        $correo = $_POST["email"];
        $provincia = $_POST["province"];
        $localidad = $_POST["locality"];
        $direccion = $_POST["address"];


        foreach($_SESSION["carrito"] as $indice => $producto){

            $total = $total + ($producto["precio"] * $producto["cantidad"]);

        }

        $sentencia = $pdo->prepare("INSERT INTO `orders` (`id`, `user_id`, `province`, `locality`, `address`, `price`, `status`, `date`)
                        VALUES (NULL, :idCliente, :province, :locality, :address, :total, 'confirmado', NOW());");

        $sentencia->bindParam(":idCliente", $idCliente);
        $sentencia->bindParam(":province", $provincia);
        $sentencia->bindParam(":locality", $localidad);
        $sentencia->bindParam(":address", $direccion);
        $sentencia->bindParam(":total", $total);

        $sentencia->execute();
        $idVenta = $pdo->lastInsertId();

        foreach($_SESSION["carrito"] as $indice => $producto){

        $sentencia = $pdo->prepare("INSERT INTO `saledetails` (`id`, `order_id`, `id_product`, `unitprice`, `quantity`)
                        VALUES (NULL, :idVenta, :idProducto, :precioUnitario, :cantidad);"); 

        $sentencia->bindParam(":idVenta", $idVenta);
        $sentencia->bindParam(":idProducto", $producto["id"]);
        $sentencia->bindParam(":precioUnitario", $producto["precio"]);
        $sentencia->bindParam(":cantidad", $producto["cantidad"]);

        $sentencia->execute();
        
        }

    }

?>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR"></script>

<style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
</style>

<div class="jumbotron text-center pt-5 mt-5">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead"> Estas a punto de pagar la cantidad de:
        <h4><?php echo number_format($total,2); ?> €</h4>
        <p class="lead"> Seleccione el método de pago:
        <div class="container">
            <div class="row">
                <div class="col align-self-center" id="paypal-button-container"></div>
            </div>
        </div>
    </p>
        <strong>(Para cualquier duda contacte con nosotros al siguiente correo: aapptualizate@gmail.com)</strong>
</div>
<script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $total; ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    window.location = "verificador.php";
                });
            }


        }).render('#paypal-button-container');
    </script>
<?php
  include 'templates/pie.php';
?>