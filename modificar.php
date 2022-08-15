<?php

    session_start();

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");
    }
    $nombre_usuario = $_SESSION['nombre_usuario']

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="shortcut icon" href="images/iconoIndex.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/modificar.css">
</head>
<body>
    <nav>
        <div class="devolver"><a href="inicio.php" class="boton atras">Atras</a></div>
        <h1>Modificar</h1>
    </nav>
    <div class="cuentas">
        <form action="agregar.php" class="cuenta">
            <button type="submit" class="invisible">
                <div class="nombre">Nombre</div>
                <div class="valor">$ Valor</div>
                <div class="fecha">Fecha</div>
                </button>
                <div class="boton" onclick="confirmarElim()">
                    <a href="inicio.php" id="eliminar">Eliminar</a>
                </div>
            </form>

        <form action="agregar.php" class="cuenta">
            <button type="submit" class="invisible" >
                <div class="nombre">Nombre</div>
                <div class="valor">$ Valor</div>
                <div class="fecha">Fecha</div>
                </button>
                <div class="boton" onclick="confirmarElim()">
                    <a href="inicio.php" id="eliminar">Eliminar</a>
                </div>
            </form>

        <form action="agregar.php" class="cuenta">
            <button type="submit" class="invisible">
                <div class="nombre">Nombre</div>
                <div class="valor">$ Valor</div>
                <div class="fecha">Fecha</div>
                </button>
                <div class="boton" onclick="confirmarElim()">
                    <a href="inicio.php" id="eliminar">Eliminar</a>
                </div>
            </form>
    </div>
    
    <script src="js/eliminar.js"></script>
</body>
</html>