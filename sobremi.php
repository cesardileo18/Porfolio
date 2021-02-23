<?php $pg = "sobremi"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Diseño web, html, Css, javascript, programacion, php, POO, MySQL">
    <meta name="viewport" content="width=device-width, user-scalable=no, 
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sobre mi</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/logodw.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
</head>
<header>
<?php include_once("menu.php"); ?>
</header>

<body id="color">
    <div class="container">
        <section class="sobre-mi">
            <div class="row mt-5">
                <div>
                    <h1 class="s">Sobre mí</h1>
                    <h2 class="negro">Programador full Stack Jr. Con el objetivo de seguir creciendo profesionalmente en el ambito de la tecnología.</h2>
                    <a href="#" class="btn" target="_blank">Descargar CV <i class="fas fa-download"></i></a>
                </div>
                <div class="col-sm-3 col-9 mx-5">
                    <img src="Imagenes/fotocv.jpg" alt="Cesar Acacio Di Leonardo" title="Cesar A. Dileonardo" width="300" height="300" class="rounded-circle img-responsive" />
                </div>
            </div>
            <section class="trabajos1">
			<div class="contenedor">
				<h2 class="lenguajes text-center">Conocimientos de Programacion</h2>
						
				<div class="contenedor-trabajos1">
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/php.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Php</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/react.jpg">
						</div>
						<div class="descripcion">
							<p class="nombre">React</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/J5Yt92WW_400x400.jpg">
						</div>
						<div class="descripcion">
							<p class="nombre">Mysql</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/untitled-1_100.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Flexbox</p>
						</div>
					</div>
                    <div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/javascript.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Javascript</p>
						</div>
					</div>
                    <div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/jquery.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Jquery</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/laravel-logo.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Laravel</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/html5.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Html</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/git.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Git</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/css.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Css</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/bootstrap.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Bootstrap</p>
						</div>
					</div>
					<div class="trabajo1">
						<div class="thumb1">
							<img src="Imagenes/unnamed.png">
						</div>
						<div class="descripcion">
							<p class="nombre">Apache</p>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
    <section id="experiencia">
        <div class="container py-sm-5 py-4">
            <div class="row">
                <div class="col-12 py-4">
                    <h2 class="tabla1">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-sm-2">
                    <h3>2017 – Presente <br> <br> Buenos Aires</h3>
                </div>
                <div class="col-12 col-sm-2">
                    <a href="https://www.carrefour.com.ar/" target="_blank"><h3><img src="Imagenes/carrefour.png" alt="INC S.A. Carrefour" title="INC S.A. Carrefour" class="carrefour"></h3></a>
                </div>
                <div class="col-12 col-sm-8">
                    <h4>Apertura y cierre de local, manejo de caja, atención al cliente, conducción de personal, reposición de mercadería en góndolas,
                        control de precios, control vencimiento de los productos, limpieza y orden del local, recepción de mercadería, cargar boletas,
                        manejo de programas: génesis, webmaster, sistema de tesoreria, logistica inversa. Entre otros</h4>
                </div>
            </div>
        </div>
    </section>
    <?php include_once("footer.php"); ?>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="menu.js"></script>
</body>
</html>