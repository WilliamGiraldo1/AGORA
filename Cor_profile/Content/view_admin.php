<?php
require_once '../../Assets/PHP/conexion-db.php';
$sql= "SELECT * FROM usuario WHERE Usuario_rango='Monitor' ORDER BY usuario_apellidos ASC";
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
    <title>Agora | Monitores</title>  
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
  <div class="container grid px-6 mx-auto">
            
            <!-- With actions -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
               <br>
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Usuario</th>
                      <th class="px-4 py-3">ID</th>
                      <th class="px-4 py-3">Tipo</th>
                      <th class="px-4 py-3">Estado</th>
                      <th class="px-4 py-3">Dirección</th>
                      <th class="px-4 py-3">Teléfono</th>
                      <th class="px-4 py-3">Correo</th>
                      <th class="px-4 py-3">Acciones</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <!--<img
                              class="object-cover w-full h-full rounded-full"
                              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                              alt=""
                              loading="lazy"
                            />-->
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold"> <?php echo $row['usuario_apellidos']; ?> </p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                            <?php echo $row['usuario_nombres']; ?>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?php echo $row['idUsuarios']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?php echo $row['id_tipo']; ?>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Estado
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?php echo $row['Usuario_direccion']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?php echo $row['Usuario_telefono']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?php echo $row['Usuario_correo']; ?>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                  </tbody>
                  <?php } ?>
                </table>
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
  </body>
</html>