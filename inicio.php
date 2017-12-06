<?php session_start();

	require 'functions.php';
	require 'admin/config.php';

	if (isset($_SESSION['usuario'])) {
		$conexion = conexion($bd_config);
		$sentencia = $conexion->prepare("SELECT * FROM eventos");
		$sentencia->execute();
		$s = $sentencia->fetchAll(); 

		require 'views/inicio.view.php';
	}
	else{
		header('Location: index.php');
	}
 ?>