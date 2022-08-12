<?php

    require "conexion.php";


    if ($_POST) {
        $nombre_usuario = $_POST['nombre_usuario'];
        $txtContrasena = $_POST['txtContrasena'];
        $sql = "SELECT id_usuario, nombre_usuario, contrasena,correo, numero_cuentas FROM tb_usuario WHERE nombre_usuario='$nombre_usuario'";
        $resultado = $conexion->query($sql);
        $num = $resultado->num_rows;

        if ($num>0) {
            $row = $resultado->fetch_assoc();
            $password_bd = $row['contrasena'];
            $pass_c = sha1($txtContrasena);

            if ($password_bd == $pass_c) {
                
                $_SESSION['nombre_usuario'] = $row['nombre_usuario'];
                $_SESSION['id_usuario'] = $row['id_usuario'];
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['numero_cuentas'] = $row['numero_cuentas'];
                header("Location: ./inicio.html");
            }else{
                echo '<script language="javascript">alert("Error, Contraseña incorrecta, por favor intente de nuevo");</script>';
                //echo "la contraseña no coincide, $password_bd != $txtContrasena ";
            }
        }else {
            echo '<script language="javascript">alert("Error, El usuario no esta registrado");"</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="shortcut icon" href="images/iconoIndex.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <section class="login">
        <div id="logo">
            <img src="images/Logo.webp" alt="logo">
        </div>
        <p>¡Bienvenido/a!</p>
         <!-- action="inicio.html"-->
       <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
        <div id="usuario">
           <p>Usuario:<input type="text" placeholder="Nombre de usuario..." name="nombre_usuario" required></p>
        </div>
        <div id="contraseña">
           <p>Contraseña:<input type="password" id="contraseña" name="txtContrasena" placeholder="Contraseña..." required></p>
        </div>
        
            <div class="boton">
                <button type="submit" id="boton" name="submit">Iniciar sesión</button>
            </div>
          </form>
    </section>
    <a href="nuevoUs.php" id="boton" >Crear cuenta</a>
</body>
</html>
