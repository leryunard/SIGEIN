<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/clientes/listado_de_cliente.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de Clientes 
            <button type="button" class="btn btn-info" data-toggle="modal"
                data-target="#modal-agregar-cliente">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Cliente
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
                  <h3 class="card-title">Clientes Registrados </h3>

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
                        <th><center># Cliente</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Nit</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Email</center></th>
                        <th><center>Acción</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          $contador = 0;
                          foreach ($clientes_datos as $cliente_dato){
                           $contador = $contador + 1;
                           $id_cliente = $cliente_dato['id_cliente'];
                           $nombre_cliente =$cliente_dato['nombre_cliente'];
                           $nit_cliente = $cliente_dato['nit_cliente'];
                           $celular_cliente = $cliente_dato['celular_cliente'];
                           $email_cliente = $cliente_dato['email'];
                            ?>
                          <tr>
                            <td><center><?php echo $contador?></center></td>
                            <td><center><?php echo $nombre_cliente?></center></td>
                            <td><center><?php echo $nit_cliente?></center></td>

                            <td><center><a href="https://wa.me/503<?php echo $celular_cliente;?>" target="_blank" class="btn btn-success">
                            <?php echo $celular_cliente?>
                            </a></center></td>
                            
                            
                            <td><center><?php echo $email_cliente;?></center></td>
                            <td><center>
                               <div class="btn-group">
                                  <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modal-update<?php echo $id_cliente;?>">
                                     <i class="fa fa-pencil-alt"></i> Editar Cliente
                                  </button>
                                  <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#modal-delete<?php echo $id_cliente;?>">
                                     <i class="fa fa-trash"></i> Borrar Cliente
                                  </button>

                                <!--MODAL PARA ACTUALIZAR PROVEEDOR-->
                                <div class="modal fade" id="modal-update<?php echo $id_cliente;?>">
                                                <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:green; color:white">
                                                                  <h4 class="modal-title">Actualizar Cliente</h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Nombre del Cliente</label>
                                                                        <input type="text" id="nombre_cliente<?php echo $id_cliente;?>" value="<?php echo $nombre_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_cliente<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Nit Cliente</label>
                                                                        <input type="text" id="nit_cliente<?php echo $id_cliente;?>" value="<?php echo $nit_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_nit<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>

                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input type="email" id="email_cliente<?php echo $id_cliente;?>" value="<?php echo $email_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_email<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Celular</label>
                                                                        <input type="number" id="celular_cliente<?php echo $id_cliente;?>" value="<?php echo $celular_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_celular<?php echo $id_cliente?>">*Este campo es requerido</small>
                                                                      </div>
                                                                  </div>
                                                                  <div id="respuesta_update<?php echo $id_cliente;?>"></div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                          <button type="button" class="btn btn-success" id="btn_update<?php echo $id_cliente;?>">Actualizar Proveedor</button>
                                                        </div>
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_update<?php echo $id_cliente;?>').click(function(){
                                            //alert(<?php echo $id_cliente;?>);
                                            var nombre_cliente = $('#nombre_cliente<?php echo $id_cliente;?>').val();
                                            var nit_cliente = $('#nit_cliente<?php echo $id_cliente;?>').val();
                                            var celular_cliente = $('#celular_cliente<?php echo $id_cliente?>').val();
                                            var email_cliente = $('#email_cliente<?php echo $id_cliente?>').val();
                                            var id_cliente = '<?php echo $id_cliente?>';
                                            
                                            if(nombre_cliente == ""){
                                              $('#nombre_cliente<?php echo $id_cliente;?>').focus();
                                              $('#lbl_cliente<?php echo $id_cliente;?>').css('display','block');
                                            }
                                            else if (celular_cliente == ""){
                                              $('#celular_cliente<?php echo $id_cliente;?>').focus();
                                              $('#lbl_celular<?php echo $id_cliente;?>').css('display','block');
                                            }else if (nit_cliente == "") {
                                              $('#nit_cliente<?php echo $id_cliente;?>').focus();
                                              $('#lbl_nit<?php echo $id_cliente;?>').css('display','block');
                                            }else if (email_cliente == ""){
                                              $('#email_cliente<?php echo $id_cliente;?>').focus();
                                              $('#lbl_email<?php echo $id_cliente;?>').css('display','block');
                                            }else{
                                            var url = "../app/controllers/clientes/update.php";
                                            $.get(url,{id_cliente:id_cliente,nombre_cliente:nombre_cliente,celular_cliente:celular_cliente,
                                            nit_cliente:nit_cliente,email_cliente:email_cliente}, function (datos){
                                            $('#respuesta_update<?php echo $id_cliente;?>').html(datos);
                                              });
                                            }
                                          });
                                        </script>

                                </div>


                               <!--MODAL PARA BORRAR PROVEEDOR-->
                            <div class="modal fade" id="modal-delete<?php echo $id_cliente;?>">
                                     <div class="modal-dialog modal-lg">
                                     <div class="modal-content">
                                    <div class="modal-header" style="background-color:red; color:white">
                                     <h4 class="modal-title">Eliminar Cliente</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                                            <div class="row">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Nombre del Cliente</label>
                                                                        <input type="text" id="nombre_cliente<?php echo $id_cliente;?>" value="<?php echo $nombre_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_cliente<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Nit Cliente</label>
                                                                        <input type="text" id="nit_cliente<?php echo $id_cliente;?>" value="<?php echo $nit_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_nit<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>

                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="form-group">
                                                                        <label for="">Email</label>
                                                                        <input type="email" id="email_cliente<?php echo $id_cliente;?>" value="<?php echo $email_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_email<?php echo $id_cliente;?>">*Este campo es requerido</small>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label for="">Celular</label>
                                                                        <input type="number" id="celular_cliente<?php echo $id_cliente;?>" value="<?php echo $celular_cliente;?>" class="form-control" required>
                                                                        <small style="color:red;display:none;" id="lbl_celular<?php echo $id_cliente?>">*Este campo es requerido</small>
                                                                      </div>
                                                                  </div>
                                                                  <div id="respuesta_delete<?php echo $id_cliente;?>"></div>                                                            </div>
                                                        </div>
                                   <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_cliente;?>">Eliminar Cliente</button>
                                    </div>
                               </div>
                                          <!-- /.modal-content -->
                                </div>
                                        <!-- /.modal-dialog -->
                                        <script>
                                          $('#btn_delete<?php echo $id_cliente;?>').click(function(){
                                            //alert(<?php echo $id_cliente;?>);
                                             var id_cliente = '<?php echo $id_cliente?>';

                                            var url = "../app/controllers/clientes/delete.php";
                                            $.get(url,{id_cliente:id_cliente}, function (datos){
                                            $('#respuesta_delete<?php echo $id_cliente;?>').html(datos);
                                              });
                                          });
                                        </script>
                                        
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
                  <th><center># Cliente</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Nit</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Email</center></th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
              "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
              "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Clientes",
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
<!--Modal para agregar clientes-->
<div class="modal fade" id="modal-agregar-cliente">
                          <div class="modal-dialog modal-sm">
                               <div class="modal-content">
                                    <div class="modal-header" style="background-color:#154300; color:white">
                                         <h4 class="modal-title">Agregar Cliente </h4> 
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                      <div class="modal-body">
                                        <form action="../app/controllers/clientes/crear_cliete_modal_index.php" method="post">
                                          <div class="form-group">
                                            <label for="">Nombre del Cliente</label>
                                            <input type="text" name="nombre_cliente" class="form-control" name="" value="">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Documendo de Identidad</label>
                                            <input type="text" name="documento_identidad" class="form-control" name="" value="">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Celular</label>
                                            <input type="text" name="celular_cliente" class="form-control" name="" value="">
                                          </div>
                                          <div class="form-group">
                                            <label for="">Correo Electronico</label>
                                            <input type="email" name="email_cliente" class="form-control" name="" value="">
                                            <hr>
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Guardar Cliente</button>
                                          </div>
                                        </form>
                                      </div>
                                        <div class="modal-footer justify-content-between">
                                                
                                        </div>
                                         <!-- /.modal-content -->
                                  </div>
                                      
                    </div>
                    
                </div>


