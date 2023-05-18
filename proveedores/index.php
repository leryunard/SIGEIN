<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de Proveedores
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-create">
             <i class="fa fa-plus"></i> Nuevo Proveedor
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
                  <h3 class="card-title">Proveedores Registrados</h3>

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
                        <th><center># Proveedor</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Telefono</center></th>
                        <th><center>Empresa</center></th>
                        <th><center>Email</center></th>
                        <th><center>Dirección</center></th>
                        <th><center>Acción</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          $contador = 0;
                          foreach ($proveedores_datos as $proveedor_dato){
                           $contador = $contador + 1;
                           $id_proveedor =$proveedor_dato['id_proveedor'];
                           $nombre_proveedor = $proveedor_dato['nombre_proveedor'];
                           $celular = $proveedor_dato['celular'];
                           $telefono = $proveedor_dato['telefono'];
                           $empresa = $proveedor_dato['empresa'];
                           $email_proveedor = $proveedor_dato['email'];
                           $direccion = $proveedor_dato['direccion']
                            ?>
                          <tr>
                            <td><center><?php echo $contador?></center></td>
                            <td><center><?php echo $proveedor_dato['nombre_proveedor']?></center></td>

                            <td><center><a href="https://wa.me/503<?php echo $proveedor_dato['celular'];?>" target="_blank" class="btn btn-success">
                            <?php echo $proveedor_dato['celular']?>
                            </a></center></td>
                            
                            <td><center><?php echo $proveedor_dato['telefono']?></center></td>
                            <td><center><?php echo $proveedor_dato['empresa'] ?></center></td>
                            <td><center><?php echo $proveedor_dato['email']?></center></td>
                            <td><center><?php echo $proveedor_dato['direccion']?></center></td>
                            <td><center>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modal-update<?php echo $id_proveedor;?>">
                                     <i class="fa fa-pencil-alt"></i> Editar proveedor
                                  </button>
                                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#modal-delete<?php echo $id_proveedor;?>">
                                     <i class="fa fa-trash"></i> Borrar proveedor
                                  </button>

                                <!--MODAL PARA ACTUALIZAR PROVEEDOR-->
                                <div class="modal fade" id="modal-update<?php echo $id_proveedor;?>">
                                                <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:green; color:white">
                                                                  <h4 class="modal-title">Actualizar Proveedor</h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Nombre del Proveedor</label>
                                                                        <input type="text" id="nombre_proveedor<?php echo $id_proveedor;?>" value="<?php echo $nombre_proveedor;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_proveedor<?php echo $id_proveedor;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Celular</label>
                                                                        <input type="number" id="celular<?php echo $id_proveedor;?>" value="<?php echo $celular;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_celular<?php echo $id_proveedor;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Teléfono</label>
                                                                        <input type="number" id="telefono<?php echo $id_proveedor;?>" value="<?php echo $telefono;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_telefono">*Este campo es requerido</small>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Empresa</label>
                                                                        <input type="text" id="empresa<?php echo $id_proveedor;?>" value="<?php echo $empresa;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_empresa<?php echo $id_proveedor;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input type="email" id="email_proveedor<?php echo $id_proveedor?>" value="<?php echo $email_proveedor;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_email">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Dirección</label>
                                                                        <textarea rows="" id="direccion<?php echo $id_proveedor;?>" rows="3" cols="30" class="form-control"><?php echo $direccion?></textarea>
                                                                        <small style="color:red;display:none;" id="lbl_direccion<?php echo $id_proveedor;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                  </div>
                                                                  <div id="respuesta_update<?php echo $id_proveedor;?>"></div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                          <button type="button" class="btn btn-success" id="btn_update<?php echo $id_proveedor;?>">Actualizar Proveedor</button>
                                                        </div>
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_update<?php echo $id_proveedor;?>').click(function(){
                                            //alert(<?php echo $id_proveedor;?>);
                                            var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor;?>').val();
                                            var celular = $('#celular<?php echo $id_proveedor;?>').val();
                                            var telefono = $('#telefono<?php echo $id_proveedor;?>').val();
                                            var empresa = $('#empresa<?php echo $id_proveedor;?>').val();
                                            var email_proveedor = $('#email_proveedor<?php echo $id_proveedor;?>').val();
                                            var direccion = $('#direccion<?php echo $id_proveedor;?>').val();
                                            var id_proveedor = '<?php echo $id_proveedor;?>';
                                            
                                            if(nombre_proveedor == ""){
                                              $('#nombre_proveedor<?php echo $id_proveedor;?>').focus();
                                              $('#lbl_proveedor<?php echo $id_proveedor;?>').css('display','block');
                                            }
                                            else if (celular == ""){
                                              $('#celular<?php echo $id_proveedor;?>').focus();
                                              $('#lbl_celular<?php echo $id_proveedor;?>').css('display','block');
                                            }else if (empresa == "") {
                                              $('#empresa<?php echo $id_proveedor;?>').focus();
                                              $('#lbl_empresa<?php echo $id_proveedor;?>').css('display','block');
                                            }else if (direccion == ""){
                                              $('#direccion<?php echo $id_proveedor;?>').focus();
                                              $('#lbl_direccion<?php echo $id_proveedor;?>').css('display','block');
                                            }else{
                                            var url = "../app/controllers/proveedores/update.php";
                                            $.get(url,{id_proveedor:id_proveedor,nombre_proveedor:nombre_proveedor,celular:celular,
                                            telefono:telefono,empresa:empresa,email_proveedor:email_proveedor,direccion:direccion}, function (datos){
                                            $('#respuesta_update<?php echo $id_proveedor;?>').html(datos);
                                              });
                                            }
                                          });
                                        </script>

                                </div>


                               <!--MODAL PARA BORRAR PROVEEDOR-->
                            <div class="modal fade" id="modal-delete<?php echo $id_proveedor;?>">
                                     <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                    <div class="modal-header" style="background-color:red; color:white">
                                     <h4 class="modal-title">Borrar Proveedor</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                             <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Nombre del Proveedor</label>
                                    <input type="text" id="nombre_proveedor<?php echo $id_proveedor;?>" value="<?php echo $nombre_proveedor;?>" class="form-control" disabled>
                                    <small style="color:red;display:none;" id="lbl_proveedor">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="number" id="celular<?php echo $id_proveedor;?>" value="<?php echo $celular?>" class="form-control" disabled>
                                    <small style="color:red;display:none;" id="lbl_celular">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="number" id="telefono<?php echo $telefono;?>" value="<?php echo $telefono;?>" class="form-control" disabled>
                                    <small style="color:red;display:none;" id="lbl_telefono">*Este campo es requerido</small>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Empresa</label>
                                    <input type="text" id="empresa<?php echo $id_proveedor;?>" value="<?php echo $empresa;?>" class="form-control" disabled>
                                    <small style="color:red;display:none;" id="lbl_empresa">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="email_proveedor<?php echo $id_proveedor?>" value="<?php echo $email_proveedor;?>" class="form-control" disabled>
                                    <small style="color:red;display:none;" id="lbl_email">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Dirección</label>
                                    <textarea rows="" id="direccion<?php echo $direccion;?>" rows="3" cols="30" disabled class="form-control"><?php echo $direccion;?></textarea>
                                    <small style="color:red;display:none;" id="lbl_direccion">*Este campo es requerido</small>
                                  </div>
                               </div>
                               
                              </div>
                            </div>
                                   <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_proveedor;?>">Eliminar Proveedor</button>
                                    </div>
                               </div>
                                          <!-- /.modal-content -->
                                </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_delete<?php echo $id_proveedor;?>').click(function(){
                                            //alert(<?php echo $id_proveedor;?>);
                                            var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor;?>').val();
                                            var celular = $('#celular<?php echo $id_proveedor;?>').val();
                                            var telefono = $('#telefono<?php echo $id_proveedor?>').val();
                                            var empresa = $('#empresa<?php echo $id_proveedor?>').val();
                                            var email_proveedor = $('#email_proveedor<?php echo $id_proveedor;?>');
                                            var direccion = $('#direccion<?php echo $id_proveedor;?>');
                                            var id_proveedor = <?php echo $id_proveedor;?>;

                                            var url = "../app/controllers/proveedores/delete.php";
                                            $.get(url,{id_proveedor:id_proveedor}, function (datos){
                                            $('#respuesta_delete<?php echo $id_proveedor;?>').html(datos);
                                              });
                                          });
                                        </script>
                                        <div id="respuesta_delete<?php echo $id_proveedor;?>"></div>
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
                  <th><center># Proveedor</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Telefono</center></th>
                        <th><center>Empresa</center></th>
                        <th><center>Email</center></th>
                        <th><center>Dirección</center></th>
                        <th><center>Acción</center></th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
              "infoEmpty": "Mostrando 0 a 0 de 0 Proveedores",
              "infoFiltered": "(Filtrado de _MAX_ total Proveedores)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Proveedores",
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

