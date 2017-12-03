<?php session_start(); 

    if (isset($_SESSION['usuario'])) {
        require 'functions.php';

        $conexion = conexion();
        $id_evento = (int)$_GET['id'];

        if (empty($id_evento)) {
            header('Location: inicio.php');
        }

        $resultado = $conexion->query("SELECT * FROM eventos WHERE id = $id_evento");
        $resultado = $resultado->fetchAll();

        if ($resultado) {
            
        }
        else {
            header('Location: inicio.php');
        }

        $evento = $resultado[0];
        $timestamp = strtotime($evento['fecha']);

        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']; 

        $dia = date('d', $timestamp);
        $mes = date('m', $timestamp);
        $year = date('Y', $timestamp);

        $fecha = "$dia de " . $meses[$mes - 1] . " del $year";

        require 'views/evento.view.php';

    } else {
        header('Location: login.php');
    }

?>