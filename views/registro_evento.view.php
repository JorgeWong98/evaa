<?php require('header.php') ; ?>

	<div class="container">
	
		<section class="main row">
			<article class="registro col-md-12">
				<h1>Registro de nuevo evento</h1>

				<hr class="separator">
				<form action="registro_evento.php" method="POST">
					<div class="row">
						<div class="form-group col-md-8 input-group-lg">
							<label id="name" for="nombre">Ingrese el nombre del evento</label>
							<input required name="nombre" class="form-control" id="nombre" type="text" placeholder="Nombre del evento">
						</div>
					</div>

					<hr>

					<div class="divi row">
						<div class="grupo form-group">
							<label>Fecha </label>
							<input required type="date" name="fecha" value="<?php echo date("Y-m-d H:i:s");?>" min="<?php echo date("Y-m-d");?>">
						</div>
						<div class="grupo form-group">
							<label>Hora </label>
							<input required type="time" name="hora">
						</div>
						<div class="grupo form-group">
							<label for="location">Locación </label>
							<input required type="text" cols="10" name="locacion" id="location">
						</div>
					</div>

					<div class="divi row">
						<div class="grupo">
							<label for="creditos">Creditos </label>
							<select name="creditos" class="custom-select">
							 	<option value="0" selected>0</option>
							  	<option value="1">1</option>
							  	<option value="2">2</option>
							  	<option value="3">3</option>
							</select>
						</div>
						<div class="grupo form-group">
							<label for="organizadores">Organizadores </label>
							<input required type="text" name="organizadores" id="organizadores">
						</div>
					</div>

					<hr class="linea">

					<div class="row">
					  <div class="grupo form-group input-group-lg col-md-12">
					    <label>Extracto</label>
					    <input required name="extracto" type="text" class="form-control" placeholder="Ej: Evento realizado para fomentar una mentalidad emprendedora con motivo de la semana del emprendedor">
					    <small class="form-text text-muted">Este texto es el que muestra a grandes rasgos de que trata el evento en cuestion.</small>
					  </div>
					</div>

	  				<hr class="linea">

					<div class="row">
						<div class="col-md-12">
							<textarea name="editor" id="editor" cols="30" rows="10" max-heigth="500"></textarea>

							<?php if (!empty($errores)) : ?>
								<div class="errores alert alert-danger" role="alert">
									<p><?php echo "Hubo errores en el formulario: <br>" . $errores; ?></p>
								</div>
							<?php endif; ?>

							<button data-toggle="modal" data-target="#exampleModal" type="submit" class="btn btn-secondary enviar btn-lg">Aceptar</button>

							
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Evento agregado correctamente</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>Woohoo, you're reading this text in a modal!</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
										</div>
									</div>
								</div>
						  	</div>
							
						</div>
					</div>
				</form>
			</article>
		</section>

	</div>

	<script type="text/javascript">
		window.onload = function(){
			editor = CKEDITOR.replace("editor");
			CKFinder.setupCKEditor(editor, 'http://localhost/plugins/ckfinder');
		}
	</script>


<?php require('footer.php'); ?> 
