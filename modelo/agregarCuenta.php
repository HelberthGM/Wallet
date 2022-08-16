<?php

    //session_start();
    include("modelo/conexion.php");

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");
    }
    // $nombre_usuario = $_SESSION['nombre_usuario'];
    // $id_usuario = $_SESSION['id_usuario'];

    if (isset($_POST['argCuenta'])) {
        if(strlen($_POST['txtNomCuenta']) >= 1 && strlen($_POST['txtVlrCuenta']) >= 1) {
            $nombre = trim($_POST['txtNomCuenta']);
            $valor = trim($_POST['txtVlrCuenta']);
            $tipo = trim($_POST['cbxTipos']);
            $fecha = trim($_POST['fecha']);
            $color = trim($_POST['color']);
    
            echo "cuentas: '$numero_cuentas'";
            $sql = "INSERT INTO `tb_cuenta`( `id_usuario`,`nombre`, `valor`, `color`, `tipo`, `fecha`) VALUES ('$id_usuario','$nombre','$valor','$color','$tipo','$fecha')";
            $resultado = mysqli_query($conexion, $sql);

            $numCuentas = "SELECT `id_cuenta`, `nombre`, `valor`, `color`, `tipo`, `fecha` FROM `tb_cuenta` WHERE `id_usuario`='$id_usuario';";
            $resultadoConsulta = $conexion->query($numCuentas);
            $num = $resultadoConsulta->num_rows;
            //echo "cuentas despues de sumar: '$numero_cuentas', cuentasNUm = '$num'";
            $sqlUs = "UPDATE `tb_usuario` SET `numero_cuentas` = '$num' WHERE `tb_usuario`.`id_usuario` = '$id_usuario'";
            $resultadoUs = mysqli_query($conexion, $sqlUs);

            if ($resultado && $resultadoUs) {
                 if ($_POST) {
                        echo "Cuenta agregada correctamente";
                         header("Location: ./inicio.php");
                 }
             }
                 ?>
               <?php
             }else {
                 ?>
                  <h3 class='bad' style="color: white;">Ups ha ocurrido un error</h3>
              <?php
             }
        }else {
            ?>
            <h3 class='bad' style="color: white;">Por favor completa los campos</h3>
           <?php
        }
    
?>