<?php
$nombreusuario = $_POST['nombreusuario'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="icon" type="image/png" href="../img/logo-nave.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medikal-HCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styleapp.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/examlab.css">

    <!-- Js -->
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="..///ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/min/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/google-map-init.js"></script>


    <script src="../js/main.js"></script>


  </head>
  <body>


        <!-- Slider Start -->
        <section id="global-header">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="block">
                  <h1>Perfil de Usuario</h1>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="block">
                  <?php echo "<h5 style='text-align: right; margin-right:20px'>Usuario: $nombreusuario </h5>" ;?>
                  <h5 style="text-align: right; margin-right:20px"><a href="../index.php" >SALIR</h5>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Examenes Laboratorio Form Start -->


              <section id="registrarse-form">
          <div class="container">
            <div class="block">
              <form>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">

                      <h4 class="underline">Información del Usuario</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                      <label class="form-label"> Nombre del Paciente:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label class="form-label"> Johnny Calderon</label>
                    </div>

                        <div class="col-md-2 col-sm-2">
                      <label class="form-label"> Correo Electronico:</label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label class="form-label"> johnny_calderon94@gmail.com</label>
                    </div>

                        <div class="col-md-2 col-sm-2">
                      <label class="form-label"> ID: </label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label class="form-label"> 0912345678 </label>
                    </div>

                               <div class="col-md-2 col-sm-2">
                      <label class="form-label"> Sexo: </label>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label class="form-label"> Masculino</label>
                    </div>
                  </div>


                  <div class="row"><p></p></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h4 class="underline">Servicios </h4>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-2 col-sm-2">
                       <div class="image">
                        <a href="HCE-FichaUsuario.php"><img src="../img/Ficha.redimensionado.png" alt="ficha"/></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                         <div class="image">
                           <a href="HCE-HistoriaResum.php"><img src="../img/Resumido%20HC.redimensionado.png" alt="Resumido"/></a>
                         </div>
                     </div>
                     <div class="col-md-2 col-sm-2">
                          <div class="image">
                             <a href="HCE-ConsultaExterna.php"><img src="../img/consultaEx2.redimensionado.png" alt="Consulta"/></a>
                          </div>
                     </div>
                       <div class="col-md-2 col-sm-2">
                        <div class="image">
                         <a href="HTE-Emergencias.php"><img src="../img/Urgencia.redimensionado.png" alt="Urgencia"/></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="image">
                           <a href="HCE-Laboratorio.php"><img src="../img/ExLab.redimensionado.png" alt="Examenes"/></a>
                          </div>
                    </div>

                  </div>



                </div>
              </form>
            </div>
          </div>
        </section>



        <!-- Call to action Start -->
      <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>Experiencia de Usuario.</h2>
              <p>Ver las experiencia de nuestro usuarios nos da ese empujon a seguir actualizando nuestros contenidos, no es solo una pagina es un sitio pensado en tí.</p>
              <a class="btn btn-default btn-call-to-action" href="#" >Ver Historias</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                     <li><a href="HCE-Main.php">Main</a></li>
                <li><a href="HCE-ConsultaExterna.php">C.Externa</a></li>
                  <li><a href="HCE-FichaUsuario.php">Ficha usuario</a></li>
                  <li><a href="HCE-HistoriaResum.php">H. Resumida</a></li>
                  <li><a href="HCE-Laboratorio.php">Laboratorio</a></li>
                 <li><a href="HTE-Emergencias.php">Emergencia </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
