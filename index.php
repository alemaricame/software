<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="description" content="Blueprint: Horizontal Drop-Down Menu" />
		<meta name="keywords" content="horizontal menu, microsoft menu, drop-down menu, mega menu, javascript, jquery, simple menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="SO/css/default.css" />
		<link rel="stylesheet" type="text/css" href="SO/css/component.css" />
		<script src="SO/js/modernizr.custom.js"></script>
	</head>
	<body style="background-color:#EFEFEF;">
		<div class="container">

			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
						<li>
							<a href="#">INICIO</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner">
									<div>
										<h4>OPCIONES DE BÚSQUEDA</h4>
										<ul>
											<li><a href="buscador.php">SECCIÓN INMOBILIARIA</a></li>
	                    <li><a href="morales.php">SECCIÓN DE PERSONAS MORALES</a></li>
	                    <li><a href="bienesymuebles.php">SECCIÓN DE BIENES Y MUEBLES</a></li>
	                    <li><a href="#">SECCIÓN AGRÍCOLA</a></li>
	                    <li><a href="#">DESARROLLO URBANO</a></li>
	                    <li><a href="#">GRAVAMENES POR PARTIDA DE PRIMERA</a></li>
	                    <li><a href="#">GRAVAMENES POR PARTIDA DE SEGUNDA</a></li>
	                    <li><a href="#">SEGUIMIENTO DE TRÁMITES</a></li>
	                    <li><a href="#">BÚSQUEDA DE IMÁGENES POR PARTIDA</a></li>
	                    <li><a href="#">BÚSQUEDA DE IMÁGENES POR FOLIO</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">SALIR</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="SO/js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	</body>
</html>
