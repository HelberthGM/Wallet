<?php

    session_start();

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");  
    }

    $usuario = $_SESSION['id_usuario'];
    $cuenta = $_SESSION['id_cuenta'];
    echo "ID del usuario con cuenta a borrar: '$usuario', id_cuenta: '$cuenta'";
    //header('../inicio.php');

?>