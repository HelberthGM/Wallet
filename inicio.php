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
    <title>Inicio</title>
    <link rel="shortcut icon" href="images/iconoIndex.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/inicio.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
    <body>
        <h1>Lista de cuentas - <?php echo $nombre_usuario; ?></h1>
    <header>
        <article id="ahorro">
            <div class="letra">Cuenta de ahorros</div>
            <div>$ 2 000 000</div>
        </article>
        <article id="efectivo">
            <div class="letra">Efectivo</div>
            <div>$ 1 200 000</div>
        </article>
        <article id="credito">
            <div class="letra">Tarjeta de credito</div>
            <div>$ 10 500 000</div>
        </article>
        <section id="menu">
            <ul id="menu-pri">
                <li><a href="">Modificar cuentas</a>
                    <ul>
                        <li><a href="agregar.php">Agregar</a></li>
                        <li id="mod"><a href="modificar.php">Modificar/Eliminar</a></li>
                    </ul>
                </li>
            </ul> 
            <button id="salir"> <a href="modelo/logout.php">Cerrar sesión</a></button>
            </section>
    </header>
    <section>
        <div id="areaGraf" style="position: relative; height:32vh; width:29vw" >
                <canvas id="myChartDona" style="background-color: white"></canvas>
        </div>
    
    <aside>
        <h1>Resumen de gastos</h1>
        <div class="gastos">
            <div class="gasto" id="comida">
                <div class="letra">Comida</div>
                <div>$ 873 300</div>
            </div>
            <div class="gasto" id="arriendo">
                <div class="letra">Arriendo</div>
                <div>$ 404 700</div>
            </div>
            <div class="gasto" id="servicios">
                <div class="letra">Servicios</div>
                <div>$ 191 700</div>
            </div>
            <div class="gasto" id="gasolina">
                <div class="letra">Gasolina</div>
                <div>$ 660 300</div>
            </div>
        </div>
    </aside>
</section>
    <div class="graficas">
        <div id="areaGraf" style="position: relative; height:52vh; width:49vw">
        <canvas id="myChart" style="background-color: white" ></canvas>
        </div>
        <div id="areaGraf" style="position: relative; height:52vh; width:49vw" id="borde">
            <canvas id="myChart1" style="background-color: white"  ></canvas>
            </div>
    </div>
    <script src="js/graficas.js"></script>
</body>
</html>
