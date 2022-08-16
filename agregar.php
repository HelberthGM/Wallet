<?php

    session_start();

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");
    }
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $id_usuario = $_SESSION['id_usuario'];
    $numero_cuentas = $_SESSION['numero_cuentas'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar cuenta</title>
    <link rel="shortcut icon" href="images/iconoIndex.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/agregar.css">
</head>
<body>
    <a href="inicio.php" class="boton volver" >Volver</a>
    <section>
        <h1>Informacion de la cuenta</h1>
        <form method="post">
        <div id="nombre"><p> Nombre de Cuenta:<input type="text" placeholder="Nombre de cuenta..." name="txtNomCuenta" required></p></div>
        <div id="valor"><p> Valor de cuenta:<input type="number" placeholder="50000..." name="txtVlrCuenta" required></p></div>
        <div id="tipo">
            <label for="tipos">Tipo de cuenta:</label>
             <select id="tipos" name="cbxTipos">
             <option value="cuenta">Cuenta</option>
             <option value="gasto">Gasto</option>
             <option value="ingreso">Ingreso</option>
           </select>
        </div>
        <div>
            <p>Fecha:<input type="date" name="fecha" id="fecha"></p>
        </div>
        <p> Color:<input type="color"  name="color" id="color"></p>
        <button type="submit" class="boton" name="argCuenta">Guardar cambios</button>
        </form>
    </section>
    <?php
    include("modelo/agregarCuenta.php");
    ?>
</body>
</html>