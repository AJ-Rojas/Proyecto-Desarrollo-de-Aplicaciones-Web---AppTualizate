<?php 
include 'templates/cabecera.php';
?>

      <!-- Fin Navbar -->
      <div class="container md-5 pt-5">
    <div class="row">
        <div class="col md-5 pt-5">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contacta con nosotros
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Destinatario</label>
                            <input type="email" class="form-control" id="destinatario" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" class="form-control" id="asunto" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" id="enviar" class="btn btn-primary text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 md-5 pt-5">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> DIRECCIÓN</div>
                <div class="card-body">
                    <p>Calle Iglesia 11</p>
                    <p>41750 Los Molares</p>
                    <p>Sevilla</p>
                    <p>Email : aapptualizate@gmail.com</p>
                    <p>Tel. +34 123 456 789</p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
include 'templates/pie.php';
?>