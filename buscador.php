<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
/*MAPA*/
#map {
    height: 1050px;
    width: 75%;
		float: right;
		margin:0;
		overflow:hidden;

}
body{
  background-color:#EFEFEF;
}
#buscador {
  float: left;
  width: 25%;
  margin:0;
}
</style>
<!-- HEADER -->
<body >
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
<br><br>
<div id="buscador">
<CENTER> INGRESE EL NOMBRE <input type="text"/> <button type="button" class="btn btn-default btn-sm" style="background-color:#fff;">
          <span class="glyphicon glyphicon-search"></span> BUSCAR
        </button>
 </div>

<div id="map">
 <div class="row-fluid">
   <div class="span8">
     <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
   </div>

   <div class="span4">

 </address>
   </div>
 </div>
</div>
</body>
</html>
