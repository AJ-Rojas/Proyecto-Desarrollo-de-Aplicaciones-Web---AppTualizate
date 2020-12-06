<?php

include 'config.php';

$link = mysqli_connect("localhost", "root", "", "apptualizate");

$name = "create_name";
$surname = "create_surname";
$telephone = "create_telephone";
$address = "create_address";
$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

 if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["create_email"]))){
        $email_err = "Por favor inserte un Correo Electrónico.";
    } else {
        $sql = "SELECT id FROM usuarios WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = trim($_POST["create_email"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Este email ya existe.";
                } else {
                    $email = trim($_POST["create_email"]);
                }
            } else {
                echo "Lo sentimos! Algo ha ido mal. Por favor intentelo más tarde.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["create_password"]))){
        $password_err = "Por favor inserte una Contraseña.";
    } elseif(strlen(trim($_POST["create_password"])) < 8){
        $password_err = "La contraseña debe contener al menos 8 carácteres";
    } else {
        $password = trim($_POST["create_password"]);
    }

    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor confirma la contraseña";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Las contraseñas no coinciden";
        }
    }

    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO usuarios (name, surname, telephone, address, email, password) VALUES (?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_surname, $param_telephone, $param_address, $param_email, $param_password);

            $param_name = "$_POST[name]";
            $param_surname = "$_POST[surname]";
            $param_telephone = "$_POST[telephone]";
            $param_address = "$_POST[address]";
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if(mysqli_stmt_execute($stmt)){
                header("location: ../login.php");
            } else {
                echo "Algo ha ocurrido. Por favor intentelo más tarde";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($link);

 }

?>