<!doctype html>
<html lang="es">
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">   

    <!-- Style -->
    <link rel="stylesheet" href="../../Assets/css/login.css">
    <link rel="stylesheet" href="../../Assets/css/style.css">
    <link rel="shortcut icon" href="../../Assets/images/isotipo-cultura.ico">   
    <title>Agora | Añadir-Area</title> 
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
            <li><a href="#"><span class="icon-sign-out mr-3"></span>Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
        </div>
    </aside>
<main>
    <!--Registro-->
<div class="container">
    <div class="row py-5 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="../../Assets/images/undraw_knowledge_g5gf.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Crear Área</h1>
            <p class="font-italic text-muted mb-0">Por favor rellena estos campos para crear un nuevo espacio.</p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="../Persistencia/insert_area.php" method="POST">
                <div class="row">

                    <!-- Nombre del área -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-receipt mr-3"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="curso_nombre" placeholder="Nombre de Área" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Job -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-assignment_ind mr-3"></i>
                            </span>
                        </div>
                        <select id="job" name="usuario_rango" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="Undefined">Seleccionar Cargo</option>
                            <option value="Coordinador">Coordinador</option>
                            <option value="Monitor">Monitor</option>
                            <option value="Estudiante">Estudiante</option>
                        </select>
                    </div>

                    <!-- Dirección -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-map-marker mr-3"></i>
                            </span>
                        </div>
                        <input id="firstName" type="text" name="usuario_direccion" placeholder="Dirección" class="form-control bg-white border-left-0 border-md">
                    </div>

                     <!-- Nacimiento -->
                     <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-calendar mr-3"></i>
                            </span>
                        </div>
                        <input id="firstName" type="date" name="usuario_nacimiento" placeholder="Nacimiento" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-envelope mr-3"></i>
                            </span>
                        </div>
                        <input id="email" type="email" name="usuario_correo" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Job -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-assignment_ind mr-3"></i>
                            </span>
                        </div>
                        <select id="job" name="usuario_rango" class="form-control custom-select bg-white border-left-0 border-md">
                            <option value="Undefined">Seleccionar Cargo</option>
                            <option value="Coordinador">Coordinador</option>
                            <option value="Monitor">Monitor</option>
                            <option value="Estudiante">Estudiante</option>
                        </select>
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-lock mr-3"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="usuario_contrasena" placeholder="Contraseña" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password Confirmation -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="icon-lock mr-3"></i>
                            </span>
                        </div>
                        <input id="passwordConfirmation" type="text" name="confirmacion_contrasena" placeholder="Confirmar Contraseña" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" class="btn btn-primary btn-block py-2" value="Crear Cuenta">                        </a>
                    </div>
                </div>
            </form>
        </div>
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