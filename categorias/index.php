<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/categorias/listado_de_categorias.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"><p style=color:#1E90FF>Listado de Categorías </p>
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-create">
             <i class="fa fa-plus"></i> Nueva Categoría
            </button>
            </h1>

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
                  <h3 class="card-title">Categorías Registradas</h3>

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
                        <th><center># Categoría</center></th>
                        <th><center>Categoría</center></th>
                        <th><center>Acciones</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          $contador = 0;
                          foreach ($categorias_datos as $categora_dato){
                           $contador = $contador + 1;
                           $id_categoria =$categora_dato['id_categoria'];
                           $nombre_categoria = $categora_dato['nombre_categoria'] ?>
                          <tr>
                            <td><center><?php echo $contador?></center></td>
                            <td><center><?php echo $categora_dato['nombre_categoria']?></center></td>
                            <td><center>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modal-update<?php echo $id_categoria;?>">
                                     <i class="fa fa-pencil-alt"></i> Editar Categoría
                                  </button>
                                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#modal-delete<?php echo $id_categoria;?>">
                                     <i class="fa fa-trash"></i> Borrar Categoría
                                  </button>
                                <!--Modal para actualizar categorías-->
                                <div class="modal fade" id="modal-update<?php echo $id_categoria;?>">
                                                <div class="modal-dialog">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:green; color:white">
                                                                  <h4 class="modal-title">Actualizar Categoría</h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                    <label for="">Nombre de la categoría</label>
                                                                    <input type="text" id="nombre_categoria<?php echo $id_categoria;?>" value="<?php echo $nombre_categoria;?>" class="form-control">
                                                                    <small style="color:red;display:none;" id="lbl_update<?php echo $id_categoria;?>">*Este campo es requerido</small>
                                                                  </div>
                                                              </div>
                                                              
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                          <button type="button" class="btn btn-success" id="btn_update<?php echo $id_categoria;?>">Actualizar Categoría</button>
                                                        </div>
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_update<?php echo $id_categoria;?>').click(function(){
                                            //alert(<?php echo $id_categoria;?>);
                                            var nombre_categoria = $('#nombre_categoria<?php echo $id_categoria;?>').val();
                                            var id_categoria = <?php echo $id_categoria;?>
                                            
                                            if(nombre_categoria == ""){
                                              $('#nombre_categoria<?php echo $id_categoria;?>').focus();
                                              $('#lbl_update<?php echo $id_categoria;?>').css('display','block');
                                            }else{
                                            var url = "../app/controllers/categorias/update_de_categorias.php";
                                            $.get(url,{nombre_categoria:nombre_categoria,id_categoria:id_categoria}, function (datos){
                                            $('#respuesta_update<?php echo $id_categoria;?>').html(datos);
                                              });
                                            }
                                          });
                                        </script>
                                        <div id="respuesta_update<?php echo $id_categoria;?>"></div>
                                </div>


                               <!--Modal para borrar categorías-->
                                <div class="modal fade" id="modal-delete<?php echo $id_categoria;?>">
                                     <div class="modal-dialog">
                                     <div class="modal-content">
                                    <div class="modal-header" style="background-color:red; color:white">
                                     <h4 class="modal-title">Borrar Categoría</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                      <div class="modal-body">
                                        <div class="row">
                                           <div class="col-md-12">
                                                <div class="form-group">
                                                     <label for="">Nombre de la categoría</label>
                                                      <input type="text" id="nombre_categoria<?php echo $id_categoria;?>" value="<?php echo $nombre_categoria;?>" class="form-control" disabled>
                                                  </div>
                                             </div>
                                                                
                                          </div>
                                       </div>
                                         <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_categoria;?>">Eliminar Categoría</button>
                                          </div>
                                        </div>
                                          <!-- /.modal-content -->
                                    </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_delete<?php echo $id_categoria;?>').click(function(){
                                            //alert(<?php echo $id_categoria;?>);
                                            var nombre_categoria = $('#nombre_categoria<?php echo $id_categoria;?>').val();
                                            var id_categoria = <?php echo $id_categoria;?>

                                            var url = "../app/controllers/categorias/delete_de_categorias.php";
                                            $.get(url,{id_categoria:id_categoria}, function (datos){
                                            $('#respuesta_delete<?php echo $id_categoria;?>').html(datos);
                                              });
                                          });
                                        </script>
                                        <div id="respuesta_delete<?php echo $id_categoria;?>"></div>
                                    </div>                                                     
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
                  <th><center># Categoría</center></th>
                        <th><center>Categoría</center></th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorías",
              "infoEmpty": "Mostrando 0 a 0 de 0 Categorías",
              "infoFiltered": "(Filtrado de _MAX_ total Categorías)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Categorías",
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

<!--Modal para registrar categorías-->
<div class="modal fade" id="modal-create">
                 <div class="modal-dialog">
                      <div class="modal-content">
                            <div class="modal-header" style="background-color:blue; color:white">
                                  <h4 class="modal-title">Crear Nueva Categoría</h4>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                         <div class="modal-body">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="">Nombre de la categoría</label>
                                    <input type="text" id="nombre_categoria" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_create">*Este campo es requerido</small>
                                  </div>
                               </div>
                               
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" id="btn_create">Guardar Categoría</button>
                        </div>
                    </div>
          <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
       </div>

       <script>
          $('#btn_create').click(function () {
            var nombre_categoria = $('#nombre_categoria').val();
            //alert(nombre_categoria);
            if(nombre_categoria == ""){
              $('#nombre_categoria').focus();
              $('#lbl_create').css('display','block');
            }else{
            var url = "../app/controllers/categorias/registro_de_categorias.php";

            $.get(url,{nombre_categoria:nombre_categoria}, function (datos){
              $('#respuesta').html(datos);
            })
          };
          });
       </script>
     <div id="respuesta"> </div>   


