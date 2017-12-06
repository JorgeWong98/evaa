<?php session_start();
    require 'admin/config.php';
    require 'functions.php';
    
    if (isset($_SESSION['usuario'])) {
       
    }
    else {
        header ('Location: ../error.php');
    }

    $id_evento = (int)$_GET['id'];
    $id = "";

    $conexion = conexion($bd_config);
    if (!$conexion) {
        header ('Location: ../error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $titulo = $_POST['nombre'];
        $extracto = $_POST['extracto'];
        $texto = $_POST['editor'];
        $organizadores = $_POST['organizadores'];
        $locacion = $_POST['locacion'];
        $creditos = $_POST['creditos'];
        $ide = $_POST['id'];

        $consulta = $conexion->prepare(
            'UPDATE eventos SET nombre = :n, extracto = :e, descripcion = :d,
             locacion = :l, organizadores = :o, creditos = :c WHERE id = :id'
        );

        $consulta->execute(array(
            ':n' => $titulo,
            ':e' => $extracto,
            ':d' => $texto,
            ':l' => $locacion,
            ':o' => $organizadores,
            ':c' => $creditos,
            ':id' => $ide
        ));

        header('Location: index.php');

    }
    else {

        if (empty($id_evento)) {
            header ('Location: index.php');
        }

        $resultado = $conexion->query("SELECT * FROM eventos WHERE id = $id_evento");
        $resultado = $resultado->fetchAll();

        
        if (!$resultado) {
            header ('Location: index.php');
        }

        $evento = $resultado[0];
        $id = $evento['id'];

    }

    require 'views/editar.view.php'
?>