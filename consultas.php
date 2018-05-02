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
.flmenu{
  width: 160px!important;
  height: 100px!important;
  margin:5px;
  display:block !important;
  padding-top:23px;
  color:#ffffff;

  }
  .span-icon{ font-size:30px;}
  .flmenu:hover{ background-color:#ffffff !important; cursor:pointer; color:#ffffff}
  .flmenu1{
  background-color: #fcfcfc;

  }
  .flmenu2{
  background-color: #00b2ff;
  height:30%;
  width: 30%;
  }
  .flmenu3{
  background-color: #00AEDB;
  height:30%;
  width: 30%;
  }
  .flmenu4{
  background-color: #F37735;
  height:30%;
  width: 30%;
  }
  .flmenu5{
  background-color: #EC098C;
  height:30%;
  width: 30%;
  }
  .flmenu6{
  background-color: #314E6C;
  height:30%;
  width: 30%;
  }
  .flmenu7{
  background-color: #44A5AC;
  height:30%;
  width: 30%;
  }
  .flmenu8{
  background-color: #297E83;
  height:30%;
  width: 30%;
  }
  .flmenu9{
  background-color:#CC3366;
  height:30%;
  width: 30%;
  }
  .flmenu10{
  background-color: #C9312C;
  height:30%;
  width: 30%;
  }
  .flmenu11{
  background-color:#6699CC;
  height:30%;
  width: 30%;
  }

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
<div class="container" style="margin-top:100px;">
    <div class="btn-group">
      <div class="startmneu" style="padding-left:auto; width:1050px;background-color: #ffffff !important;position: absolute;border: 1px  #ccc; ">
        <div class="row">
          <div class="col-lg-2 flmenu2" align="center">
              <span class="glyphicon glyphicon-home span-icon"></span><br>
                  <a href="buscador.php">SECCIÓN INMOBILIARIA</a>
          </div>
          <div class="col-lg-2 flmenu3" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">SECCIÓN DE PERSONAS MORALES</a>
          </div>
          <div class="col-lg-2 flmenu4" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">SECCIÓN DE VIENES Y MUEBLES</a>
          </div>
        <div class="col-lg-2 flmenu5" align="center" style: "color:#ffffff">
            <span class="glyphicon glyphicon-user span-icon"></span><br>
                <a href="#">SECCIÓN AGRÍCOLA</a>
        </div>
        <div class="col-lg-2 flmenu6" align="center" style: "color:#ffffff">
            <span class="glyphicon glyphicon-user span-icon"></span><br>
                <a href="#">DESARROLLO URBANO</a>
        </div>
        </div>
        <div class="row">

          <div class="col-lg-2 flmenu7" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">GRAVAMENES POR PARTIDA DE PRIMERA</a>
          </div>
          <div class="col-lg-2 flmenu8" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">GRAVAMENES POR PARTIDA DE SEGUNDA</a>
          </div>
          <div class="col-lg-2 flmenu9" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">SEGUIMIENTO DE TRÁMITES</a>
          </div>
          <div class="col-lg-2 flmenu10" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">BÚSQUEDA DE IMÁGENES DE PARTIDAS</a>
          </div>
          <div class="col-lg-2 flmenu11" align="center" style: "color:#ffffff">
              <span class="glyphicon glyphicon-user span-icon"></span><br>
                  <a href="#">BÚSQUEDA DE IMÁGENES DE FOLIOS</a>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!--
      <body>
   <div class="container" style="margin-top:100px;">
      <div class="btn-group">
         <button type="button" class="btn btn-default dropdown-toggle start-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Start
         </button>
         <div class="dropdown-menu startmneu" style="padding-left:30px; width:1050px;background-color: #E4E4E4 !important;position: absolute;border: 1px solid #ccc;">
            <div class="row">
               <div class="col-lg-2 flmenu flmenu1" align="center">
                  <span class="glyphicon glyphicon-bell span-icon"></span><br/>
                  <b>Notification</b>
               </div>
               <div class="col-lg-2 flmenu flmenu2" align="center">
                  <span class="glyphicon glyphicon-trash span-icon"></span><br/>
                  <b>Delete</b>
               </div>
               <div class="col-lg-2 flmenu flmenu3" align="center">
                  <span class="glyphicon glyphicon-flag span-icon"></span><br/>
                  <b>Flag</b>
               </div>
               <div class="col-lg-2 flmenu flmenu4" align="center">
                  <span class="glyphicon glyphicon-headphones span-icon"></span><br/>
                  <b>HeadPhones</b>
               </div>
               <div class="col-lg-2 flmenu flmenu5" align="center">
                  <span class="glyphicon glyphicon-print span-icon"></span><br/>
                  <b>Printer</b>
               </div>
               <div class="col-lg-2 flmenu flmenu6" align="center">
                  <span class="glyphicon glyphicon-camera span-icon"></span><br/>
                  <b>Camera</b>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-2 flmenu flmenu7" align="center">
                  <span class="glyphicon glyphicon-facetime-video span-icon"></span><br/>
                  <b>Video</b>
               </div>
               <div class="col-lg-2 flmenu flmenu8" align="center">
                  <span class="glyphicon glyphicon-picture span-icon"></span><br/>
                  <b>Pictures</b>
               </div>
               <div class="col-lg-2 flmenu flmenu9" align="center">
                  <span class="glyphicon glyphicon-gift span-icon"></span><br/>
                  <b>Gift</b>
               </div>
               <div class="col-lg-2 flmenu flmenu10" align="center">
                  <span class="glyphicon glyphicon-bullhorn span-icon"></span><br/>
                  <b>BullHorn</b>
               </div>
               <div class="col-lg-2 flmenu flmenu11" align="center">
                  <span class="glyphicon glyphicon-compressed span-icon"></span><br/>
                  <b>Compressed</b>
               </div>
               <div class="col-lg-2 flmenu flmenu12" align="center">
                  <span class="glyphicon glyphicon-phone-alt span-icon"></span><br/>
                  <b>Telphone</b>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-2 flmenu flmenu13" align="center">
                  <span class="glyphicon glyphicon-briefcase span-icon"></span><br/>
                  <b>Briefcase</b>
               </div>
               <div class="col-lg-2 flmenu flmenu14" align="center">
                  <span class="glyphicon glyphicon-volume-off span-icon"></span><br/>
                  <b>Volumne off</b>
               </div>
               <div class="col-lg-2 flmenu flmenu15" align="center">
                  <span class="glyphicon glyphicon-lock span-icon"></span><br/>
                  <b>Lock</b>
               </div>
               <div class="col-lg-2 flmenu flmenu16" align="center">
                  <span class="glyphicon glyphicon-plane span-icon"></span><br/>
                  <b>Aeroplane</b>
               </div>
               <div class="col-lg-2 flmenu flmenu17" align="center">
                  <span class="glyphicon glyphicon-hdd span-icon"></span><br/>
                  <b>Hard Disk Drive</b>
               </div>
               <div class="col-lg-2 flmenu flmenu18" align="center">
                  <span class="glyphicon glyphicon-phone span-icon"></span><br/>
                  <b>Mobile</b>
               </div>
            </div>
         </div>
      </div>
   </div>


  <script type="text/javascript" src="http://fastlearning.in/controller/js//jquery-1.11.0.min"></script>
 <script src="http://fastlearning.in/controller/js/bootstrap.min.js" type="text/javascript"></script>
</body> -->


    <script type="text/javascript" src="http://fastlearning.in/controller/js//jquery-1.11.0.min"></script>
   <script src="http://fastlearning.in/controller/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
