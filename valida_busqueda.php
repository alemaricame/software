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

  body{
    background-color:#EFEFEF;
  }
  @media (min-width: 1200px){
    .container {
        width: 1700px;
    }
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
<body >
  <table class="table" style="padding:5px">

       <!--Table head-->
       <thead class="blue-grey darken-4">
           <tr class="text-white">
               <th>FOLIO</th>
               <th>CLASIFICACIÓN</th>
               <th>UBICACIÓN</th>
           </tr>
       </thead>
       <!--Table head-->

       <!--Table body-->
       <tbody>
           <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
           </tr>
           <tr>
               <th scope="row">2</th>
               <td>Mark</td>
               <td>Otto</td>
           </tr>
           <tr>
               <th scope="row">3</th>
               <td>Mark</td>
               <td>Otto</td>


           </tr>
       </tbody>
       <!--Table body-->

   </table>
   <!--Table-->
</body>
</html>
