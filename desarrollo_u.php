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
/*BARRA DE BUSCADOR*/
#buscador {
  float: left;
  width: 35%;
  margin:0;
  padding-left:90px;
}
/*MAPA*/
#map {
    height: 800px;
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
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>

<!-- FIN DE HEADER -->
<body>

<div id="buscador">
        <!-- MOTOR DE BUSQUEDA -->
                <legend><strong>BÚSQUEDA</strong></legend>
                SELECCIONAR EL MÉTODO DE BÚSQUEDA
  <!--se le asigna un name al formulario de contacto.-->
  <p>
      <!-- DIV DE folio -->
      <button type="button" class="btn btn-unique" data-toggle="collapse" href="#partida">FOLIO</button>
      <div id="partida" class="collapse">
        FOLIO <input type="text" size="5px"class="input"/> <button type="button" href="#">BUSCAR</button>
        <!--Table head-->
          <P>  <table class="table" style="padding:5px">
        <thead class="blue-grey darken-4">
            <tr class="text-white">
                <th>FOLIO</th>
                <th>RAZÓN SOCIAL</th>

            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>

            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>

            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>



            </tr>
        </tbody>
        <!--Table body-->

    </table>
</P>
    <!--Table-->
        <button type="button" class="btn btn-red darken-4" onClick="location.href='http://localhost/soft/software/tabla_registro.php'">BUSCAR</button>
</div>

        <p><button type="button" class="btn btn-unique" data-toggle="collapse" href="#social">NOMBRE DEL PROYECTO</button></p>
        <div id="social" class="collapse">
          NOMBRE DEL PROYECTO <input type="text" size="5px"class="input"/> <button type="button" href="#">BUSCAR</button>
          <!--Table head-->
            <p>  <table class="table" style="padding:5px">
          <thead class="blue-grey darken-4">
              <tr class="text-white">
                  <th>FOLIO</th>
                  <th>PROYECTO</th>
              </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>

              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>

              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
              </tr>
          </tbody>
          <!--Table body-->

        </table>
        <!--Table--></p>
          <button type="button" class="btn btn-red darken-4" onClick="location.href='http://localhost/soft/software/tabla_registro.php'">BUSCAR</button>


</div>

  </p>

</div>
<!--MAPA -->


   <div id="map"></div>



 </div>

</body>
</html>
