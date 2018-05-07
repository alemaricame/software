<?php
   include('session.php');
?>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--ESTILOS-->

<style>
  #eventForm .form-control-feedback {
    top: 0;
    right: -15px;
  }
body{
  background-color:#EFEFEF;
}
@media (min-width: 1200px){
  .container {
      width: 1700px;
  }
}


</style>


<header>
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
</header>
<BR>
<body>

  <form>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">SECCION INMOBILIARIA</div>
        <div class="panel-body">

          <div class="form-row">

            <div class="form-group col-md-2">
              <label for="">FOLIO REALL</label>
              <input type="email" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="">CLAVE CATASTRAL</label>
              <input type="email" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="">ETAPA</label>
              <input type="email" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="">CONSTA DE</label>
              <input type="email" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="">ETAPA</label>
              <input type="email" class="form-control" id="" placeholder="">
            </div>

            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="">MANZANA</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">MUNICIPIO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">UBICACION</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">LOTE </label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">ZONA</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="">TIPO VIALIDAD</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">VIABILIDAD</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">NUMERO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">LETRA </label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">INTERIOR</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="form-row">

              <div class="form-group col-md-2">
                <label for="">C.P</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">USO DE SUELO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">ÁREA DE TERRENO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">ÁREA DE CONSTRUCCIÓN</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="">MEDIDAS Y COLINDANCIAS</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">GRAVADOS</div>
        <div class="panel-body">

          <div class="form-row">

            <table class="table table-bordered">

              <!--Table head-->
              <thead class="mdb-color darken-3">
                <tr class="text-white">
                  <th>#</th>
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
                  <th>OTROS</th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                    <center><i class="fas fa-eye"></center></td>
                  <td>04/05/2018</td>
                  <td>12:00</td>
                  <td>5</td>
                  <td>2010</td>
                  <td>Mark</td>
                  <td><center><i class="fas fa-image"></i></center>
                  </td>
                  <td>mdo</td>
                  <td>4</td>
                  <td>15 Springfield Way, Hythe CT21 5SH, UK</td>
                  <td>13621444</td>
                  <td onclick="modalOtros()">
                    <center><i class="fas fa-columns"></center></i></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                    <center><i class="fas fa-eye"></center></td>
                  <td>04/05/2018</td>
                  <td>12:00</td>
                  <td>5</td>
                  <td>2010</td>
                  <td>Mark</td>
                  <td><center><i class="fas fa-image"></i></center>
                  </td>
                  <td>mdo</td>
                  <td>4</td>
                  <td>Seabrook Rd, Hythe CT21 5RS, UK</td>
                  <td>13621999</td>
                  <td onclick="modalOtros()">
                    <center><i class="fas fa-columns"></center></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                    <center><i class="fas fa-eye"></center></td>
                  <td>04/05/2018</td>
                  <td>12:00</td>
                  <td>5</td>
                  <td>2010</td>
                  <td>Mark</td>
                  <td><center><i class="fas fa-image"></i></center>
                  </td>
                  <td>mdo</td>
                  <td>4</td>
                  <td>Lower Sandgate Rd, Folkestone CT20 2EX, UK</td>
                  <td>13621211</td>
                  <td onclick="modalOtros()">
                    <center><i class="fas fa-columns"></center></i></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>
                    <center><i class="fas fa-eye"></center></td>
                  <td>04/05/2018</td>
                  <td>12:00</td>
                  <td>5</td>
                  <td>2010</td>
                  <td>Mark</td>
                  <td><center><i class="fas fa-image"></i></center>
                  </td>
                  <td>mdo</td>
                  <td>4</td>
                  <td>Sene Valley Golf Club, 40 Blackhouse Hill, Hythe CT18 8BL, UK</td>
                  <td>13620021</td>
                  <td onclick="modalOtros()">
                    <center><i class="fas fa-columns"></center></i></td>
                </tr>

              </tbody>
              <!--Table body-->

            </table>

          </div>



        </div>
      </div>
    </div>

  </form>
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="tallModal" >
    <div class="modal-dialog modal-lg" role="document" >
      <div class="modal-content" >

        <div class="row">
          <div class="span12">
            <div class="" id="loginModal">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

              </div>
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">VER PLANO</a></li>
                    <li><a href="#create" data-toggle="tab">OBSERVACIONES</a></li>
                    <li><a href="#" data-toggle="tab">BITACORA DE SEGUIMIENTO</a></li>
                    <li><a href="#" data-toggle="tab">CANCELADA POR</a></li>
                     <li><a href="#" data-toggle="tab">ACTOS AFECTADOS / ANTECEDENTES</a></li>
                     <li><a href="#" data-toggle="tab">IDENTIFICACIÓN DEL DOCUMENTO</a></li>
                    <li><a href="#" data-toggle="tab">CALIFICACIÓN FISCAL</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <br>
                      <div class="form-row">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="create">
                    <div class="form-row">

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


<script>
// Get the modal

function modalOtros() {
 $("#tallModal").modal();
}



</script>
</body>
</HTML>
