<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title><?php echo  SITE_NAME?></title>
   <!-- Favicon -->
   <link href="<?php echo ROUTE_URL?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
   <!-- Icons -->
   <link href="<?php echo ROUTE_URL?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
   <link href="<?php echo ROUTE_URL?>/fa/css/all.min.css" rel="stylesheet">
   <!-- Argon CSS -->
   <link type="text/css" href="<?php echo ROUTE_URL?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
   <link type="text/css" href="<?php echo ROUTE_URL?>/css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Sidenav -->
   <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
      <div class="container-fluid">
         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <!-- Brand -->
         <a class="navbar-brand pt-0" href="./index.html">
            <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
         </a>
         <!-- User -->
         <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
               <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ni ni-bell-55"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                     <!-- <span class="avatar avatar-sm rounded-circle">
                     <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
                     </span> -->
                  </div>
               </a>
               <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                     <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                  </div>
                  <a href="#" class="dropdown-item">
                     <i class="ni ni-single-02"></i>
                     <span>Mi perfil</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#!" class="dropdown-item">
                     <i class="ni ni-user-run"></i>
                     <span>Cerrar sesión</span>
                  </a>
               </div>
            </li>
         </ul>
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
               <div class="row">
                  <div class="col-6 collapse-brand">
                     <a href="./index.html">
                        <img src="./assets/img/brand/blue.png">
                     </a>
                  </div>
                  <div class="col-6 collapse-close">
                     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                        <span></span>
                        <span></span>
                     </button>
                  </div>
               </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Inicio') ? 'active' : ''?>">
                  <a class="nav-link" href="<?php echo ROUTE_URL?>">
                     <i class="fas fa-home text-primary"></i> Inicio
                  </a>
               </li>
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Inventario') ? 'active' : ''?>">
                  <a class="nav-link" href="#">
                     <i class="fas fa-boxes text-green"></i> Inventario
                  </a>
               </li>
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Categorías') ? 'active' : ''?>">
                  <a class="nav-link" href="#">
                     <i class="fas fa-tags text-red"></i> Categorías
                  </a>
               </li>
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Proveedores') ? 'active' : ''?>">
                  <a class="nav-link" href="<?php echo ROUTE_URL?>/providers">
                     <i class="fas fa-truck-moving"></i> Proveedores
                  </a>
               </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Administrador</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Usuarios') ? 'active' : ''?>">
                  <a class="nav-link" href="<?php echo ROUTE_URL?>/users">
                     <i class="fas fa-users text-blue"></i> Usuarios
                  </a>
               </li>
               <li class="nav-item <?php echo $var = ($parameters['menu'] == 'Empresa') ? 'active' : ''?>">
                  <a class="nav-link" href="#">
                     <i class="fas fa-industry text-orange"></i> Empresa
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
      <!-- Top navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
         <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#"><?php echo $parameters['menu']?></a>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
               <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="media align-items-center">
                        <!-- <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                        </span> -->
                        <div class="media-body ml-2 d-none d-lg-block">
                           <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['user']->usu_nombre.' '.$_SESSION['user']->usu_apellido ?></span>
                        </div>
                     </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                     <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">¡Bienvenido!</h6>
                     </div>
                     <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Mi perfil</span>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="<?php echo ROUTE_URL.'/login/logout' ?>" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Cerrar sesión</span>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <!-- Header -->
      <div class="header bg-gradient-primary pb-8 pt-5 pt-md-5">
         <div class="container-fluid">
            <div class="header-body"></div>
         </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--7">
         <!-- Aqui va el contenido de la pagina. -->
