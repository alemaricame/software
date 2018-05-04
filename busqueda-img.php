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

  <!--ESTILOS-->
  <style type="text/css">
      body{
        background-color:#EFEFEF;
      }
  </style>
  <!-- HEADER -->
  <body>
    <!-- HEADER -->
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

    <!-- body -->
    <br>
    <form>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">BUSQUEDA DE IMAGENES</div>
          <div class="panel-body">

            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="">PARTIDA</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">LIBRO</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">TOMO</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">SECCION</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="2da">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">SERIE</label>
                <input type="passtextword" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">BIS</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">AÑO</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
          </div>
        </div>

    </form>
    <div class="panel panel-default">
      <div class="panel-heading">IMAGENES</div>
      <div class="panel-body">

        <div class="form-row">

          <table class="table table-bordered">

            <!--Table head-->
            <thead class="mdb-color darken-3">
              <tr class="text-white">
                <th>#</th>
                <th>DESCRIPCION</th>
                <th>TIPO</th>
                <th>PARTIDA</th>
                <th>LIBRO</th>
                <th>TOMO</th>
                <th>SECCION</th>
                <th>SERIE</th>
                <th>BIS</th>
                <th>AÑO</th>
                <th>CSC</th>
                  <th>IMG</th>
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
                <td>@mdo</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><button type="button" class="btn btn-primary">VER</button></td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td><button type="button" class="btn btn-primary">VER</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td><button type="button" class="btn btn-primary">VER</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                 <td>the Bird</td>
                <td>@twitter</td>
                <td>@twitter</td>
                <td><button type="button" class="btn btn-primary">VER</button></td>
              </tr>

            </tbody>
            <!--Table body-->

          </table>

        </div>
      </div>
    </div>
    </div>
  </body>
  <script>
    $(document).ready(function() {
      $('#datePicker')
        .datepicker({
          autoclose: true,
          format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
          // Revalidate the date field
          $('#eventForm').formValidation('revalidateField', 'date');
        });
      $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          name: {
            validators: {
              notEmpty: {
                message: 'The name is required'
              }
            }
          },
          date: {
            validators: {
              notEmpty: {
                message: 'The date is required'
              },
              date: {
                format: 'MM/DD/YYYY',
                message: 'The date is not a valid'
              }
            }
          }
        }
      });
    });
    /html>
