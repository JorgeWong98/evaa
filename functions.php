<?php 

function conexion(){
	try {
		$conexion = new PDO('mysql:host=sql3.freemysqlhosting.net;dbname=sql3208765', 'sql3208765', 'KMKaYidIkp');
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function fechaLarga($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp);
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes-1] . " del $year";
	return $fecha;
}

function fechaCorta($fecha){
	$timestamp = strtotime($fecha);

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp);
	$year = date('Y', $timestamp);
	$hora = date('G', $timestamp);
	$minuto = date('i', $timestamp);
	$meridiano = "";

	if ($hora <= 11) {
		$meridiano = "A.M.";
	}
	else {
		$meridiano = "P.M.";
		$hora = $hora - 12;
	}

	$fecha = "$dia/$mes/$year - $hora:$minuto $meridiano";
	return $fecha;
}

 ?>