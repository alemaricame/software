<?php
   include('session.php');
?>
//dkcjoidscjdiosc
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
html{
	font-size:11PX;
	font-family:"sans-serif";
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

<div id="buscador";
    <form >
        <!-- MOTOR DE BUSQUEDA -->
		<section>
            <fieldset>
                <legend>BÚSQUEDA</legend>
  <!--se le asigna un name al formulario de contacto.-->
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="buscar">
				SELECCIONAR EL MÉTODO DE BÚSQUEDA

					<select>
					<option></option>
						<option name="propietario">PROPIETARIO</option>
						<option>UBICACIÓN</a>
						<option>CLAVE CATASTRAL</option>
						<option>FOLIO</option>
						<option>PARTIDA</option>
						<option>TESTADOR</option>
					</select>
                <!--FOLIO MERCANTIL <input type="text" size="4px"> </input> <input type="text" size="1px" > </input>
				RFC/CURP <input type="text" size="10px"> </input>-->
            </fieldset>

        </section>
		<!-- INFORMACION GENERAL -->
		<section>
            <fieldset>

					<legend> DATOS GENERALES </legend>
						FOLIO REAL <input type="text" size="10px"> </input>
						CLAVE CATASTRAL<input type="text" size="10px"> </input>
						LOTE<input type="text" size="10px"> </input>
						<BR>MANZANA<input type="text" size="10px"> </input>
						ETAPA<input type="text" size="10px"> </input>
						ZONA<input type="text" size="10px"> </input>
						TIPO VIALIDAD<input type="text" size="10px"> </input>
						VIALIDAD<input type="text" size="10px"> </input>
						NÚMERO<input type="text" size="5px"> </input>
						LETRA<input type="text" size="5px"> </input>
						INTERIOR<input type="text" size="5px"> </input>
						C.P.<input type="text" size="5px"> </input>
						MUNICIPIO<input type="text" size="5px"> </input> <input type="text" size="5px"> </input>

            </fieldset>
        </section>
		  <!-- INFORMACION DE SOCIOS -->
		<section>
            <fieldset>

					<legend>SOCIOS</legend>
						<p> AQUÍ VA AGREGADO LOS NOMBRES DE LOS SOCIOS</p>

            </fieldset>
        </section>
    </form>
</div>

<!--MAPA -->
   <div id="map"></div>


</body>
</html>
