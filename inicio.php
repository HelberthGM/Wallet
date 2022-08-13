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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.js" integrity="sha512-/MqITtqQfmjLnDtBC8yxrsERbn3dvqyxtc1B/3x57xp+J3srVBcgyr9VXgDj8BYScxSJ9MauIMY7F9Fr2TJHkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <button id="salir"> <a href="logout.php">Cerrar sesión</a></button>
            </section>
    </header>
    <section>
        <!-- DONUT CHART BLOCK (LEFT-CONTAINER) --> 
    <div class="donut-chart-block block"> 
        <h1 class="titular">Grafica de gastos</h1>
        <div class="donut-chart">
<!-- PORCIONES GRAFICO CIRCULAR
ELIMINADO #donut-chart
MODIFICADO CSS de .donut-chart -->
<div id="porcion1" class="recorte"><div class="quesito ios" data-rel="41"></div></div>
<div id="porcion2" class="recorte"><div class="quesito mac" data-rel="19"></div></div>
<div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
<div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
<!-- FIN AÑADIDO GRÄFICO -->
                <p class="center-date">Total gastos<br><span class="scnd-font-color">$2130000</span></p>        
        </div>
        <ul class="os-percentages horizontal-list">
            <li>
                <p class="ios os scnd-font-color">Comida</p>
                <p class="os-percentage">41<sup>%</sup></p>
            </li>
            <li>
                <p class="mac os scnd-font-color">Arriendo</p>
                <p class="os-percentage">19<sup>%</sup></p>
            </li>
            <li>
                <p class="linux os scnd-font-color">Servicios</p>
                <p class="os-percentage">9<sup>%</sup></p>
            </li>
            <li>
                <p class="win os scnd-font-color">Gasolina</p>
                <p class="os-percentage">31<sup>%</sup></p>
            </li>
        </ul>
    </div>
    </section>
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