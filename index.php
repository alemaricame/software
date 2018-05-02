<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link href="http://fastlearning.in/controller/css/css_files/bootstrap.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!--ESTILOS-->
<style type="text/css">
header {
	width:100%; /* Establecemos que el header abarque el 100% del documento */
	overflow:hidden; /* Eliminamos errores de float */
	background:rgb(27, 54, 71);
	margin-bottom:20px;
}

.wrapper {
	width:90%; /* ancho 90% */
	max-width:auto;
	margin:auto; /* Centramos los elementos */
	overflow:hidden; /* Eliminamos errores de float */
}

header .logo {
	color:#fcfcfc;
	font-size:30px;
	line-height:100px; /* posicion del logo (centrado) */
	float:left;
}

header nav {
	float:right;
	line-height:100px;
}

header nav a {
	display:inline-block;
	color:#fff;
	text-decoration:none;
	padding:10px 20px;
	line-height:100px;
	font-size:12px;
	-webkit-transition:all 500ms ease;
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
}

header nav a:hover {
	background:#ff9205;
	border-radius:50px;
}
/*BARRA DE BUSCADOR*/
#buscador {
  float: left;
  width: 35%;
  margin:0;
}

/*==============++++================*/
.menu {
  height: 200px;
  width: 200px;
  position: relative;
  margin: auto;
  padding-top: 100px;
  border: 15px solid transparent;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
  color: #fff;
}

.bar {
  height: 15px;
  width: 100px;
  display: block;
  margin: 100px auto;
  position: relative;
  background-color: rgv(25,25,25);
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -moz-transition: 0.4s;
  -o-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.model-1 {
  background-color: #0093c9;
  font-size: 30px;
}
.model-2{
	background-color: #bebfc4;
	font-size: 30px;
}

footer {
  position: fixed;
  bottom: 0;
  left: 0;
  height: 70px;
  background-color: rgb(27, 54, 71);
  width: 100%;
  color: #fff;
}
</style>
<!-- HEADER -->
<header>
		<div class="wrapper">
			<div class="logo">LOGO</div>

			<nav>
				<a class="fa fa-home" href="index.php" >&nbsp;INICIO</a>
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>
<br><br><br>
<!-- FIN DE HEADER -->
<body>

<div>

<section class="mod model-1">
  <div class="menu">
   <a href="consultas.php">CONSULTAS</a>
  </div>
</section>
<section class="mod model-2">
  <div class="menu">
  <a href="#">UTILERIAS</a>
  </div>
</section>
</div>

</body>
<footer>
<center>CONTACTO
</footer>
</html>
