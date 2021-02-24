<?php $pg = "Proyectos"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Diseño web, html, Css, javascript, programacion, php, POO, MySQL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/1614171402.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
</head>

<body>
    <header>
    <?php include_once("menu.php"); ?>
    </header>
    <section class="trabajos">
        <div class="contenedor">
            <h1>Mis proyectos</h1>
            <h2 class="negro">Estos son algunos de los trabajos que he realizado:</h2>
            <div class="contenedor-trabajos">
                <div class="trabajo">
                    <div class="thumb">
                        <img src="Imagenes/abmventas.png" alt="" width="200" height="200">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Sistema de Gestión de ventas</p>
                        <p class="categoria padding">Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="/abmclientes/index.php" class="boton" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://github.com/cesardileo18/abmventas.git" target="_blank">Código fuente</a><br><br>
                        </div>
                    </div>
                </div>
                <div class="trabajo">
                    <div class="thumb">
                        <img src="Imagenes/abmventas2.png" alt="" width="200" height="200">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Sistema de Gestión de ventas</p>
                        <p class="categoria">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="/abmventas/login.php" class="boton" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://github.com/cesardileo18/abmventas.git" target="_blank">Código fuente</a><br><br>
                        </div>
                    </div>
                </div>
                <div class="trabajo">
                    <div class="thumb">
                        <img src="Imagenes/bobesponja.png" alt="" width="200" height="200">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Bob Esponja</p>
                        <p class="categoria">Html-Css</p>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="bob-esponja/bobesponja.php" class="boton" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://github.com/cesardileo18/abmventas.git" target="_blank">Código fuente</a><br><br>
                        </div>
                    </div>
                </div>
                <div class="trabajo">
                    <div class="thumb">
                        <img src="Imagenes/calculadora.png" alt="" width="200" height="200">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Calculadora</p>
                        <p class="categoria">Html-Css-JavaScript</p>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="claculadora2/calculadora.html" class="boton" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://github.com/cesardileo18/abmventas.git" target="_blank">Código fuente</a><br><br>
                        </div>
                    </div>
                </div>
                <div class="trabajo">
                    <div class="thumb">
                        <img src="Imagenes/Exquisiteces Doña Ana - Google Chrome 27_10_2020 04_17_26 (2).png" alt="" width="200" height="200">
                    </div>
                    <div class="descripcion">
                        <p class="nombre">Sistema de Gestión de ventas</p>
                        <p class="categoria">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row p-3">
                        <div class="col-6">
                            <a href="restaurante/index.html" class="boton" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="https://github.com/cesardileo18/abmventas.git" target="_blank">Código fuente</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("footer.php"); ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="menu.js"></script>

</body>

</html>