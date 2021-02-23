<?php $pg = "Inicio"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Diseño web, html, Css, javascript, programacion, php, POO, MySQL">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Porfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/logodw.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
</head>

<body>
    <header class="inicio">
    <?php include_once("menu.php"); ?>
        <div class="contenedor-texto">
            <div class="texto">
                <h1 class="nombre">Cesar Di Leonardo</h1>
                <h2 class="profesion">Desarrollador full stack</h2>
            </div>
        </div>
    </header>
    <section class="main">
        <!-- Main significa seccion Principal -->
        <section class="acerca-de">
            <div class="contenedor">
                <div class="foto">
                    <img src="Imagenes/3.jpg" alt="Cesar Di Leonardo" width="115" height="115">
                </div>
                <div class="texto">
                    <h1 class="titulo">
							<span class="typed" style="color:rgba(5, 5, 5, 0.8);"></span>
					</h1>
                    <div class="titulo" id="cadenas-h1">
						<p>Hola!<br> Bienvenido a mi web<i class="mascota"> Gracias</i></p>
						<p>Hola!<br> Bienvenido a mi web<i class="mascota"> Por</i></p>
						<p>Hola!<br> Bienvenido a mi web<i class="mascota"> Visitarme</i></p>
					</div> 
                    <a href="proyectos.php" class="btn mt-sm-4 bg-success text-white">Conoce mis proyectos</a>
                </div>
            </div>
        </section>
    </section>
    <?php include_once("footer.php"); ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/letras.js"></script>
    <script src="menu.js"></script>
</body>

</html>