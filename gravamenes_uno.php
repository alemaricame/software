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
<<<<<<< HEAD
    header {
      width: 100%;
      /* Establecemos que el header abarque el 100% del documento */
      overflow: hidden;
      /* Eliminamos errores de float */
      background: rgb(27, 54, 71);
      margin-bottom: 20px;
    }

    .wrapper {
      width: 90%;
      /* ancho 90% */
      max-width: auto;
      margin: auto;
      /* Centramos los elementos */
      overflow: hidden;
      /* Eliminamos errores de float */
    }
     @media (min-width: 1200px){
      .container {
        
         width: 1800px;
     }
    }


    header .logo {
      color: #fcfcfc;
      font-size: 30px;
      line-height: 100px;
      /* posicion del logo (centrado) */
      float: left;
    }

    header nav {
      float: right;
      line-height: 100px;
    }

    header nav a {
      display: inline-block;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      line-height: 100px;
      font-size: 12px;
      -webkit-transition: all 500ms ease;
      -o-transition: all 500ms ease;
      transition: all 500ms ease;
    }

    header nav a:hover {
      background: #ff9205;
      border-radius: 50px;
    }

    /*BARRA DE BUSCADOR*/

    #buscador {
      float: left;
      width: 35%;
      margin: 0;
    }

    /*==============++++================*/

    .menu {
      height: 200px;
      width: 200px;
      position: relative;
      margin: auto;
      padding-top: 100px;
      border: 15px solid transparent;
      -moz-border-radius: 100%;
      -webkit-border-radius: 100%;
      border-radius: 100%;
      -moz-transition: 0.3s;
      -o-transition: 0.3s;
      -webkit-transition: 0.3s;
      transition: 0.3s;
      cursor: pointer;
      color: #fff;
    }

    .bar {
      height: 15px;
      width: 100px;
      display: block;
      margin: 100px auto;
      position: relative;
      background-color: rgv(25, 25, 25);
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      -moz-transition: 0.4s;
      -o-transition: 0.4s;
      -webkit-transition: 0.4s;
      transition: 0.4s;
    }

    .model-1 {
      background-color: #0093c9;
      font-size: 30px;
    }

    .model-2 {
      background-color: #bebfc4;
      font-size: 30px;
    }

    footer {
      position: fixed;
      bottom: 0;
      left: 0;
      height: 70px;
      background-color: rgb(27, 54, 71);
      width: 100%;
      color: #fff;
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
  <br><br><br>
  <!-- FIN DE HEADER -->
  <style type="text/css">
    #eventForm .form-control-feedback {
      top: 0;
      right: -15px;
    }
    
=======
  body{
    background-color:#EFEFEF;
  }
>>>>>>> 1c5b464d3f779ea4d6590f2262631701e2c97e56
  </style>

  <body>

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
          <div class="panel-heading">CONSULTA DE GRAVAMENES</div>
          <div class="panel-body">

            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="">PARTIDA</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">LIBRO</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">TOMO</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4">SECCION</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="2da">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">BIS</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">GRAVAMENES</div>
          <div class="panel-body">

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">ACTO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">SUBNATURALEZA</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>

              <label class="col-xs-3 control-label">Date</label>
              <div class="form-group col-md-4">
                <div class="input-group input-append date" id="datePicker">
                  <input type="text" class="form-control" name="date" />
                  <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="">MONTO (1)</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label for="">EN</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">MONTO (2)</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">EN</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">ACREEDOR</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="">DEUDOR</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">DESCRIPCION</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">SUPERFICIE TERRENO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="">DURACION</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="">ESTATUS</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>

            </div>

          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">IDENTIFICACION</div>
          <div class="panel-body">

            <div class="form-row">

              <div class="form-group col-md-6">
                <label for="">NUMERO DE CONTROL</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-6">
                <label for="">AÑO</label>
                <input type="email" class="form-control" id="" placeholder="">
              </div>

            </div>
          </div>
        </div>
        <div class="form-row">
          <button type="button" class="btn btn-info" style="max-width:400px" data-toggle="collapse" data-target="#demo">PREVIOS GRAVADOS</button>
          <button type="button" class="btn btn-info" style="max-width:400px" data-toggle="collapse" data-target="#demo2">ANTECEDENTES</button>
          <br> <br>
        </div>
        <div  id="demo" class="panel panel-default collapse"  >
          <div class="panel-heading">GRAVADOS</div>
          <div class="panel-body">

            <div class="form-row" >

              <table class="table table-bordered" >

                <!--Table head-->
                <thead class="mdb-color darken-3">
                  <tr class="text-white">
                    <th>#</th>
                    <th>CATASTRAL</th>
                    <th>SUP. TERRENO</th>
                    <th>MUNICIPIO</th>
                    <th>MODULO</th>
                    <th>LOTE</th>
                    <th>MANZANA</th>
                    <th>ESTATUS</th>
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
                  </tr>

                </tbody>
                <!--Table body-->

              </table>

            </div>

            <div class="panel-heading">UBICACION</div>
            <div class="row-fluid">
              <div class="span8">
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
              </div>

              <div class="span4">

    		</address>
              </div>
            </div>
          </div>
        </div>

              <div  id="demo2" class="panel panel-default collapse"  >
          <div class="panel-heading">ANTECEDENTES</div>
          <div class="panel-body">

            <div class="form-row" >

              <table class="table table-bordered" >

                <!--Table head-->
                <thead class="mdb-color darken-3">
                  <tr class="text-white">
                    <th>#</th>
                    <th>PARTIDA</th>
                    <th>LIBRO</th>
                    <th>TOMO</th>
                    <th>SECCION</th>
                    <th>SERIE</th>
                    <th>BIS</th>
                    <th>PASO A FOLIO REAL</th>
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
                  </tr>

                </tbody>
                <!--Table body-->

              </table>

            </div>

          </div>
        </div>
      </div>

      </div>

      </div>

    </form>
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
    //ocultar div
    <
    /html>
