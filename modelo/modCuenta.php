<?php

    include("modelo/conexion.php");

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");
    }

    $nombre_usuario = $_SESSION['nombre_usuario'];
    $id_usuario = $_SESSION['id_usuario'];
    $numero_cuentas = $_SESSION['numero_cuentas'];

    $numCuentas = "SELECT `id_cuenta`, `nombre`, `valor`, `color`, `tipo`, `fecha` FROM `tb_cuenta` WHERE `id_usuario`='$id_usuario';";
    $resultado = $conexion->query($numCuentas);
    $num = $resultado->num_rows;
    
?>