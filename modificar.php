<?php

    session_start();

    if (!isset($_SESSION['id_usuario'])) {
        header("Location: index.php");
    }

    include("modelo/modCuenta.php");

    $nombre_usuario = $_SESSION['nombre_usuario'];
    $id_usuario = $_SESSION['id_usuario'];

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
        <h1 class="title">Modificar</h1>
        <p>Haga click en la cuenta a modificar</p>
    </nav>
    <div class="cuentas">
        <?php 
        $count = 0;
         if ($num>0) {
             while ($row = $resultado->fetch_assoc()) {
                 $id_cuenta = $row['id_cuenta'];
                 $nombre = $row['nombre'];
                 $valor = $row['valor'];
                 $fecha = $row['fecha'];
                 //echo "id cuenta: '$id_cuenta', nombre: '$nombre', valor: '$valor', ";
                 ?>
                 <form action="modificarCuentas.php" class="cuenta" method="get">
                    <button type="submit" class="invisible">
                        <div class="id"><?php echo $id_cuenta; ?></div>
                        <div class="nombre"><?php echo $nombre; ?></div>
                        <div class="valor">$ <?php echo $valor; ?></div>
                        <div class="fecha"><?php 
                        if ($fecha == "0000-00-00") {
                            echo "Sin fecha";
                        }else{
                            echo $fecha ;
                        }
                        ?></div>
                    </button>
                    <form method="post">
                        <div class="boton" type="submit" id="idcu" value="<?php echo $id_cuenta ?>" 
                        onclick=
                        "if(confirmarElim()){
                            let idcu = this.getAttribute('value');
                            document.getElementById('idc').value = idcu;
                            console.log(document.getElementById('idc').value);
                            
                            }else{ let idcu = -1;}"
                        > 
                        <a  id="eliminar" name="cuenta">Eliminar</a>
                        <input type="submit" id="idc" name="idcu"class=" invisible" value="" action="modelo/elimCuenta.php">
                        <?php 
                        //$_SESSION['id_cuenta'] = $_POST['idcu']

                        ?>
                        </div>
                    </form>
                </form>
                <?php
                $count += 1;
            }
             $_SESSION['id_cuenta'] = $id_cuenta;
        }else{
            ?>
    <div></div>
    <div></div>
    <div class="noCuentas">No hay cuentas asociadas al usuario <?php echo $nombre_usuario;?></div>
    <div></div>
    <div></div>
</div>
    <?php
            }
        ?>
    
    <script src="js/eliminar.js"></script>
</body>
</html>