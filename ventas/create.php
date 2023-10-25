<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/ventas/listado_de_ventas.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/clientes/listado_de_cliente.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registro de una nueva Venta</h1>
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
            <div class="card card-outline card-primary">
                  <div class="card-header">
                    <?php 
                    $contador_ventas = 0;
                    foreach ($ventas_datos as $venta_dato){ 
                      $contador_ventas = $contador_ventas + 1;

                    }
                    ?>
                    <h3 class="card-title"><i class="fas fa-shopping-bag"></i> Venta Nro: 
                    <input class="form-con" style="text-align:center;" disabled type="number" id="numero_de_venta" value ="<?=$contador_ventas + 1;?>"> </h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <b>Carrito </b>
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                         data-target="#modal-buscar-producto">
                        <i class="fa fa-search" aria-hidden="true"></i> Buscar Producto
                    </button>
                    
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
                        <th><center>Stock</center></th>
                        <th><center>Precio Compra</center></th>
                        <th><center>Precio Venta</center></th>
                        <th><center>Fecha Compra</center></th>
                        <th><center>Usuario</center></th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php 
                          $contador = 0;
                          foreach ($productos_datos as $producto_dato){
                            $id_producto = $producto_dato['id_producto'] ?>
                            
                                <td><center>
                                  <?php echo $contador = $contador + 1?>
                                </center></td>
                                <td><button class="btn btn-info" id="btn_seleccionar<?php echo $id_producto;?>">
                                Seleccionar
                              </button>
                              <script>
                                $('#btn_seleccionar<?php echo $id_producto;?>').click(function(){
                                  //alert("Elemento seleccionado <?php echo $id_producto;?>");
                                  var producto = "<?php echo $producto_dato['nombre'];?>";
                                  $('#producto_venta').val(producto);

                                  var id_producto = "<?php echo $id_producto?>"
                                  $('#id_producto_venta').val(id_producto);

                                  //$('#modal-buscar-producto').modal('toggle');

                                  var precio_unitario = "<?php echo $producto_dato['precio_venta']?>"
                                  $('#precio_unitario_venta').val(precio_unitario);

                                  var stock_validar = "<?php echo $producto_dato['stock'];?>"
                                  $('#stock_actual_validar').val(stock_validar);

                                  $('#cantidad_venta').focus();

                                })
                              </script>
                              </td>
                                <td><center><?php echo $producto_dato['codigo']?></center></td>
                                <td><center><?php echo $producto_dato['nombre_categoria']?></center></td>
                                <td><center><?php echo $producto_dato['nombre']?></center></td>
                                <td><img src="<?php echo $URL."/almacen/img_productos/".$producto_dato['imagen']?>" alt="" width="100px" height="80px"></td>
                                <td><center>
                                  <?php echo $producto_dato['stock']?>
                                 </center>
                                </td>
                                <td><center><?php echo $producto_dato['precio_compra']?></center></td>
                                <td><center><?php echo $producto_dato['precio_venta']?></center></td>
                                <td><center><?php echo $producto_dato['fecha_ingreso']?></center></td>
                                <td><center><?php echo $producto_dato['email']?></center></td>
                            </td> 
                            </tr>    
                            <?php 
                          }
                        ?>
                    </tbody>
                </table>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="" name="" id="id_producto_venta" hidden>
                        <input type="" id="stock_actual_validar" hidden value="">
                        <label for="">Producto</label>
                        <input type="text" class="form-control" disabled id="producto_venta" value="">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                          <label for="">Descripción</label>
                          <input type="text" disabled class="form-control" id="descripcion_venta" value="">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="">Cantidad</label>
                      <input type="number" name="" class="form-control" id="cantidad_venta" value="">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="">Precio unitario</label>
                      <input type="text" id="precio_unitario_venta" disabled class="form-control">
                    </div>
                  </div>
                </div>
                <hr>
                <button class="btn btn-primary" id="btn_registrar_venta" style="float:right;">Registrar</button>
                <script>
                  $('#btn_registrar_venta').click( function (){
                    //alert("si funciona");
                    var num_venta = "<?php echo $contador_ventas + 1?>";

                    var id_producto_seleccionado = $('#id_producto_venta').val();
                    
                    var cantidad_venta_producto = $('#cantidad_venta').val();

                    var stock = $('#stock_actual_validar').val();
                                  
                    //alert(stock);

                    if (num_venta == ""){
                      alert("Esta venta es incorrecta");
                    }else if (id_producto_seleccionado == ""){
                      alert("Seleccione un producto");
                    }else if (cantidad_venta_producto == ""){
                      alert("Seleccione la cantidad");
                    }else{
                        var url = "../app/controllers/ventas/registrar_carrito.php";
                        $.get(url,{num_venta:num_venta, id_producto_seleccionado:id_producto_seleccionado,cantidad_venta_producto:cantidad_venta_producto}, function (datos){
                        $('#respuesta_carrito').html(datos);
                          });
                      }
                  });
                </script>

                <div id="respuesta_carrito"></div>

                </div>
                                </div>
                        <div class="modal-footer justify-content-between">
                        
                          </div>
                                          <!-- /.modal-content -->
                       </div>
                       
                    </div>
                </div>
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
                          <th style="background-color:#C3B4B4; text-align: center;">Acción</th>
                        </tr>
                        
                      </thead>

                      <tbody>
                        <?php
                          $contador_de_carrito = 0;
                          $numero_venta = $contador_ventas + 1;
                          $sql_carrito = "SELECT *,alma.id_producto as id_producto_almacen,alma.nombre as nombre_producto, alma.descripcion as descripcion_producto,
                          alma.precio_venta as precio_unitario_producto,alma.stock as stock_almacen ,carr.cantidad as cantidad_producto
                          FROM tb_carrito as carr 
                          INNER JOIN tb_almacen as alma ON carr.id_producto = alma.id_producto WHERE carr.num_venta ='$numero_venta;'
                          ORDER BY carr.id_carrito DESC";

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
                              <td><center>
                                <form action="../app/controllers/ventas/borrar_carrito.php" method="post">
                                   <input type="text" value="<?= $id_carrito;?>" hidden name="id_carrito">
                                   <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i> Borrar</button>
                                </form>
                              </center></td>
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
            <div class="card card-outline card-primary">
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
                  <b>Cliente </b>
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                         data-target="#modal-buscar-cliente">
                        <i class="fa fa-search" aria-hidden="true"></i> Buscar Cliente
                    </button>
                    
                    <!--Modal PARA BUSCAR CLIENTE-->
                    <div class="modal fade" id="modal-buscar-cliente">
                          <div class="modal-dialog modal-xl">
                               <div class="modal-content">
                                    <div class="modal-header" style="background-color:#154360; color:white">
                                         <h4 class="modal-title">Busqueda del Cliente </h4> 
                                         <div style="width: 10px;"></div>
                                         <button type="button" class="btn btn-secondary" data-toggle="modal"
                                              data-target="#modal-agregar-cliente">
                                               <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar Cliente
                                          </button>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                        </button>
                                   </div>
              <div class="modal-body">
                <div class="table table-responsive">
                <table id="example2" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                        <th><center># Cliente</center></th>
                        <th><center>Seleccionar</center></th>
                        <th><center>Nombre del Cliente</center></th>
                        <th><center>NIT</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Email</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $contador_clientes = 0;
                      foreach ($clientes_datos as $cliente_dato){
                        $id_cliente = $cliente_dato['id_cliente'];
                        $contador_clientes = $contador_clientes + 1;
                        $nombre_cliente = $cliente_dato['nombre_cliente'];
                        $carnet_identidad_cliente = $cliente_dato['nit_cliente'];
                        $celular_cliente = $cliente_dato['celular_cliente']; 
                        $email_cliente = $cliente_dato['email'];?>
                        
                        <tr>
                          <td><center><?php echo $contador_clientes;?></center></td>
                          <td>
                            <center>
                              <button id="btn_seleccionar_cliente<?php echo $id_cliente;?>"  class="btn btn-info">
                                Seleccionar
                              </button>
                              <script>
                                $('#btn_seleccionar_cliente<?php echo $id_cliente?>').click (function (){
                                  
                                  var nombre_cliente = '<?php echo $nombre_cliente?>';
                                  $('#nombre_cliente').val(nombre_cliente);

                                  var documento_cliente = '<?php echo $carnet_identidad_cliente?>';
                                  $('#documento_cliente').val(documento_cliente);

                                  var celular_cliente = '<?php echo $celular_cliente?>';
                                  $('#celular_cliente').val(celular_cliente);

                                  var correo_cliente = '<?php echo $email_cliente?>';
                                  $('#correo_cliente').val(correo_cliente);

                                  var id_cliente_seleccionado = '<?php echo $id_cliente?>'
                                  $('#cliente_seleccionado').val(id_cliente_seleccionado);

                                  $('#modal-buscar-cliente').modal('toggle');
                                  
                                })
                              </script>
                            </center>
                          </td>
                          <td><center><?php echo $nombre_cliente;?></center></td>
                          <td><center><?php echo $carnet_identidad_cliente?></center></td>
                          <td><center><?php echo $celular_cliente;?></center></td>
                          <td><center><?php echo $email_cliente?></center></td>
                        </tr>                        

                      <?php  
                      }
                    
                    ?>
                    </tbody>
                </table>
                 <div id="respuesta_carrito"></div>

                </div>
                                </div>
                        <div class="modal-footer justify-content-between">
                        
                          </div>
                                          <!-- /.modal-content -->
                       </div>
                       
                    </div>
                    
                </div>
                <br>
                <br>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="">Nombre del Cliente</label>
                          <input type="text" disabled id="nombre_cliente" value="" class="form-control">
                          
                      </div>
                      <input type="" name="" id="cliente_seleccionado" hidden>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Documento de Identidad</label>
                        <input type="" id="documento_cliente" disabled class="form-control" name="" value="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Celular Cliente</label>
                        <input type="" disabled id="celular_cliente" class="form-control" name="" value="">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Correo del cliente</label>
                        <input type="" disabled id="correo_cliente" class="form-control" name="" value="">
                      </div>
                    </div>
                  </div>



                  </div>
                  <!-- /.card-body -->
                </div>       
              </div>


              <div class="col-md-3">
            <div class="card card-outline card-primary">
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
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Total pagado</label>
                            <input class="form-control" id="total_pagado" name="" value="">

                            <script>
                              $('#total_pagado').keyup(function (){
                                var total_a_cancelar = $('#total_a_cancelar').val();
                                var total_pagado = $('#total_pagado').val();
                                var cambio_a_cliente =parseFloat(total_pagado -total_a_cancelar);

                                $('#cambio_al_cliente').val(cambio_a_cliente);

                                
                              });
                        </script>

                              <hr>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Cambio</label>
                            <input class="form-control" id="cambio_al_cliente" name="" disabled>
                            <hr>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          
                          <button id="btn_guardar_venta" class="btn btn-outline-info btn-block" type="">Registrar Venta</button>
                          <div id="#respuesta_venta"></div>     
                          <script>
                              $('#btn_guardar_venta').click(function (){
                                
                                var numero_de_venta = $('#numero_de_venta').val();
                                var id_del_cliente = $('#cliente_seleccionado').val();
                                var total_a_cancelar = $('#total_a_cancelar').val();
                                
                                if (numero_de_venta == ""){
                                  alert("No existe un numero de venta");
                                }else if (id_del_cliente == ""){
                                  alert("Seleccione un cliente");
                                }else{
                                  actualizar_stock();
                                  guardar_venta();

                                }

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

                                    var stock_calculado = parseFloat ( stock_actual -cantidad_carrito );

                                    var url2 = "../app/controllers/ventas/actualizar_stock.php";
                                    $.get(url2,{id_producto:id_producto,stock_calculado:stock_calculado}, function (datos){
                                   // $('#respuesta_venta').html(datos);
                                     });

                                    //alert(id_producto + " = " +stock_actual + " - " + cantidad_carrito + " = " + stock_calculado);
                                  }
                                }


                                function guardar_venta(){
                                  var url = "../app/controllers/ventas/registro_de_ventas.php";
                                  $.get(url,{numero_de_venta:numero_de_venta,id_del_cliente:id_del_cliente,total_a_cancelar:total_a_cancelar}, function (datos){
                                  $('#respuesta_venta').html(datos);
                                    });
                                }
                              });
                          </script>
                      </div>
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
