<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Inventario</title>
  <link rel="shortcut icon" href="../public/images/logo.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!--Sweet alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="<?php echo $URL;?>/public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
-->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <a href="<?php echo $URL; ?>/index.php" class="brand-link">
          <img src="<?php echo $URL; ?>../public/images/text_logo.png" alt="Logo"
               style="opacity: .8; max-width: 92%; height: auto;">
      </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/public/images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres_sesion?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                <strong> <p style=color:white> Usuarios</strong></p>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> <p style=color:#FFFFFF>Listado de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style= color:#FFFFFF> Creación de usuarios</p>
                </a>
              </li>
            </ul>
          </li>


          <!--Categorias navabar lado izquierdo-->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tags"></i>
              <p>
              <strong> <p style=color:#FFFFFF>Categorias</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/categorias/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF> Listado de categorías</p>
                </a>
              </li>
            </ul>
          </li>


          <!--ALMACEN navabar lado izquierdo-->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-truck-moving"></i>
              <p>
              <strong> <p style=color:#FFFFFF>Inventario</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/almacen/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Listado de productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/almacen/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Registrar producto</p>
                </a>
              </li>
            </ul>
          </li>

          <!--COMPRAS navabar lado izquierdo-->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-dollar-sign"></i> 
              <p>
              <strong> <p style=color:#FFFFFF>Compras</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/compras/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Listado de compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/compras/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Realizar Compra</p>
                </a>
              </li>
            </ul>
          </li>


          <!--Proveedores navabar lado izquierdo-->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-parachute-box"></i>
              <p>
              <strong> <p style=color:#FFFFFF>Proveedores</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/proveedores/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Listado de proveedores</p>
                </a>
              </li>
            </ul>
          </li>


          <!--ventas navabar lado izquierdo-->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-shopping-basket"></i> 
              <p>
              <strong> <p style=color:#FFFFFF>Ventas</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ventas/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Listado de Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/ventas/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF> Venta</p>
                </a>
              </li>
            </ul>
          </li>

            <!--ventas navabar lado izquierdo-->
            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-friends"></i> 
              <p>
              <strong> <p style=color:#FFFFFF>Clientes</p></strong>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style=color:#FFFFFF>Listado de Clientes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item" style="background-color:#ec3c3c;">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
              <strong> <p style=color:#FFFFFF>Cerrar Sesión</p></strong>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
