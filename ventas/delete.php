<?php 
$id_venta = $_GET['id'];
$numero_venta_get = $_GET['num_venta'];
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/ventas/mostrar_venta.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/clientes/listado_de_cliente.php');
include('../app/controllers/ventas/mostrar_cliente.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Detalles de la Venta Número: <?php echo $numero_de_la_venta;?> ¿Desea eliminar esta venta?</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-danger">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-shopping-bag"></i> Venta Nro: 
                    <input class="form-con" style="text-align:center;" disabled type="number" id="numero_de_venta" value ="<?php echo $numero_de_la_venta;?>"> </h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                <br><br>   
                <div class ="table-responsive">
                   <table class="table table-bordered table-sm table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="background-color:#C3B4B4; text-align: center;">Nro</th>
                          <th style="background-color:#C3B4B4; text-align: center;">Producto</th>
                          <th style="background-color:#C3B4B4; text-align: center;">Descripción</th>
                          <th style="background-color:#C3B4B4; text-align: center;">Cantidad</th>
                          <th style="background-color:#C3B4B4; text-align: center;">Precio Unitario</th>
                          <th style="background-color:#C3B4B4; text-align: center;">Subtotal</th>
                        </tr>
                        
                      </thead>

                      <tbody>
                        <?php
                          $contador_de_carrito = 0;
                          $numero_venta = $numero_de_la_venta;
                          $sql_carrito = "SELECT *,alma.id_producto as id_producto_almacen,alma.nombre as nombre_producto, alma.descripcion as descripcion_producto,
                          alma.precio_venta as precio_unitario_producto,alma.stock as stock_almacen ,carr.cantidad as cantidad_producto
                          FROM tb_carrito as carr 
                          INNER JOIN tb_almacen as alma ON carr.id_producto = alma.id_producto WHERE carr.num_venta ='$numero_venta'";

                          $query_carrito = $pdo -> prepare($sql_carrito);
                          $query_carrito ->execute();

                          $productos_carrito = $query_carrito -> fetchAll (PDO::FETCH_ASSOC);
                            $total_cantidad = 0;
                            $total_precio_unitario = 0;
                            $total_de_venta = 0;
                          foreach ($productos_carrito as $producto_carrito){
                            $id_carrito = $producto_carrito['id_carrito'];
                            $contador_de_carrito = $contador_de_carrito + 1;
                            $nombre_producto = $producto_carrito['nombre_producto'];
                            $descripcion_producto = $producto_carrito['descripcion_producto'];
                            $cantidad_producto = $producto_carrito['cantidad_producto'];
                            $precio_unitario = floatval($producto_carrito['precio_unitario_producto']) ;
                            $subtotal_producto = floatval($cantidad_producto * $precio_unitario) ;
                            $total_cantidad = $total_cantidad + $cantidad_producto; 
                            $total_precio_unitario = $total_precio_unitario + $precio_unitario;
                            $total_de_venta = $total_de_venta + $subtotal_producto;
                            $id_producto_almacen = $producto_carrito['id_producto_almacen'];
                            ?>
                            

                            <tr>
                              <td><center> <?php echo $contador_de_carrito;?> 
                              <input hidden name="" id="id_producto_almacen<?php echo $contador_de_carrito;?>" value="<?php echo $id_producto_almacen?>">
                              </center>  </td>
                              <td><center> <?php echo $nombre_producto;?> </center>  </td>
                              <td><center> <?php echo $descripcion_producto?> </center>  </td>
                              <td><center> 
                                <span id="cantidad_carrito<?php echo $contador_de_carrito?>"><?php echo $cantidad_producto?></span> 
                                <input hidden name="" value="<?php echo $producto_carrito['stock_almacen'];?>" id="stock_de_inventario<?php echo $contador_de_carrito;?>">
                              </center>  </td>
                              <td><center> <?php echo $precio_unitario?> </center>  </td>
                              <td><center> <?php echo $subtotal_producto?> </center>  </td>
                            </tr>

                          <?php
                          }
                        ?>
                        <tr>
                          <th colspan="3" style="background-color: #E8A2A2; text-align:right">TOTAL</th>
                          <th><center><?= $total_cantidad;?></center></th>
                          <th><center> <?php echo $total_precio_unitario?> </center></th>
                          <th style ="background-color:yellowgreen"><center><?= $total_de_venta?></center></th>
                        </tr>
                      </tbody>
                   </table>                    
                </div>
 
                    
                    
                  </div>
                  
                  <!-- /.card-body -->
                </div>       
              </div>
      </div> <!--HASTA AQUÍ-->


      <!--DATOS DEL CLIENTE PARA LA FACTURA-->
      <div class="row">
          <div class="col-md-9">
            <div class="card card-outline card-danger">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-user-check"></i> Datos del Cliente</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <?php
                    foreach ($clientes_datos_mostrar as $cliente_dato_mostrar){
                        $nombre_cliente = $cliente_dato_mostrar['nombre_cliente'];
                        $nit_cliente = $cliente_dato_mostrar['nit_cliente'];
                        $celular_cliente = $cliente_dato_mostrar['celular_cliente'];
                        $email_cliente = $cliente_dato_mostrar['email']; 
                    }
                  ?>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="">Nombre del Cliente</label>
                          <input type="" disabled id="nombre_cliente" value="<?php echo $nombre_cliente;?>" class="form-control">
                          
                      </div>
                      <input type="" name="" id="cliente_seleccionado" hidden>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Documento de Identidad</label>
                        <input type="" id="documento_cliente" disabled class="form-control" name="" value="<?php echo $nit_cliente;?>">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Celular Cliente</label>
                        <input type="" disabled id="celular_cliente" class="form-control" value="<?php echo $celular_cliente?>">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Correo del cliente</label>
                        <input type="" disabled id="correo_cliente" class="form-control" value="<?php echo $email_cliente;?>">
                      </div>
                    </div>
                  </div>



                  </div>
                  <!-- /.card-body -->
                </div>       
              </div>


              <div class="col-md-3">
            <div class="card card-outline card-danger">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-dollar-sign"></i> Registrar venta</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <div class="form-group">
                        <label for="">Monto a Cancelar</label>
                        <input disabled class="form-control" id="total_a_cancelar" style="background-color: rgb(239, 247, 119); text-align:center; font-weight: 800;" value="<?php echo $total_de_venta?>">
                      </div>
                      <div class="form-group">
                        <center><button id="btn_borrar_venta" class="btn btn-danger btn-block form-control">Eliminar</button></center>
                        <div id="btn_borrar_venta">
                            
                        </div>
                      </div>
                      <div id="respuesta_borrar_venta"></div>
                      <script>
                        $('#btn_borrar_venta').click(function (){
                            var id_venta = '<?php echo $id_venta;?>';
                            var num_venta = '<?php echo $numero_venta_get;?>'

                            actualizar_stock();
                            borrar_venta();

                            function actualizar_stock(){
                                  var i = 1;
                                  var n = '<?php echo $contador_de_carrito?>';
                                  for (i = 1; i <= n ; i++){
                                    var a = '#stock_de_inventario'+i;
                                    var stock_actual = $(a).val();

                                    var b = '#cantidad_carrito'+i;
                                    var cantidad_carrito = $(b).html();

                                    var c = '#id_producto_almacen'+i;
                                    var id_producto = $(c).val();

                                    var stock_calculado = parseFloat (parseInt(stock_actual) + parseInt(cantidad_carrito));
                                    //alert(id_producto + " = " +stock_actual + " + " + cantidad_carrito + " = " + stock_calculado);

                                    var url2 = "../app/controllers/ventas/actualizar_stock.php";
                                    $.get(url2,{id_producto:id_producto,stock_calculado:stock_calculado}, function (datos){
                                   // $('#respuesta_venta').html(datos);
                                     });

                                    //alert(id_producto + " = " +stock_actual + " - " + cantidad_carrito + " = " + stock_calculado);
                                  }
                                }
                                
                                  function borrar_venta(){
                                  var url = "../app/controllers/ventas/borrar_venta.php";
                                  $.get(url,{id_venta:id_venta,num_venta:num_venta}, function (datos){
                                   $('#btn_borrar_venta').html(datos);
                                    });
                                }


                            //alert(id_venta);
                        });
                      </script>
                  </div>
                  <!-- /.card-body -->
                </div>  
               
              </div>
      </div> <!--HASTA AQUÍ-->
      </div>
      <div id="respuesta_venta"></div> 

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

<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
              "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
              "infoFiltered": "(Filtrado de _MAX_ total Productos)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Productos",
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
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $(function () {
    $("#example2").DataTable({
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
                                        <form action="../app/controllers/clientes/guardar_cliente.php" method="post">
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
