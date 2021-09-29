<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agora</title>
  <link href="Login_assets/Style/css" rel="stylesheet">
  <link rel="stylesheet" href="Login_assets/Style/materialdesignicons.min.css">
  <link rel="stylesheet" href="login_assets/Style/bootstrap.min.css">
  <link rel="stylesheet" href="login_assets/Style/login.css">
  <link rel="shortcut icon" href="Assets/images/isotipo-cultura.ico">  
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="Login_assets/Img/isotipo-cultura.png" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Iniciar Sesión</h1>
            <form action="Login_assets/PHP/login.php" method="POST">
              <div class="form-group">
                <label for="email">Documento</label>
                <input type="number" name="documento" id="email" class="form-control" placeholder="Ingrese su documento" pattern="[0-9]+" required="s">
              </div>
              <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input type="password" name="contrasena" id="password" class="form-control" placeholder="Ingrese su clave" requiered="">
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
            <a href="Non_profile/index.html" class="forgot-password-link">Continuar sin sesión</a>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="Login_assets/Img/login.svg" alt="login image" class="login-img">
          </p>
        </div>
      </div>
    </div>
  </main>
  <script src="login_assets/Style/jquery-3.4.1.min.js.descargar"></script>
  <script src="login_assets/Style/popper.min.js.descargar"></script>
  <script src="login_assets/Style/bootstrap.min.js.descargar"></script>
</body>
</html>