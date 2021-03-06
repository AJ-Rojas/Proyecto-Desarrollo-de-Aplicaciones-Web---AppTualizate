<?php 


session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: ../index.php");
        exit;
    }

    include 'config.php';
    
    $link = mysqli_connect("localhost", "root", "", "apptualizate");

$email = $password = "";
$email_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty(trim($_POST["email"]))){
            $email_err = "Inserte correo electrónico";
        } else {
            $email = trim($_POST["email"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_err = "Inserte contraseña";
        } else {
            $password = trim($_POST["password"]);
        }

        if(empty($email_err) && empty($password_err)){
            $sql = "SELECT id, name, email, password FROM usuarios WHERE email = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = $email;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt, $id, $name, $email, $hashed_password);

                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["name"] = $name;
                                $_SESSION["email"] = $email;

                                header("location: ../index.php");
                            } else {
                                $password_err = "La contraseña es incorrecta";
                            }
                        }
                    } else {
                        $email_err = "No se ha encontrado la cuenta con ese email";
                    }
                } else {
                    echo "Lo sentimos! Algo ha ido mal. Por favor intentelo más tarde";
                }

                mysqli_stmt_close($stmt);
            }
        }

        mysqli_close($link);

    }

?>