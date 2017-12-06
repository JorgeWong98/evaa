<?php require('header.php') ; ?>

	<div class="container">
		<div class="row encabezado">
			<div class="col-md-12">
				<h2 class="titulo">Eventos para el Instituto Tecnologico de Nogales 2017</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 eventos">
				<div class="row">
					<?php foreach ($s as $post) : ?>
						<div class="col-md-3 prueba">
							<div class="hola">
								<a href="evento.php?id=<?php echo $post['id']; ?>" class="titulo"><?php echo $post['nombre']; ?></a>
								<div class="banner">
									<a href="editar.php?id=<?php echo $post['id']; ?>" class="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								</div>
								<hr class="linea">
								<p class="info"><?php echo $post['extracto'];?></p>
							</div>
							<div class="fecha-div">
								<p class="fecha">Fecha: <?php echo fechaCorta($post['fecha']);?></p>
							</div>
							
						</div>
					<?php endforeach; ?>
					<div class="col-md-3 agrega" onclick="location.href='registro_evento.php';" style="cursor:pointer;" >
						<div class="icono">
							<i class="fa fa-file-text" id="x" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require('footer.php') ; ?>