<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/listado_de_compras.php');
include('../app/controllers/compras/mostrar_compra.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">¿Dese eliminar la compra?</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
          <div class="row">
          <div class="col-md-12">
          <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Información detallada de la compra</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <!--Modal PARA BUSCAR PRODUCTO-->
                    <div class="modal fade" id="modal-buscar-producto">
                          <div class="modal-dialog modal-xl">
                               <div class="modal-content">
                                    <div class="modal-header" style="background-color:#154360; color:white">
                                         <h4 class="modal-title">Busqueda del Producto</h4>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>
              <div class="modal-body">
                <div class="table table-responsive">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                        <th><center># Pro.</center></th>
                        <th><center>Seleccionar</center></th>
                        <th><center>Código Producto</center></th>
                        <th><center>Categoría</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Imagen</center></th>
                        <th><center>Descripción</center></th>
                        <th><center>Stock</center></th>
                        <th><center>Precio Compra</center></th>
                        <th><center>Precio Venta</center></th>
                        <th><center>Fecha Compra</center></th>
                        <th><center>Usuario</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        
                    </tbody>
                </table>
                </div>
                                </div>
                        <div class="modal-footer justify-content-between">
                        
                          </div>
                                          <!-- /.modal-content -->
                       </div>
                    </div>
                </div>
                   
                    
                    <div class="row">
                      <div class ="col-md-12">
                            <div class="row">
                                <div class="col-md-9">
                                <div class="row">
                                <div class="col-md-4">
                                   <input type="" name="" value="<?php echo $id_producto_almacen;?>" id="id_producto" hidden>
                                    <div class="form-group">

                                        
                                      <label for="">Código:</label>
                                      <?php 
                                      function ceros ($numero){
                                        $len =0;
                                        $cantidad_ceros = 5;
                                        $aux = $numero;
                                        $pos = strlen($numero);
                                        $len = $cantidad_ceros-$pos;
                                        for ($i=0; $i<$len;$i++){
                                            $aux="0".$aux;
                                        }
                                        return $aux;
                                      }
                                      $contador_de_id = 1;
                                      foreach ($productos_datos as $producto_dato){
                                        $contador_de_id = $contador_de_id + 1;
                                      }
                                      ?>
                                      <div>
                                      <?php echo $codigo_producto;?> </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Categoría:</label>
                                        <div style="display:flex;">
                                            <?php echo $categoria_producto;?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Nombre Producto:</label><br>
                                     <?php echo $nombre_producto;?> 
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Usuario</label>
                                  <div>
                                          <?php echo $email_usuario_producto; ?>
                                     </div>   
                                </div>
                            </div>
                            <div class="col-md-8">
                                  <div class="form-group">
                                    <label for="">Descripción Producto</label><br>
                                    <textarea id="descripcion" readonly style="border: none; background: transparent;"rows="7" cols="45"><?php echo $descripcion_producto; ?></textarea>
                                  </div>
                                </div>
                          </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock:</label>
                                      <?php echo $stock_producto;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Mínimo:</label>
                                     <?php echo $stock_minimo_producto;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Máximo:</label>
                                      <?php echo $stock_maximo_producto?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Compra:</label>
                                      <?php echo $precio_compra_producto_almacen;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Venta:</label>
                                      "<?php echo $precio_venta_producto_almacen;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">F Ingreso:</label>
                                     <?php echo $fecha_ingreso_almacen;?>
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="">Imagen del Producto</label> 
                                        <img src="<?php echo $URL.'/almacen/img_productos/'.$imagen_producto;?>" id="imagen_producto" alt="" width="100%" disabled>
                                      
                                      <output id="list"></output>                         
                                    </div>
                            </div>

                          
                    
                      </div>
                 
                    <!--Modal PARA BUSCAR PROVEEDOR-->
                    <div class="modal fade" id="modal-buscar-proveedor">
                          <div class="modal-dialog modal-xl">
                               <div class="modal-content">
                                    <div class="modal-header" style="background-color:#154360; color:white">
                                         <h4 class="modal-title">Busqueda del Proveedor</h4>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>
              <div class="modal-body">
                <div class="table table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th><center># Proveedor</center></th>
                        <th><center>Seleccionar</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Telefono</center></th>
                        <th><center>Empresa</center></th>
                        <th><center>Email</center></th>
                        <th><center>Dirección</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        ?>
                    </tbody>
                </table>                                     
                </div>
                </div>
                        <div class="modal-footer justify-content-between">
                        
                          </div>
                                          <!-- /.modal-content -->
                       </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                               <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="">Nombre del Proveedor</label><br>
                                   <?= $nombre_proveedor?>
                  
                                  </div>
                                  <input id="id_proveedor" name="" hidden>
                                  <div class="form-group">
                                    <label for="">Celular</label><br>
                                    <?=$celular_proveedor;?>
                                  </div>

                               </div>
                               <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="">Empresa</label><br>
                                    <?=$empresa_proveedor;?>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Email</label><br>
                                    <?=$email_proveedor;?>
                                  </div>

                               </div>
                               <div class="col-md-4">
                               <div class="form-group">
                                    <label for="">Teléfono</label><br>
                                    <?=$telefono_proveedor;?>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Dirección</label><br>
                                    <textarea id="descripcion" readonly style="border: none; background: transparent;"rows="2" cols="25"><?php echo $direccion_proveedor;?></textarea>
                                  </div>
                               </div>
                               
                              </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                    </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
          </div>
      <div class="col-md-3">

      <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Detalle de la Compra</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            <div class="row">
              <div class="col-md-12 text-center">
                  <div class="form-group">
                    <?php 
                    $contador_compra = 1;
                    foreach ($compras_datos as $compra_dato){
                      $contador_compra = $contador_compra + 1;
                    }
                    ?>
                      <label for="">Número de Compra</label><br>
                     <?php echo $numero_de_compra?>
                    </div>
               </div>

               <div class="col-md-12 text-center">
                  <div class="form-group">
                    <label for="">Fecha de Compra</label><br>
                    <?php echo $fecha_de_compra;?>
                  </div>
                </div>

                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <label for="">Comprobante de la compra</label><br>
                    <?=$comprobante_compra;?>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <label for="">Precio Compra</label><br>
                    <?php echo $precio_compra;?>
                  </div>                  
                </div>
              
                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <label for="">Cantidad de la compra</label><br>
                    <?=$cantidad_compra?>
                  </div>
                  <script>
                    $('#cantidad_compra').keyup(function () {
                      //alert("estamos presionando el input");
                      var stock_actual = $('#stock_actual').val();
                      var stock_compra = $('#cantidad_compra').val();
                      var total = parseInt (stock_actual) + parseInt (stock_compra);

                      $('#stock_total').val(total);
                      
                    });
                  </script>
                </div>

                <div class="col-md-12 text-center">
                  <div class="form-group">
                    <label for="">Usuario</label><br>
                    <?php echo $usuario_compra?>
                  </div>
                  <hr>
                </div>
               
                  <div class="col-md-12">
                  <div class="form-group">
                      <button class="btn btn-danger btn-block" id="btn_eliminar"><i class="fas fa-trash"></i> Eliminar Compra</button>
                      <a class="btn btn-secondary btn-block" href="<?php echo $URL. '/compras/index.php';?>">Cancelar</a>

                      <input id="usuario_sesion" value ="<?php echo $id_usuario_sesion?>" hidden >
                  </div>

                </div>

                <script>
                 $('#btn_eliminar').click(function () {
                 var id_compra = '<?php echo $id_de_compra; ?>';
                 var id_producto = $('#id_producto').val();
                 var cantidad_compra = '<?= $cantidad_compra; ?>';
                 var stock_actual = '<?= $stock_producto; ?>';

                    Swal.fire({
                         title: '¿Está seguro de eliminar la compra?',
                         icon: 'question',
                         showCancelButton: true,
                         confirmButtonColor: '#3085d6',
                         cancelButtonColor: '#d33',
                         confirmButtonText: 'Si deseo eliminar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                             Swal.fire(
                                eliminar(),
                                'Compra eliminada',
                                'success'

                                )
                                }
                                });

                                function eliminar() {
                                var url = "../app/controllers/compras/delete.php";
                                $.get(url,{id_compra:id_compra,id_producto:id_producto,cantidad_compra:cantidad_compra,stock_actual:stock_actual},function (datos) {
                                $('#respuesta_delete').html(datos);
                                });
                                 }
                                 });
                    </script>

                <div id="respuesta_delete"></div>
            </div>
              </div>
              <!-- /.card-body -->
            </div>

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


