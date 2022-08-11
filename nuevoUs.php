<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="shortcut icon" href="images/iconoIndex.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/nuevoUs.css">
</head>
<body>
    <a href="index.php" class="volver" >Volver</a>
    <section class="login">
        <div id="logo">
            <img src="images/Logo.webp" alt="logo">
        </div>
        <p>Ingrese sus datos para registrarse</p>
        <!-- action="inicio.html" -->
        <form method="POST">
        <div id="nombre">
            <p> Email:<input name="email" type="email" placeholder="ejemplo@email.com" required></p>
         </div>
        <div id="usuario">
           <p>Nombre de usuario:<input name="nombre" type="text" placeholder="Nombre de usuario..." required></p>
        </div>
        <div id="contraseña">
           <p>Contraseña:<input type="password" name="contrasena" id="contrasena" placeholder="Contraseña..." required></p>
        </div>
            <div class="boton">
                <button type="submit" id="boton" name="registro">Crear usuario</button>
            </div>
          </form>
    </section>
    <?php
        include("registrar.php");
    ?>
</body>
</html>
