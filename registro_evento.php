<?php session_start();

if (isset($_SESSION['usuario'])) {

	require 'admin/config.php';
	require 'functions.php';
	$errores = '';
	$acceso = false;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = $_POST['nombre'];
		$fecha = $_POST['fecha'];
		$hora = $_POST['hora'];
		$locacion = htmlspecialchars($_POST['locacion']);
		$extracto = $_POST['extracto'];
		$creditos = $_POST['creditos'];
		$texto = $_POST['editor'];
		$organizadores = $_POST['organizadores'];

		if (!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		}
		else {
			$errores .= '~ No ingresaste el nombre del evento. <br>';
		}

		if (strlen($extracto) > 200) {
			$errores .= '~ Solo estan permitidos hasta 200 caracteres en el extracto. <br>';
		}

		if (!empty($organizadores)) {
			$organizadores = trim($organizadores);
			$organizadores = filter_var($organizadores, FILTER_SANITIZE_STRING);
		}
		else {
			$errores .= '~ No ingresaste el nombre de los organizadores del evento. <br>';
		}
		

		if (!empty($locacion)) {
			$locacion = trim($locacion);
			$locacion = filter_var($locacion, FILTER_SANITIZE_STRING);
		}
		else {
			$errores .= '~ No ingresaste la locacion. <br>';
		}

		if (strlen($fecha) == 10) {
			$fechaFinal = $fecha . "T" . $hora;
			$new_date = date('Y-m-d H:i:s', strtotime($fechaFinal));
		}
		else {
			$errores .= '~ Fecha del evento incorrecta. <br>';
		}

		if (empty($errores)) {
			try {
				$conexion = conexion($bd_config);

				$consulta = $conexion->prepare('
				INSERT INTO eventos (nombre, fecha, extracto, descripcion, creditos, locacion, organizadores)
				VALUES (:n, :f, :e, :d, :c, :l, :o )
				');

				$consulta->execute(array(
					':n' => $nombre,
					':f' => $fechaFinal,
					':e' => $extracto,
					':d' => $texto,
					':c' => $creditos,
					':l' => $locacion,
					':o' => $organizadores
				));

				$resultado = $consulta->fetch();
				$acceso = true;
			} catch (Exception $e) {
				echo "Error: " .$e->getMessage();
			}

			
		}

	}
		require 'views/registro_evento.view.php';
	
}
else {
	header('Location: login.php');
}

 ?>