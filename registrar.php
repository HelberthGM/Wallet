<?php

include("conexion.php");
/*
if($conex){
    echo "Todo bien, todo correcto";
} 
*/
if (isset($_POST['registro'])) {
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1){
        $email = trim($_POST['email']);
        $nombre = trim($_POST['nombre']);
        $contrasena = trim($_POST['contrasena']);

        $consulta = "INSERT INTO `tb_usuario`(`nombre_usuario`, `correo`, `contrasena`, `numero_cuentas`)
        VALUES ('$nombre','$email',SHA1('$contrasena'),0)";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
           ?>
           <h3 class='ok' style="color: white;margin-bottom: 1vh;text-decoration: none;">Te has instricto correctamente<br> 
                <a href="inicio.php" style="text-decoration: none;color: white;">Estrena tu cuenta ¡Click aqui!</a>
            </h3>
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
    }

?>