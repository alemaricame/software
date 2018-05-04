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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>


    <style>
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

    #ta {
    		padding-left: 25px;
        padding-right: 25px;
    }
</style>
<header>
		<div class="wrapper">
			<div class="logo">LOGO</div>

			<nav>
				<a class="fa fa-home" href="index.php">&nbsp;INICIO</a>
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>

<body>
<p>  FOLIO REAL <input type="text" class="input"/>
  CLAVE CATASTRAL <input type="text" class="input"/>
  NOMBRE <input type="text" class="input"/>
  CONSTA DE <input type="text" class="input"/>
  ETAPA <input type="text" class="input"/></p>
  <p>MANZANA <input type="text" class="input"/>
  MUNICIPIO <input type="text" size="1px" class="input"/> <input type="text" class="input"/>
  UBICACIÓN <input type="text" class="input"/>
  LOTE <input type="text" class="input"/>
  ZONA <input type="text" class="input"/></p>
  <p>TIPO VIALIDAD <input type="text" class="input"/>
  VIALIDAD <input type="text" class="input"/>
  NÚMERO <input type="text" size="1px"class="input"/>
  LETRA <input type="text" size="1px" class="input"/>
  INTERIOR <input type="text" size="1px" class="input"/>
  C.P. <input type="text" size="2px" class="input"/></p>
  <p>USO DE SUELO <input type="text" class="input"/>
  ÁREA DE TERRENO <input type="text" size="3px"class="input"/>
  ÁREA DE CONSTRUCCIÓN <input type="text" class="input"/>
  MEDIDAS Y COLINDANCIAS <input type="text" class="input"/></p>
<div id="ta" >
   <!--Table-->
   <br><br><br>
   <table class="table" style="padding:5px">

       <!--Table head-->
       <thead class="mdb-color darken-3">
           <tr class="text-white">
             <th></th>
             <th></th>
             <th>TODOS</th>
             <th></th>
             <th>REGISTRO</th>
             <th></th>
             <th></th>
             <th>CONTROL</th>
             <th></th>
             <th></th>
             <th></th>
             <th></th>
             <th>INSCRIPCIÓN / ANOTACIÓN EN OTROS FOLIOS</th>
             <th></th>
             <th></th>
           </tr>
       </thead>
       <thead class="blue-grey darken-4">
           <tr class="text-white">
               <th>T</th>
               <th>CSC. OPE.</th>
               <th>CSC. HIST.</th>
               <th>ACTOS</th>
               <th>FECHA</th>
               <th>HORA</th>
               <th>NÚM</th>
               <th>AÑO</th>
               <th>I/A</th>
               <th>IMG</th>
               <th>LOTE</th>
               <th>MANZANA</th>
               <th>UBICACIÓN</th>
               <th>FOLIO</th>
               <th>+</th>
           </tr>
       </thead>
       <!--Table head-->

       <!--Table body-->
       <tbody>
           <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
           </tr>
           <tr>
               <th scope="row">2</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
           </tr>
           <tr>
               <th scope="row">3</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>
               <td>Mark</td>
               <td>Otto</td>
           </tr>
       </tbody>
       <!--Table body-->

   </table>
   <!--Table-->

   <p>  <button type="button" class="btn btn-light-green" data-toggle="collapse" href="#acto">CONSULTAR ACTO</button>
     <div id="acto" class="collapse">
       ACTO
     </div></p>
     <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#img">VER IMAGEN</button>
     <div id="img" class="collapse">
       .PDF
     </div></p>
     <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#plano">VER PLANO</button>
     <div id="plano" class="collapse">
       PLANO (?)
     </div></p>
     <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#obs">OBSERVACIONES</button>
     <div id="obs" class="collapse">
       OBSERVACIONES
     </div></p>
    <p> <button type="button" class="btn btn-light-green" data-toggle="collapse" href="#bit">BITACORA DE SEGUIMIENTO</button>
     <div id="bit" class="collapse">
       BITACORA
     </div></p>
     <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#cancel">CANCELADA POR</button>
     <div id="cancel" class="collapse">
       CANCEL
     </div></p>
   <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#actos">ACTOS AFECTADOS / ANTECEDENTES</button>
     <div id="actoS" class="collapse">
       ACTOS
     </div></p>
   <p><button type="button" class="btn btn-light-green" data-toggle="collapse" href="#id">IDENTIFICACIÓN DEL DOCUMENTO</button>
     <div id="id" class="collapse">
       ID
     </div></p>
    <p> <button type="button" class="btn btn-light-green" data-toggle="collapse" href="#cal">CALIFICACIÓN FISCAL</button>
     <div id="cal" class="collapse">
       CALIFICACIÓN
     </div>
   </p>
</body
