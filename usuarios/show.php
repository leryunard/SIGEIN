<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/show_usuario.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Datos de <?php echo $nombres?></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Información del usuario ID: <?php echo $id_usuario_get ?></h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <div class="row">
                      <div class ="col-md-12">
                            <div class="form-group">
                              <label for="nombre">Nombre: </label>
                              <input type="text" name="nombres" disabled class="form-control" value="<?php echo $nombres;?>">
                            </div>
                            <div class="form-group">
                              <label for="email">Correo Electronico: </label>
                              <input type="email" class="form-control" disabled name="email" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group">
                              <label for="email">Rol del Usuario: </label>
                              <input type="text" class="form-control" disabled name="rol" value="<?php echo $rol;?>">
                            </div>
                            <hr>
                            <div class="form-group">
                              <a href="index.php" class="btn btn-secondary">Volver</a>

                            </div>'

                      </div>
                    </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
<?php include('../layout/mensajes.php')?>
<?php include('../layout/parte2.php') ?>