<!--Modal para registrar proveedor-->
<div class="modal fade" id="modal-create">
                 <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                            <div class="modal-header" style="background-color:blue; color:white">
                                  <h4 class="modal-title">Crear Nuevo Proveedor</h4>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                         <div class="modal-body">
                            <div class="row">
                               <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Nombre del Proveedor</label>
                                    <input type="text" id="nombre_proveedor" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_proveedor">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="number" id="celular" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_celular">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="number" id="telefono" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_telefono">*Este campo es requerido</small>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Empresa</label>
                                    <input type="text" id="empresa" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_empresa">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="email_proveedor" class="form-control" required>
                                    <small style="color:red;display:none;" id="lbl_email">*Este campo es requerido</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Dirección</label>
                                    <textarea rows="" id="direccion" rows="3" cols="30" class="form-control"></textarea>
                                    <small style="color:red;display:none;" id="lbl_direccion">*Este campo es requerido</small>
                                  </div>
                               </div>
                               
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="button" class="btn btn-primary" id="btn_create">Guardar proveedor</button>
                        </div>
                    </div>
          <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
       </div>

       <script>
          $('#btn_create').click(function () {
            var nombre_proveedor = $('#nombre_proveedor').val();
            var celular = $('#celular').val();
            var telefono = $('#telefono').val();
            var empresa = $('#empresa').val();
            var email_proveedor = $('#email_proveedor').val();
            var direccion = $('#direccion').val();
            //alert(nombre_categoria);
            if(nombre_proveedor == ""){
              $('#nombre_proveedor').focus();
              $('#lbl_proveedor').css('display','block');
            }else if(celular == ""){
              $('#celular').focus();
              $('#lbl_celular').css('display','block');
            }else if (empresa ==""){
              $('#empresa').focus();
              $('#lbl_empresa').css('display', 'block');
            }else if(direccion == ""){
              $('#direccion').focus();
              $('#lbl_direccion').css('display', 'block');
            } else{
            var url = "../app/controllers/proveedores/registro_de_proveedores.php";

            $.get(url,{nombre_proveedor:nombre_proveedor, celular:celular, telefono:telefono, empresa:empresa,
            email_proveedor:email_proveedor,direccion:direccion}, function (datos){
              $('#respuesta').html(datos);
            })
          };
          });
       </script>
     <div id="respuesta"> </div>   


