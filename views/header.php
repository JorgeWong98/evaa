<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="Plugins/ckeditor/ckeditor.js"></script>
	<script src="Plugins/ckfinder/ckfinder.js"></script>
	<script src="https://use.fontawesome.com/3f2f76ce22.js"></script> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<title>EV.A.A.</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row contenedor_logo_menu">
				<div class="logo col-xs-12 col-md-6">
					<a href="inicio.php">EV.A.A.</a>
				</div>
				<div class="menu col-xs-12 col-md-6">
					<a href="inicio.php">Inicio</a>
					
					<a href="#" data-toggle="modal" data-target="#exampleModal">Contacto</a>
					<?php if (isset($_SESSION['usuario'])) : ?>
						<a href="cerrar.php">Cerrar Session</a>
					<?php else : ?>
						<a href="#">Precios</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contaco EV.A.A.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Correo: contacto@evaa.com</p>
		<p>Institucion: Instituto Tecnologico de Nogales</p>
		<p>Desarrollador web: Wong Avila Jorge Luis <br>
		Diseñador grafico: Reynoso Martinez Ricardo <br>
		Desarrollador mobil: Alvarez Sinohui Jose
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	</header>