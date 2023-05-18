<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/compras/listado_de_compras.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Resumen de Compras</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content ">
      <div class="container-fluid">
        <div class="row">
            <div class ="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Comrpas Realizadas</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                <div class="table table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                        <th><center>#</center></th>
                        <th><center># de Compra</center></th>
                        <th><center>Producto</center></th>
                        <th><center>Fecha Compra</center></th>
                        <th><center>Proveedor</center></th>
                        <th><center>Comprobante</center></th>
                        <th><center>Usuario</center></th>
                        <th><center>Precio Compra</center></th>
                        <th><center>Cantidad</center></th>
                        <th><center>Acciones</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          $contador = 0;
                          foreach ($compras_datos as $compra_dato){
                            $id_compra = $compra_dato['id_compra'] ?>
                            <tr>
                                <td><center><?php echo $contador = $contador + 1?></center></td>
                                <td><center><?php echo $compra_dato['num_compra']?></center></td>
                                <td><center>
                                <button type="button" class="btn btn-info " data-toggle="modal"
                                 data-target="#modal-producto<?php echo $id_compra;?>">
                                     <?php echo $compra_dato['nombre_producto'];?>
                                  </button>

                                   <!--MODAL PARA VISUALIZAR PRODUCTO-->
                                <div class="modal fade" id="modal-producto<?php echo $id_compra;?>">
                                                <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:#D2B4DE; color:white">
                                                                  <h4 class="modal-title">Datos del Producto: <?php echo $compra_dato['nombre_producto']?></h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <label for="">Codigo </label>
                                                                     <input type="text" disabled class="form-control" value="<?php echo $compra_dato['codigo']?>">
                                                                 </div>
                                                                 <div class="form-group">
                                                                     <label for="">Descripción </label>
                                                                    <input class="form-control" disabled name="" value="<?php echo $compra_dato['descripcion'];?>">
                                                                 </div>
                                                                 <div class="form-group">
                                                                    <label for="">Stock Mínimo</label>
                                                                    <input class="form-control" disabled value="<?php echo $compra_dato['stock_minimo'];?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="">Precio de Compra</label>
                                                                    <input class="form-control" disabled value="<?php echo $compra_dato['precio_compra_almacen'];?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                      <label for="">Categoría</label>
                                                                      <input disabled class="form-control" value="<?php echo $compra_dato['nombre_categoria'];?>">
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                  <div class="form-group">
                                                                     <label for="">Nombre</label>
                                                                     <input type="text" disabled class="form-control" value="<?php echo $compra_dato['nombre_producto']?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <label for="">Stock</label>
                                                                     <input class="form-control" disabled value="<?php echo $compra_dato['stock'];?>">
                                                                     </div>
                                                                     <div class="form-group">
                                                                      <label for="">Stock Máximo</label>
                                                                      <input class="form-control" disabled value="<?php echo $compra_dato['stock_maximo']?>">
                                                                     </div>
                                                                     <div class="form-group">
                                                                      <label for="">Precio de Venta</label>
                                                                      <input disabled class="form-control" value="<?php echo $compra_dato['precio_venta']?>">
                                                                     </div>
                                                                     <div class="form-group">
                                                                      <label for="">Usuario</label>
                                                                      <input class="form-control" disabled value="<?php echo $compra_dato['nombre_usuario_producto'];?>">
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                  <div class="form-group">
                                                                    <label for="">Fecha de Ingreso</label>
                                                                    <input class="form-control" disabled value="<?php echo $compra_dato['fecha_ingreso'];?>">
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="">Imagen</label>
                                                                    <img src="<?php echo $URL;?>/almacen/img_productos/<?php echo $compra_dato['imagen']?>" width="100%">
                                                                  </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                        
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                      </div> 
                                </div>
                                </center></td>
                                <td><center><?php echo $compra_dato['fecha_compra']?></center></td>
                                <td><center>
                                <button type="button" class="btn btn-info " data-toggle="modal"
                                 data-target="#modal-proveedor<?php echo $id_compra;?>">
                                     <?php echo $compra_dato['nombre_proveedor'];?>
                                  </button>  


                                  
                                   <!--MODAL PARA VISUALIZAR PROVEEDOR-->
                                <div class="modal fade" id="modal-proveedor<?php echo $id_compra;?>">
                                                <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:#D2B4DE; color:white">
                                                                  <h4 class="modal-title">Datos del Proveedor: <?php echo $compra_dato['nombre_proveedor']?></h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                          <div class = "row">
                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Nombre Proveedor</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $compra_dato['nombre_proveedor'];?>">
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="">Teléfono</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $compra_dato['telefono_proveedor']?>">
                                                              </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Empresa</label>
                                                                <input type="text" disabled class="form-control" value="<?php echo $compra_dato['empresa_proveedor']?>">
                                                              </div>
                                                              <div class="form_group">
                                                                <label for="">Email</label>
                                                                <input type="email" class="form-control" disabled value="<?php echo $compra_dato['email_proveedor']?>">
                                                              </div>
                                                            </div>
                                                            
                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Celular</label><br>
                                                                <a href="https://wa.me/503<?php echo $compra_dato['proveedor_celular'];?>" target="_blank" class="btn btn-info" >
                                                                  <i class="fas fa-phone "> </i> <?php echo $compra_dato['proveedor_celular'];?>
                                                                </a>
                                                          
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="">Dirección</label>
                                                                <textarea disabled class="form-control" rows="" cols=""><?php echo $compra_dato['direccion_proveedor']?></textarea>
                                                              </div>
                                                            </div>
                                                          </div>
                                                                
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                        
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                </div>
                             
                                </center></td>
                                <td><center><?php echo $compra_dato['comprobante']?></td>

                                <td><center>
                                <button type="button" class="btn btn-info " data-toggle="modal"
                                 data-target="#modal-usuario<?php echo $id_compra;?>">
                                     <?php echo $compra_dato['nombre_usuario_producto'];?>
                                </button>
                              
                                <div class="modal fade" id="modal-usuario<?php echo $id_compra;?>">
                                                <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                            <div class="modal-header" style="background-color:#D2B4DE; color:white">
                                                                  <h4 class="modal-title">Datos del Usuario: <?php echo $compra_dato['nombre_usuario_producto']?></h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        <div class="modal-body">
                                                          <div class = "row">
                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Nombre de Usuario</label>
                                                                <input disabled class="form-control" value="<?php echo $compra_dato['nombre_usuario_producto']?>">
                                                              </div>
                                                            </div>    
                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Correo</label>
                                                                <input disabled class="form-control" value="<?php echo $compra_dato['email_usuario'];?>">
                                                              </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label for="">Rol del Usuario</label>
                                                                <input disabled class="form-control" value="<?php echo $compra_dato['usuario_rol'];?>">
                                                              </div>
                                                            </div>

                                                          </div>
                                                        </div>
                                                      <div class="modal-footer justify-content-between">
                        
                                                    </div>
                                          <!-- /.modal-content -->
                                            </div>
                                </div>
                              
                              </center></td>

                                <td><center><?php echo $compra_dato['compra_producto_nueva']?></center></td>
                                <td><center><?php echo $compra_dato['cantidad']?></center></td>
                                <td><center>
                                  <div class="btn-group">
                                     <a href="./show.php?id=<?php echo $id_compra;?>" id type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                     <a href="./update.php?id=<?php echo $id_compra;?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pen"> Editar</i></a>
                                     <a href="./delete.php?id=<?php echo $id_compra;?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Borrar</i></a>
                                   </div>
                          </center>
                            </td> 
                            </tr>    
                            <?php 
                          }
                        ?>
                    </tbody>
                </table>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Compras",
              "infoEmpty": "Mostrando 0 a 0 de 0 Compras",
              "infoFiltered": "(Filtrado de _MAX_ total Compras)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Compras",
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
