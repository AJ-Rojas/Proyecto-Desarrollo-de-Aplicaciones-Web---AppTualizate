<?php 
require_once "./servidor/registro.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppTualizate</title>
    <link rel="icon" href="./img/logo.png">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
            <div class="brand-logo text-center">
                <a href="index.php"><img src="./img/logoPrincipal.png" class="rounded" alt="..."></a>
            </div>
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Iniciar Sesión</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Crear Cuenta</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="./servidor/iniciarSesion.php" method="post" role="form" style="display: block;">
									<div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                        <span class="help-block"><?php echo $email_err; ?></span>
									</div>
									<div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                        <span class="alert-danger"><?php echo $password_err; ?></span>
                                        
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recordarme</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar Sesión">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="" tabindex="5" class="forgot-password">Olvidaste tú contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
                                <form id="register-form" action="./servidor/registro.php" method="post" role="form" style="display: none;">
									<div class="form-group">
                                        <label>Nombre</label>
										<input type="text" name="name" id="create_name" tabindex="1" class="form-control" value="">
									</div>
									<div class="form-group">
                                        <label>Apellidos</label>
										<input type="text" name="surname" id="create_surname" tabindex="1" class="form-control" value="">
									</div>
									<div class="form-group">
                                        <label>Numero Teléfono</label>
										<input type="text" pattern="[0-9]{9}" name="telephone" id="create_telephone" tabindex="2" class="form-control">
									</div>
									<div class="form-group">
                                        <label>Dirección</label>
										<input type="text" name="address" id="create_address" tabindex="2" class="form-control">
                                    </div>
                                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                        <label>Correo Electrónico</label>
                                        <input type="email" name="create_email" id="create_email" tabindex="2" class="form-control">
                                        <span class="help-block"><?php echo $email_err; ?></span>
                                    </div>
                                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                        <label>Contraseña</label>
                                        <input type="password" name="create_password" id="create_password" tabindex="2" class="form-control">
                                        <span class="help-block"><?php echo $password_err; ?></span>
                                    </div>
                                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                        <label>Confirma Contraseña</label>
                                        <input type="password" name="confirm_password" id="confirm_password" tabindex="2" class="form-control">
                                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear Cuenta">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
    $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});

</script>
</body>
</html>