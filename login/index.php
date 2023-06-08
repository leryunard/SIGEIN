<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../imagen/logo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Sistemas de Inventario</title>

 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!--Sweet alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css" href="../Estilos/estiloLogin.css">
  
</head>
<body class="hold-transition login-page"  id="myBody">
<div class="login-box" id="myDiv">
  <!-- /.login-logo -->
  <?php 
    session_start();
    if(isset($_SESSION['mensaje'])){
      $respuesta = $_SESSION['mensaje'];?>
      <script>
        Swal.fire({
          position: 'center',
          icon: 'error',
          title: '<?php echo $respuesta ?>',
          showConfirmButton: false,
          timer: 1500
        })
      </script>
  <?php
    }
  ?>
  <center >
  <img src="../imagen/logo.jpg" alt="Foto" style="width: 325px">
  </center>
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center" >
      <a id="myTitulo" class="h1"><b>Sistema de inventario</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresar datos de usuario</p>

      <form action="../app/controllers/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-12">
            <hr>
            <button type="submit" class="btn btn-primary btn-block" id="myBoton" >Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

<div class="🤚">
	<div class="👉"></div>
	<div class="👉"></div>
	<div class="👉"></div>
	<div class="👉"></div>
	<div class="🌴"></div>		
	<div class="👍"></div>
</div>

</body>
</html>
