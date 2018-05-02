<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
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
.flmenu{
  width: 160px!important;
  height: 100px!important;
  margin:5px;
  display:block !important;
  padding-top:23px;
  color:#f5f5f5;
  }
  .span-icon{ font-size:30px;}
  .flmenu:hover{ background-color:#f5f5f5 !important; cursor:pointer; color:#CCCCCC;}
  .flmenu1{
  background-color: #000000;
  }
  .flmenu2{
  background-color: #00B159;
  }
  .flmenu3{
  background-color: #00AEDB;
  }
  .flmenu4{
  background-color: #F37735;
  }
  .flmenu5{
  background-color: #EC098C;
  }
  .flmenu6{
  background-color: #314E6C;
  }
  .flmenu7{
  background-color: #44A5AC;
  }
  .flmenu8{
  background-color: #297E83;
  }
  .flmenu9{
  background-color:#CC3366;
  }
  .flmenu10{
  background-color: #C9312C;
  }
  .flmenu11{
  background-color:#6699CC;
  }
  .flmenu12{
  background-color: #7C4199;
  }
  .flmenu13{
  background-color: #FFC425;
  }
  .flmenu14{
  background-color: #034A8C;
  }
  .flmenu15{
  background-color: #E59B18;
  }
  .flmenu16{
  background-color: #006054;
  }
  .flmenu17{
  background-color: #44A5AC;
  }
  .flmenu18{
  background-color: #336797;
  }
  .flmenu19{
  background-color: #3B3E45;
  }
  .start-btn{ osition: relative;
  padding: 8px 30px;
  border: 0;
  border-radius:1px !important;
  text-transform: uppercase;
  text-decoration: none;
  transition: 0.2s ease;
  box-shadow:0 1px 6px 0 rgba(0,0,0,.12),0 1px 6px 0 rgba(0,0,0,.12);
  outline: none!important;}
  .start-btn:hover{ box-shadow:0 5px 11px 0 rgba(0,0,0,.18),0 4px 15px 0 rgba(0,0,0,.15)}
  .start-btn:active{}
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
      <div class="startmneu" style="padding-left:30px; width:1050px;background-color: #E4E4E4 !important;position: absolute;border: 1px solid #ccc; ">
        <div class="row">
          <div class="col-lg-2 flmenu2" align="center">
              <span class="glyphicon glyphicon-bell span-icon"></span><br>
                  <b>SECCIÓN INMOBILIARIA</b>
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
