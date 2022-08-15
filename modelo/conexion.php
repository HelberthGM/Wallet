<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "datausuarios";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion){
    echo "<script>console.log('Conectado correctamente con la base de datos' );</script>";
}else {
    echo "<script>console.log('No se pudo conectar con la base de datos' );</script>";
}

?>