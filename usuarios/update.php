<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/update_usuario.php');
include('../app/controllers/roles/listado_de_roles.php');
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
          <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Datos editables del usuario ID: <?php echo $id_usuario_get ?></h3>

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
                      <form action="../app/controllers/usuarios/update.php" method="post">
                            <input type="text" name="id" hidden value="<?php echo $id_usuario_get;?>">
                            <div class="form-group">
                              <label for="nombre">Nombre: </label>
                              <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" required>
                            </div>
                            <div class="form-group">
                              <label for="email">Correo Electronico: </label>
                              <input type="email" class="form-control" name="email" value="<?php echo $email;?>" required>
                            </div>
                            <div class="form-group">
                              <label for="rol">Rol del Usuario: </label>
                              <select class ="form-control" name="rol">
                                
                                <?php foreach ($roles_datos as $rol_dato){
                                  $rol_tabla = $rol_dato['rol'];
                                  $id_rol = $rol_dato['id_rol'];
                                  ?>
                                  <option value="<?php echo $id_rol;?>" 
                                  <?php
                                  if ($rol_tabla == $rol){ ?> selected = "selected" <?php } ?>>
                                  <?php echo $rol_tabla;?></option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Contraseña: </label>
                              <input type="password" name="password_user" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label for="">Repita la Contraseña: </label>
                              <input type="password" name="password_repeat" id="" class="form-control" required>
                            </div>
                            <hr>
                            <div class="form-group">
                              <a href="index.php" class="btn btn-secondary">Cancelar</a>
                               <button type="submit" class="btn btn-success">Actualizar</button>
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