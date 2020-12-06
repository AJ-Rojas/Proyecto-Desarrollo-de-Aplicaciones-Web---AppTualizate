<?php

$mensaje = "";

if(isset($_POST["btnAction"])){

    switch($_POST["btnAction"]){

        case "Agregar":

            if(is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                $id = openssl_decrypt($_POST["id"],COD,KEY);

            }

            if(openssl_decrypt($_POST["imagen"],COD,KEY)){
                $imagen = openssl_decrypt($_POST["imagen"],COD,KEY);
                
            }

            if(is_string(openssl_decrypt($_POST["name"],COD,KEY))){
                $nombre = openssl_decrypt($_POST["name"],COD,KEY);
                
            }

            if(is_string(openssl_decrypt($_POST["code"],COD,KEY))){
                $code = openssl_decrypt($_POST["code"],COD,KEY);
                
            }

            if(is_numeric(openssl_decrypt($_POST["precio"],COD,KEY))){
                $precio = openssl_decrypt($_POST["precio"],COD,KEY);
                
            }

            if(is_numeric(openssl_decrypt($_POST["cantidad"],COD,KEY))){
                $cantidad = openssl_decrypt($_POST["cantidad"],COD,KEY);
                
            }

        if(!isset($_SESSION["carrito"])){
            $producto = array(
                "id" => $id,
                "imagen" => $imagen,
                "name" => $nombre,
                "code" => $code,
                "precio" => $precio,
                "cantidad" => $cantidad
            );
            $_SESSION["carrito"][0] = $producto;

        } else {
            $numProductos = count($_SESSION["carrito"]);
            $producto = array(
                "id" => $id,
                "imagen" => $imagen,
                "name" => $nombre,
                "code" => $code,
                "precio" => $precio,
                "cantidad" => $cantidad
            );

            $_SESSION["carrito"][$numProductos] = $producto;

        }

            $mensaje = print_r($_SESSION, true);

        break;

        case "Eliminar":

            if(is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                $id = openssl_decrypt($_POST["id"],COD,KEY);

                foreach($_SESSION["carrito"] as $indice => $producto){
                    if($producto["id"] == $id){
                        unset($_SESSION["carrito"][$indice]);
                        echo "<script>alert('El producto ha sido eliminado')</script>";
                    }
                }
            }

        break;

    }

}

?>