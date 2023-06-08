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
            <h1 class="m-0"><p style=color:green>Listado de usuarios</h1></p>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class ="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Usuarios Registrados</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th><center># Usuario</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Email</center></th>
                        <th><center>Rol</center></th>
                        <th><center>Acciones</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          include('../app/controllers/usuarios/listado_de_usuarios.php');
                          $contador = 0;
                          foreach ($usuarios_datos as $usuario_dato){
                           $id_usuario =$usuario_dato['id_usuario']; ?>
                          <tr>
                            <td><center><?php echo $contador = $contador + 1?></center></td>
                            <td><center><?php echo $usuario_dato['nombres']?></center></td>
                            <td><center><?php echo $usuario_dato['email']?></center></td>
                            <td><center><?php echo $usuario_dato['rol']?></center></td>
                            <td><center>
                               <div class="btn-group">
                                  <a href="./show.php?id=<?php echo $id_usuario;?>" id type="button" class="btn btn-info"><i class="fa fa-eye"></i> Ver</a>
                                  <a href="./update.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-success"><i class="fa fa-pen"> Editar</i></a>
                                  <a href="./delete.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"> Borrar</i></a>
                               </div>
                          </center>
                            </td> 
                          </tr>
                            <?php 
                          }
                        ?>
                    </tbody>
                  <tfoot>
                  <tr>
                  <th><center># Usuario</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Email</center></th>
                        <th><center>Rol</center></th>
                        <th><center>Acciones</center></th>
                  </tr>
                  </tfoot>
                </table>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
              "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
              "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Usuarios",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
             },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
