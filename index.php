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


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<style>
	flmenu{
				position: absolute;
				/*nos posicionamos en el centro del navegador*/
				top:50%;
				left:50%;
				/*determinamos una anchura*/
				width:400px;
				/*indicamos que el margen izquierdo, es la mitad de la anchura*/
				margin-left:-200px;
				/*determinamos una altura*/
				height:300px;
				/*indicamos que el margen superior, es la mitad de la altura*/
				margin-top:-150px;
				border:1px solid #808080;
				padding:5px;
	}
	span-icon{ font-size:30px;}
	.flmenu:hover{ background-color:#0000!important;  color:#ffff;}
	.flmenu{
		width: 160px!important;
	  height: 160px!important;
	  margin:10px;
	  display:block !important;
	  padding-top:30px;
	  color:#ffff;
		vertical-align: middle;


	top: 100px;
	bottom: 0;
	left: 0;
	right: 0;
	width: 50%;
	height: 30%;
	margin: auto;

	  }
	  .span-icon{ font-size:30px;}
	  .flmenu:hover{ background-color:#b0bec5!important; cursor:pointer; color:#0000;height: 30%;}
	  .flmenu1{
	  background-color:#263238;

	  }
		.flmenu2{
		background-color: #37474f;

		}
	  .start-btn{ position: relative;
	  padding: 8px 30px;
	  border: 0;
	  border-radius:1px !important;

	  text-decoration: none;
	  transition: 0.2s ease;
	  box-shadow:0 1px 6px 0 rgba(0,0,0,.12),0 1px 6px 0 rgba(0,0,0,.12);
	  outline: none!important;}
	</style>
	<body style="background-color:#EFEFEF;">
		<div class="container">

	    <div class="main">
	      <nav id="cbp-hrmenu" class="cbp-hrmenu">
	        <ul>
	          <li>
	            <a href="index.php">INICIO</a>
	          </li>
	          <li>
	            <a href="logout.php">SALIR</a>
	          </li>
	        </ul>
	      </nav>
	    </div>
	  </div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>

<p><div class="row" style="align:center;" >
			<div class="col-lg-2 flmenu flmenu1" align="center" >

				 <span class="glyphicon glyphicon-home span-icon"></span><br/>
				 <a href="buscador.php" style="color:#fff">SECCIÓN INMOBILIARIA</a>
			</div>
			<div class="col-lg-2 flmenu flmenu1" align="center" >

				  <span class="glyphicon glyphicon-user span-icon"></span><br/>
				 <a href="morales.php" style="color:#fff">SECCIÓN DE PERSONAS MORALES</a>
			</div>
			<div class="col-lg-2 flmenu flmenu1" align="center" >

				 <span class="glyphicon glyphicon-info-sign span-icon"></span><br/>
				 <a href="bienesymuebles.php" style="color:#fff">SECCIÓN DE BIENES Y MUEBLES</a>
			</div>
			<div class="col-lg-2 flmenu flmenu1" align="center" >

				  <span class="glyphicon glyphicon-leaf span-icon"></span><br/>
				 <a href="agricola.php" style="color:#fff">SECCIÓN AGRÍCOLA</a>
			</div>
			<div class="col-lg-2 flmenu flmenu1" align="center" >

				 <span class="glyphicon glyphicon-road span-icon"></span><br/>
				 <a href="desarrollo_u.php" style="color:#fff">DESARROLLO URBANO</a>
			</div>

		</div></p>
		<p><div class="row">
			<div class="col-lg-2 flmenu flmenu2" align="center" >

				<span class="glyphicon glyphicon-inbox span-icon"></span><br/>
				 <a href="gravamenes_uno.php" style="color:#fff">GRAVAMENES POR PARTODA DE PRIMERA</a>
			</div>
			<div class="col-lg-2 flmenu flmenu2" align="center" >

				 <span class="glyphicon glyphicon-list-alt span-icon"></span><br/>
				 <a href="gravamenes_dos.php" style="color:#fff">GRAVAMENES POR PARTODA DE SEGUNDA</a>
			</div>
			<div class="col-lg-2 flmenu flmenu2" align="center" >

				  <span class="glyphicon glyphicon-folder-open span-icon"></span><br/>
				 <a href="buscador.php" style="color:#fff">SEGUIMIENTO DE TRÁMITES</a>
			</div>
			<div class="col-lg-2 flmenu flmenu2" align="center" >

				<span class="glyphicon glyphicon-tasks span-icon"></span><br/>
				 <a href="buscador.php" style="color:#fff">BÚSQUEDA DE IMÁGENES DE PARTIDAS</a>
			</div>
			<div class="col-lg-2 flmenu flmenu2" align="center" >

				 <span class="glyphicon glyphicon-tasks span-icon"></span><br/>
				 <a href="busqueda-img.php" style="color:#fff">BÚSQUEDA DE IMÁGENES DE FOLIOS</a>
			</div>

		</div></p>

		<!-- MENÚ -->

<!-- Single button -->

</body>
</html>
