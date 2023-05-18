<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Creación de Roles</h1>
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
                  <h3 class="card-title">Llene los campos adecuadamente</h3>

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
                        <form action="../app/controllers/roles/create.php" method="post">
                            <div class="form-group">
                              <label for="nombre">Nombre Rol: </label>
                              <input type="text" name="rol" class="form-control" value="" placeholder="Escriba el rol" required>
                            </div>
                            <hr>
                            <div class="form-group">
                              <a href="./index.php" class="btn btn-secondary">Cancelar</a>
                               <button type="submit" class="btn btn-primary">Guardar</button>
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
<?php include('../layout/parte2.php') ?>
<?php include('../layout/mensajes.php')?>