<?php require('header.php') ; ?>

	<div class="container">
	
		<section class="main row">
			<article class="registro col-md-12">
				<h1>Editar evento</h1>

                <hr class="separator">
                
				<form action="editar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $evento['id'];?>">
					<div class="row">
						<div class="form-group col-md-8 input-group-lg">
							<label for="nombre">Nombre del evento</label>
							<input required name="nombre" class="form-control" type="text" value="<?php echo $evento['nombre']; ?>">
						</div>
                    </div>
                    
					<hr>

					<div class="divi row">
						<div class="grupo form-group">
							<label>Fecha </label>
							<input disabled type="date" name="fecha" value="<?php echo date("Y-m-d H:i:s");?>" min="<?php echo date("Y-m-d");?>">
						</div>
						<div class="grupo form-group">
							<label>Hora </label>
							<input disabled type="time" name="hora">
						</div>
						<div class="grupo form-group">
							<label for="location">Locación </label>
							<input required type="text" cols="10" name="locacion" value="<?php echo $evento['locacion']; ?>" id="location">
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
							<input required type="text" name="organizadores" value="<?php echo $evento['organizadores']; ?>" id="organizadores">
						</div>
					</div>

					<hr class="linea">

					<div class="row">
					  <div class="grupo form-group input-group-lg col-md-12">
					    <label>Extracto</label>
					    <input name="extracto" type="text" class="form-control" value="<?php echo $evento['extracto']; ?>">
					    <small class="form-text text-muted">Este texto es el que muestra a grandes rasgos de que trata el evento en cuestion.</small>
					  </div>
					</div>

	  				<hr class="linea">

					<div class="row">
						<div class="col-md-12">
							<textarea name="editor" id="editor" cols="30" rows="10" max-heigth="500">
                            <?php echo $evento['descripcion']; ?>
                            </textarea>

							<?php if (!empty($errores)) : ?>
								<div class="errores alert alert-danger" role="alert">
									<p><?php echo "Hubo errores en el formulario: <br>" . $errores; ?></p>
								</div>
							<?php endif; ?>

							<button type="submit" class="btn btn-secondary enviar btn-lg">Actualizar</button>
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
