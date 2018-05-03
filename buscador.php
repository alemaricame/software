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

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<!-- script del mapa-->
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHdEhRbaKBIl8kNftDz5M3FOEFokUEFYQ&callback=initMap">
</script>

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

/*MAPA*/
#map {
        height: 500px;
        width: 65%;
		float: right;
		margin:0;
		overflow:hidden;
}
</style>
<!-- HEADER -->
<header>
		<div class="wrapper">
			<div class="logo">LOGO</div>

			<nav>
				<a class="fa fa-home" href="index.php">&nbsp;INICIO</a>
				<a class="fa fa-bars" href="consultas.php">&nbsp;MÉTODOS DE CONSULTA</a>
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>

<!-- FIN DE HEADER -->
<body>

<div id="buscador">
        <!-- MOTOR DE BUSQUEDA -->
		<section>
            <fieldset>
                <legend><strong>BÚSQUEDA</strong></legend>
                SELECCIONAR EL MÉTODO DE BÚSQUEDA
  <!--se le asigna un name al formulario de contacto.-->
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="buscar">
    <input type="radio" name="Conocido" value="Google" id="Conocido_0" onclick="mostrarReferencia();" /> PROPIETARIO
    <input type="radio" name="Conocido" value="Otros" id="Conocido_1" onclick="mostrarReferencia();" /> UBICACIÓN
    <input type="radio" name="Conocido" value="Otros" id="Conocido_2" onclick="mostrarReferencia();" /> CLAVE CATASTRAL
    <input type="radio" name="Conocido" value="Otros" id="Conocido_3" onclick="mostrarReferencia();" /> FOLIO
    <input type="radio" name="Conocido" value="Otros" id="Conocido_4" onclick="mostrarReferencia();" /> PARTIDA
    <br><input type="radio" name="Conocido" value="Otros" id="Conocido_5" onclick="mostrarReferencia();" /> TESTADORES
</fieldset>
</section>
<section>
  <fieldset>
    <legend><strong>MÉTODOS DE BÚSQUEDA</strong></legend>
          <!--div PROPIETARIO-->
          <div id="prop" style="display:none;">
            NOMBRE <input type="text" name="otro" class="input" />
          </div>
          <!-- DIV UBICACIÓN-->
          <div id="ubi" style="display:none;">
            COLONIA <input type="text" class="input"/>
            CALLE <input type="text" class="input"/>
            NO. EXT. <input type="text" class="input"/>
            NO. INT. <input type="text" class="input"/>
            LETRA <input type="text" class="input"/>
            LOTE <input type="text" class="input"/>
            MANZANA <input type="text" class="input"/>
          </div>
  </fieldset>
</section>

    <!--funcion javascript en la cabecera del documento-->
<script type="text/javascript">
function mostrarReferencia(){
    //Si la opcion con id Conocido_1 (dentro del documento > formulario con name fcontacto >     y a la vez dentro del array de Conocido) esta activada
if (document.buscar.Conocido[1].checked == true) {
    //muestra (cambiando la propiedad display del estilo) el div con id 'desdeotro'
    document.getElementById('prop').style.display='none';
    //por el contrario, si no esta seleccionada
  }else{
    if(document.buscar.Conocido[2].checked=="true"){
      document.getElementById('prop').style.display='block';
    document.getElementById('ubi').style.display='none';

  }
  }
}
</script>
</div>
<!--MAPA -->
   <div id="map"></div>


</body>
</html>
