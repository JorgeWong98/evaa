<?php session_start();

require 'functions.php';

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];

	$conexion = conexion();

	$consulta = $conexion->prepare('
		SELECT * FROM administradores WHERE usuario = :usuario AND clave = :pass
		');

	$consulta->execute(array(
		':usuario' => $usuario,
		':pass' => $password
	));

	$resultado = $consulta->fetch();
	
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	}
	else {
		$errores = "Usuario y/o contraseña incorrectos";
	}
}

require ('views/login.view.php');

 ?>