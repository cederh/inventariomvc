<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?php echo ROUTE_URL?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo ROUTE_URL?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo ROUTE_URL?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo ROUTE_URL?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">¡Bienvenido!</h1>
              <p class="text-lead text-light">Inicia sesión para continuar</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">

            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Ingrese sus credenciales</small>
              </div>
              <form role="form" action="<?php echo ROUTE_URL.'/login'?>" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" name="user" placeholder="Usuario" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Contraseña" type="password">
                  </div>
                </div>
                <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && $parameters['errores'] != ''): ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger errores">
                          <?php echo $parameters['errores'] ?>
                        </div>
                    </div>
                </div>
              <?php endif; ?>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary my-4" value="Iniciar sesión">
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">

  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo ROUTE_URL?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo ROUTE_URL?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo ROUTE_URL?>/assets/js/argon.js?v=1.0.0"></script>
</body>

</html>
