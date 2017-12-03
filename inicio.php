<?php session_start();

	require 'functions.php';


	if (isset($_SESSION['usuario'])) {
		$conexion = conexion();
		$sentencia = $conexion->prepare("SELECT * FROM eventos");
		$sentencia->execute();
		$s = $sentencia->fetchAll(); 

		//var_dump($s);



		require 'views/inicio.view.php';

		/*if (!$s) {
		//Si no hay posts
		}*/

	}
	else{
		header('Location: index.php');
	}

	
	
	

 ?>