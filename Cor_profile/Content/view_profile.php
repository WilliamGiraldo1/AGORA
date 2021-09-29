<?php
require_once '../../Assets/PHP/conexion-db.php';
$sql= "SELECT * FROM usuario WHERE Usuario_rango='Estudiante'";
$resultado= $conexion_bd ->query($sql);
?>


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
    <title>Agora | Estudiantes</title>  
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
              <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsible">                                                           
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

           <!-- <li class="accordion">
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

        </main>
      </div>
    </div>

</main>
    <script src="../../Assets/js/Func_login.js"></script>
    <script src="../../Assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../Assets/js/popper.min.js"></script>
    <script src="../../Assets/js/bootstrap.min.js"></script>
    <script src="../../Assets/js/main.js"></script>
  </body>
</html>