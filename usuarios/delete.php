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
          <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">¿Desea eliminar al usuario: <?php echo $nombres ?>?</h3>

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
                        <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                              <input type="text" name="id" hidden value="<?php echo $id_usuario_get;?>">
                              <div class="form-group">
                                <label for="nombre">Nombre: </label>
                                <p><?php echo $nombres?></p>
                                <input type="text" name="nombres" disabled class="form-control" value="<?php echo $nombres;?>" hidden>
                            </div>
                                <div class="form-group">
                                <label for="email">Correo Electronico: </label>
                                <p><?php echo $email?></p>
                                <input type="email" class="form-control" disabled name="email" value="<?php echo $email;?>" hidden>
                                </div>
                                <div class="form-group">
                                <label for="email">Rol del Usuario: </label>
                                <p><?php echo $rol?></p>
                                <input type="email" class="form-control" disabled name="email" value="<?php echo $rol;?>" hidden>
                                </div>
                                <hr>
                                <div class="form-group">
                                <a href="index.php" class="btn btn-secondary">Volver</a>
                                <button href="index.php" class="btn btn-danger">Eliminar</button>
                                </div>'

                        </form>
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