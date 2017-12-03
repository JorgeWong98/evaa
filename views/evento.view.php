<?php require('header.php'); ?>

    <div class="container">
        <div class="row nombre">
			<div class="col-md-12">
				<h2 class="titulo"><?php echo $evento['nombre']; ?> - Instituo Tecnologico de Nogales</h2>
                <hr>
			</div>
		</div>
        <div class="row infor">
            <div class="col-md-12 info">
                <a class="icono"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $fecha ?></a>
                <a class="icono"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $evento['locacion'] ?></a>
                <a class="icono"><i class="fa fa-chevron-right" aria-hidden="true"></i><?php echo $evento['creditos']; ?> Credito(s)</a>
                <a class="icono"><i class="fa fa-users" aria-hidden="true"></i>Organizador(es): <?php echo $evento['organizadores']; ?></a>
            </div>
        </div>
        <div class="row article">
           <div class="col-md-12">
                <?php echo $evento['descripcion'];?>
           </div>
        </div>
    </div>

<?php require('footer.php'); ?>