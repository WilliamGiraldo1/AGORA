<!doctype html>
<html lang="es" x-data="data()">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../Assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../Assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../Tablas/assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../../Tablas/assets/js/init-alpine.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">   

    <!-- Style -->
    <link rel="stylesheet" href="../../Assets/css/login.css">
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="shortcut icon" href="../../Assets/images/isotipo-cultura.ico">  
    <title>Agora | Estadisticas</title>  
    </head>
    <body>

    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
      </div>
      <div class="side-inner">
       
        <div class="profile">
          <img src="../../Assets/images/person_3.jpg" alt="Image" class="img-fluid">
          <h3 class="name">Fredy Gaviria</h3>
          <span class="country">Coordinador</span>
        </div>

        
        <div class="nav-menu">
          <ul>
            <li class="accordion">
              <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsible" >                                                           
                <span class="icon-user mr-3"></span>Perfiles
              </a>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                <div>
                  <ul>
                    <li><a href="#">Perfil Personal</a></li>
                    <li><a href="view_admin.php">Perfiles Administrativos</a></li>
                    <li><a href="view_students.php">Perfiles Estudiantiles</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <li><a href="view_charts.php"><span class="icon-pie-chart mr-3"></span>Estadisticas</a></li>

            <!--<li class="accordion">
              <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsible">
                <span class="icon-wrench mr-3"></span>Preferencias
              </a>

              <div id="collapseThree" class="collapse" aria-labelledby="headingOne">
                <div>
                  <ul>
                    <li><a href="#">Restricción de perfiles</a></li>
                    <li><a href="#">Usuarios Bloqueados</a></li>
                    <li><a href="#">Página no registrados</a></li>
                  </ul>
                </div>
              </div>
            </li>-->

            <li class="accordion">
              <a href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" class="collapsible">
                <span class="icon-plus mr-3"></span>Añadir
              </a>

              <div id="collapsefour" class="collapse" aria-labelledby="headingOne">
                <div>
                  <ul>
                    <li><a href="more_area.php">Añadir área</a></li>
                    <li><a href="more_person.php">Añadir Personal</a></li>
                  </ul>
                </div>
              </div>
            </li>


            <li><a href="#"><span class="icon-photo mr-3"></span>Galería</a></li>
            <li><a href="#"><span class="icon-calendar mr-3"></span>Horarios</a></li>
            <li><a href="#"><span class="icon-file-text mr-3"></span>Actividades</a></li>
            <li><a href="#"><span class="icon-code mr-3" data-modal="#modal" class="modal__trigger"></span>Acerca de</a></li>
            <li><a href="../../Assets/PHP/session_destroy.php"><span class="icon-sign-out mr-3"></span>Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
        </div>
    </aside>
<main>
   <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center" >
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info" id="cajasa">
                            <h3 class="box-title">Registros</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">911</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </main>
      </div>
    </div>
</main>
    <script src="../../Assets/js/Func_login.js"></script>
    <script src="../../Assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../Assets/js/popper.min.js"></script>
    <script src="../../Assets/js/bootstrap.min.js"></script>
    <script src="../../Assets/js/main.js"></script>

<!--Enlaces dashboard-->
 <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/app-style-switcher.js"></script>
    <script src="../assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="../assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/js/pages/dashboards/dashboard1.js"></script>
    
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="../assets/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.min.css" rel="stylesheet">

    <style>
      #cajasa{
        margin-left: 30px;
      }
    </style>
  </body>
</html>