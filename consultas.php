<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://fastlearning.in/controller/css/css_files/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!--ESTILOS-->
<style >

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
body{ background-color:#fff;}
.flmenu{
width: 200px!important;
height: 200px!important;
margin:5px;
display:block !important;
padding-top:23px;
color:#ffff;
}
span-icon{ font-size:30px;}
.flmenu:hover{ background-color:#ffff !important;  color:#ffff;}
.flmenu{
  width: 160px!important;
  height: 160px!important;
  margin:10px;
  display:block !important;
  padding-top:25px;
  color:#ffff;

  }
  .span-icon{ font-size:30px;}
  .flmenu:hover{ background-color:#ffffff !important; cursor:pointer; color:#ffffff;height: 30%;}
  .flmenu1{
  background-color: #00b2ff;

  }
  .flmenu2{
  background-color: #00b2ff;
  width: 20%;

  }
  .flmenu3{
  background-color: #00AEDB;
  width: 20%;

  }
  .flmenu4{
  background-color: #F37735;
  width: 20%;

  }
  .flmenu5{
  background-color: #EC098C;
  width: 20%;
  }
  .flmenu6{
  background-color: #314E6C;
  width: 20%;
  }
  .flmenu7{
  background-color: #44A5AC;
  width: 20%;
  }
  .flmenu8{
  background-color: #297E83;
  width: 20%;
  }
  .flmenu9{
  background-color:#CC3366;
  width: 20%;
  }
  .flmenu10{
  background-color: #911612;
  width: 20%;
  }
  .flmenu11{
  background-color:#6699CC;
  width: 20%;
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
<!-- HEADER -->
<header>
		<div class="wrapper">
			<div class="logo">LOGO</div>

			<nav>
				<a class="fa fa-home" href="index.php">&nbsp;INICIO</a>
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>
<!-- FIN DE HEADER -->
<body>
   <!-- Single button -->
   <div class="container" style="margin: auto auto;">
      <!-- Single button -->
      <div class="btn-group">

         <div class="startmneu" style="padding-left:auto; width:1000px;background-color: #ffffff !important;position: absolute;border: 1px #ccc;">
            <div class="row">
               <div class="col-lg-2 flmenu flmenu10" align="center" >

                  <span class="glyphicon glyphicon-home span-icon"></span><br/>
                  <a href="buscador.php" style="color:#fff">SECCIÓN INMOBILIARIA</a>
               </div>
               <div class="col-lg-2 flmenu flmenu9" align="center">
                  <span class="glyphicon glyphicon-user span-icon"></span><br/>
                  <a href="#" style="color:#fff">SECCIÓN DE PERSONAS MORALES</a>
               </div>
               <div class="col-lg-2 flmenu flmenu8" align="center">
                  <span class="glyphicon glyphicon-info-sign span-icon"></span><br/>
                  <a href="#" style="color:#fff">SECCIÓN DE BIENES Y MUEBLES</a>
               </div>
               <div class="col-lg-2 flmenu flmenu7" align="center">
                  <span class="glyphicon glyphicon-leaf span-icon"></span><br/>
                  <a href="#" style="color:#fff">SECCIÓN AGRÍCOLA</a>
               </div>
               <div class="col-lg-2 flmenu flmenu6" align="center">
                  <span class="glyphicon glyphicon-road span-icon"></span><br/>
                  <a href="#" style="color:#fff">DESARROLLO URBANO</a>
               </div>

            <div class="row">
               <div class="col-lg-2 flmenu flmenu6" align="center">
                  <span class="glyphicon glyphicon-inbox span-icon"></span><br/>
                  <a href="#" style="color:#fff">GRAVAMENES POR PARTIDA DE PRIMERA</a>
               </div>
               <div class="col-lg-2 flmenu flmenu7" align="center">
                  <span class="glyphicon glyphicon-list-alt span-icon"></span><br/>
                  <a href="#" style="color:#fff">GRAVAMENES POR PARTIDA DE SEGUNDA</a>
               </div>
               <div class="col-lg-2 flmenu flmenu8" align="center">
                  <span class="glyphicon glyphicon-folder-open span-icon"></span><br/>
                  <a href="#" style="color:#fff">SEGUIMIENTO DE TRÁMITES</a>
               </div>
               <div class="col-lg-2 flmenu flmenu9" align="center">
                  <span class="glyphicon glyphicon-tasks span-icon"></span><br/>
                  <a href="#" style="color:#fff">BÚSQUEDA DE IMÁGENES DE PARTIDAS</a>
               </div>
               <div class="col-lg-2 flmenu flmenu10" align="center">
                  <span class="glyphicon glyphicon-tasks span-icon"></span><br/>
                <a href="#" style="color:#fff">BÚSQUEDA DE IMÁGENES DE FOLIOS</a>
               </div>
         </div>
      </div>
   </div>

</div>
</div>
  <script type="text/javascript" src="http://fastlearning.in/controller/js//jquery-1.11.0.min"></script>
 <script src="http://fastlearning.in/controller/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
