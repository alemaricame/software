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
  <link href="http://fastlearning.in/controller/css/css_files/bootstrap.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <!--ESTILOS-->
  <style type="text/css">
    header {
      width: 100%;
      /* Establecemos que el header abarque el 100% del documento */
      overflow: hidden;
      /* Eliminamos errores de float */
      background: rgb(27, 54, 71);
      margin-bottom: 20px;
    }
    @media (min-width: 1200px){
      .container {
        
         width: 1800px;
     }
    }
    #tallModal .modal-body p { 
      margin-bottom: 900px 
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
  </style>

  <body>
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
          <!-- Large modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">PREVIOS GRAVADOS</button>
          <br> <br>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="tallModal">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

              <div class="row">
                <div class="span12">
                  <div class="" id="loginModal">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3>GRAVADOS</h3>
                    </div>
                    <div class="modal-body">
                      <div class="well">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#login" data-toggle="tab">PREDIOS GRAVADOS</a></li>
                          <li><a href="#create" data-toggle="tab">ANTECEDENTES</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div class="tab-pane active in" id="login">
                          <br>
                            <div class="form-row">

                              <table class="table table-bordered">

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
                          <div class="tab-pane fade" id="create">
                          <br>
                            <div class="form-row">

                              <table class="table table-bordered">

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
    /html>