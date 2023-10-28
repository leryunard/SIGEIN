<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/mostrar_compra.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Actualización de la Compra</h1>
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
          <div class="card card-success">
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
                <div style="display:flex;">
                    <h5>Datos del Producto</h5>
                    <div style="width:20px;">
                        
                    </div>
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                         data-target="#modal-buscar-producto">
                        <i class="fa fa-search" aria-hidden="true"></i> Buscar Producto
                    </button>
                    </div>
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
                        <?php 
                          $contador = 0;
                          foreach ($productos_datos as $producto_dato){
                            $id_producto = $producto_dato['id_producto'] ?>
                            
                                <td><center><?php echo $contador = $contador + 1?></center></td>
                                <td><button class="btn btn-info" id="btn_seleccionar<?php echo $id_producto;?>">
                                Seleccionar
                              </button>
                              <script>
                                $('#btn_seleccionar<?php echo $id_producto;?>').click(function(){
                                  //alert("Elemento seleccionado <?php echo $id_producto;?>");
                                  var codigo = "<?php echo $producto_dato['codigo'];?>";
                                  var categoria = "<?php echo $producto_dato['nombre_categoria'];?>";
                                  var nombre_producto = "<?php echo $producto_dato['nombre'];?>";
                                  var descripcion = "<?php echo $producto_dato['descripcion'];?>";
                                  var stock = "<?php echo $producto_dato['stock'];?>";
                                  var stock_minimo = "<?php echo $producto_dato['stock_minimo'];?>";
                                  var stock_maximo = "<?php echo $producto_dato['stock_maximo'];?>";
                                  var precio_compra = "<?php echo $producto_dato['precio_compra'];?>";
                                  var precio_venta = "<?php echo $producto_dato['precio_venta'];?>";
                                  var usuario_producto = "<?php echo $producto_dato['email']?>";
                                  var fecha_ingreso = "<?php echo $producto_dato['fecha_ingreso'];?>";
                                  var id_producto = "<?php echo $producto_dato['id_producto']?>"

                                  $('#codigo').val(codigo);
                                  $('#categoria').val(categoria);
                                  $('#nombre_producto').val(nombre_producto);
                                  $('#usuario_producto').val(usuario_producto);
                                  $('#descripcion').val(descripcion);
                                  $('#stock').val(stock);
                                  $('#stock_minimo').val(stock_minimo);
                                  $('#stock_maximo').val(stock_maximo);
                                  $('#precio_compra').val(precio_compra);
                                  $('#precio_venta').val(precio_venta);
                                  $('#fecha_ingreso').val(fecha_ingreso);
                                  $('#stock_actual').val(stock);
                                  var ruta_imagen = "<?php echo $URL.'/almacen/img_productos/'.$producto_dato['imagen'] ?>";
                                  $('#imagen_producto').attr({src: ruta_imagen});
                                  $('#id_producto').val(id_producto);
                                  $('#modal-buscar-producto').modal('toggle');

                                })
                              </script>
                              </td>
                                <td><center><?php echo $producto_dato['codigo']?></center></td>
                                <td><center><?php echo $producto_dato['nombre_categoria']?></center></td>
                                <td><center><?php echo $producto_dato['nombre']?></center></td>
                                <td><img src="<?php echo $URL."/almacen/img_productos/".$producto_dato['imagen']?>" alt="" width="100px" height="80px"></td>
                                <td><center><?php echo $producto_dato['descripcion']?></center></td>
                                <td><center><?php echo $producto_dato['stock']?></td>
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
                      <div class ="col-md-12">
                            <div class="row">
                                <div class="col-md-9">
                                <div class="row">
                                <div class="col-md-4">
                                   <input type="" name="" value="<?=$id_producto_almacen?>" id="id_producto" hidden>
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
                                      <label for="">Stock:</label><br>
                                      <?=$stock_producto?>
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
                                      <?=$precio_compra_producto_almacen;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Venta:</label>
                                     <?php echo $precio_venta_producto_almacen;?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">F Ingreso:</label>
                                      <?=$fecha_ingreso_almacen?>
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="">Imagen del Producto</label> 
                                        <img src="<?php echo $URL.'/almacen/img_productos/'.$imagen_producto;?>" id="imagen_producto" alt="" width="90%" disabled>
                                      <hr>
                                      <output id="list"></output>
                                      <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files; // FileList object
                                                        // Obtenemos la imagen del campo "file".
                                                        for (var i = 0, f; f = files[i]; i++) {
                                                            //Solo admitimos imágenes.
                                                            if (!f.type.match('image.*')) {
                                                                continue;
                                                            }
                                                            var reader = new FileReader();
                                                            reader.onload = (function (theFile) {
                                                                return function (e) {
                                                                    // Insertamos la imagen
                                                                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                                };
                                                                })(f);
                                                                reader.readAsDataURL(f);
                                                        }
                                                    }
                                            document.getElementById('file').addEventListener('change', archivo, false);
                                        </script>                                  
                                    </div>
                            </div>

                          
                    
                      </div>
                      <hr>
                      <div style="display:flex;">
                    <h5>Datos del Proveedor</h5>
                    <div style="width:20px;">
                        
                    </div>
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                         data-target="#modal-buscar-proveedor">
                        <i class="fa fa-search" aria-hidden="true"></i> Buscar Proveedor
                    </button>
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
                        <?php 
                          $contador = 0;
                          foreach ($proveedores_datos as $proveedor_dato){
                           $contador = $contador + 1;
                           $id_proveedor =$proveedor_dato['id_proveedor'];
                            ?>
                          <tr>
                            <td><center><?php echo $contador?></center></td>
                            <td><button class="btn btn-info" id="btn_seleccionar_proveedor<?php echo $id_proveedor?>">
                                Seleccionar
                              </button>
                              <script>
                                $('#btn_seleccionar_proveedor<?php echo $id_proveedor?>').click(function(){
                                  //alert("Elemento seleccionado <?php echo $id_proveedor;?>");
                                  var nombre_proveedor = "<?php echo $proveedor_dato['nombre_proveedor'];?>";
                                  var celular_proveedor = "<?php echo $proveedor_dato['celular'];?>";
                                  var telefono = "<?php echo $proveedor_dato['telefono'];?>";
                                  var email_proveedor = "<?php echo $proveedor_dato['email'];?>";
                                  var direccion = "<?php echo $proveedor_dato['direccion'];?>";
                                  var empresa = "<?php echo $proveedor_dato['empresa']?>";
                                  var id_proveedor = "<?php echo $proveedor_dato['id_proveedor']?>";

                                  $('#nombre_proveedor').val(nombre_proveedor);
                                  $('#celular_proveedor').val(celular_proveedor);
                                  $('#telefono_proveedor').val(telefono);
                                  $('#email_proveedor').val(email_proveedor);
                                  $('#direccion').val(direccion);
                                  $('#empresa').val(empresa);
                                  $('#id_proveedor').val(id_proveedor);
                                  $('#modal-buscar-proveedor').modal('toggle');
                                })
                              </script>
                              </td>
                            <td><center><?php echo $proveedor_dato['nombre_proveedor']?></center></td>
                            
                            <td><center><a href="https://wa.me/503<?php echo $proveedor_dato['celular'];?>" target="_blank" class="btn btn-success">
                            <?php echo $proveedor_dato['celular']?>
                            </a></center></td>
                            
                            <td><center><?php echo $proveedor_dato['telefono']?></center></td>
                            <td><center><?php echo $proveedor_dato['empresa'] ?></center></td>
                            <td><center><?php echo $proveedor_dato['email']?></center></td>
                            <td><center><?php echo $proveedor_dato['direccion']?></center></td>
                            
                               
                          </tr>
                            <?php 
                          }
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
                                    <label for="">Nombre del Proveedor</label>
                                    <input type="text" id="nombre_proveedor" value="<?=$nombre_proveedor;?>"  class="form-control" disabled>
                                    <input type="" id="id_proveedor" value="<?php echo $id_proveedor_compra;?>" hidden>
                                  </div>
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="number" value="<?php echo $celular_proveedor?>" id="celular_proveedor" class="form-control" disabled>
                                  </div>

                               </div>
                               <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="">Empresa</label>
                                    <input type="text" value="<?=$empresa_proveedor;?>" id="empresa" class="form-control" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="email_proveedor" value="<?php echo $email_proveedor;?>" class="form-control" disabled>
                                  </div>

                               </div>
                               <div class="col-md-4">
                               <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="number" value="<?php echo $telefono_proveedor;?>" id="telefono_proveedor"  class="form-control" disabled>
                                  </div>
                               <div class="form-group">
                                    <label for="">Dirección</label>
                                    <textarea rows="" id="direccion" rows="3" cols="30" disabled class="form-control"><?php echo $direccion_proveedor;?></textarea>
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
              <div class="col-md-12">
                  <div class="form-group">

                      <label for="">Número de Compra</label>
                      <input type="text" class="form-control" value="<?php echo $numero_de_compra?>" style="text-align: center;" disabled>
                      <input type="text" class="form-control" id="numero_compra" value="<?php echo $numero_de_compra?>" style="text-align: center;" hidden>
                    </div>
               </div>

               <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Fecha de Compra</label>
                    <input type="date" value="<?php echo $fecha_de_compra?>" id="fecha_compra" class="form-control">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Comprobante de la compra</label>
                    <input type="text" value="<?=$comprobante_compra;?>" class="form-control" id="comprobante_compra" >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Precio Compra</label>
                    <input id="compra_precio" value="<?php echo $precio_compra;?>" type="number" class="form-control">
                  </div>                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Stock actual</label>
                    <input style="background-color: yellowgreen; text-align:center;" value="<?php echo $stock_producto = $stock_producto - $cantidad_compra;?>" type="text" class="form-control" id="stock_actual" disabled>
                  </div>                  
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Stock + Compra</label>
                    <input type="text" id="stock_total" disabled style="text-align: center;" class="form-control" >
                  </div>                  
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Cantidad de la compra</label>
                    <input type="number" value="<?php echo $cantidad_compra;?>" style="text-align: center;" id="cantidad_compra" class="form-control" >
                  </div>
                  <script>
                    $('#cantidad_compra').keyup(function () {
                      //alert("estamos presionando el input");
                      sumaCantidades();
                    });
                    sumaCantidades();
                    function sumaCantidades (){
                      var stock_actual = $('#stock_actual').val();
                      var stock_compra = $('#cantidad_compra').val();
                      var total = parseInt (stock_actual) + parseInt (stock_compra);

                      $('#stock_total').val(total);
                    }
                  </script>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" value="<?php echo $usuario_compra;?>" disabled>
                  </div>
                  <hr>
                </div>
               
                  <div class="col-md-8">
                  <div class="form-group">
                      <button class="btn btn-primary btn-block" id="btn_actualizar_compra" type="">Actualizar Compra</button>

                      <input id="usuario_sesion" value ="<?php echo $id_usuario_sesion?>" hidden >
    
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <a class="btn btn-secondary btn-block" href="<?php echo $URL.'/compras/index.php';?>">Cancelar</a>
                    </div>
                </div>

                <script>
                  $('#btn_actualizar_compra').click(function() {
                    
                    var id_compra = <?php echo $id_de_compra;?>;
                    var id_producto = $('#id_producto').val();
                    var numero_compra = $('#numero_compra').val();
                    var fecha_compra = $('#fecha_compra').val();
                    var id_proveedor = $('#id_proveedor').val();
                    var comprobante_compra = $('#comprobante_compra').val();
                    var id_usuario = $('#usuario_sesion').val();
                    var precio_compra = $('#compra_precio').val();
                    var cantidad_compra = $('#cantidad_compra').val();
                    var stock_total = $('#stock_total').val();
   
                      if (id_producto==""){
                        $('#id_producto').focus();
                        alert("Debe seleccionar el producto");
                      }else if(id_proveedor == ""){
                        $('#id_proveedor').focus();
                        alert("Debe de seleccionar un proveedor");
                      }else if (fecha_compra == ""){
                        $('#fecha_compra').focus();
                        alert("Por Favor ingrese la fecha de compra");
                      }else if (comprobante_compra == ""){
                        $('#comprobante_compra').focus();
                        alert("Ingrese el tipo de comprobante");
                      }else if (precio_compra == ""){
                        $('#compra_precio').focus();
                        alert("Por favor ingrese el precio de la compra");
                      }else if (cantidad_compra == ""){
                        $('#cantidad_compra').focus();
                        alert("Por favor ingrese la cantidad de la compra");
                      }else{
                        var url = "../app/controllers/compras/update.php";
                        $.get(url,{id_producto:id_producto,id_proveedor:id_proveedor,
                        comprobante_compra:comprobante_compra,id_usuario:id_usuario,precio_compra:precio_compra,
                      cantidad_compra:cantidad_compra, fecha_compra:fecha_compra,numero_compra:numero_compra,stock_total:stock_total, id_compra:id_compra}, function (datos){
                        $('#respuesta_error').html(datos);
                          });
                      }
                  });
                </script>

            </div>
              </div>
              <!-- /.card-body -->
            </div>

      </div>
      </div>
      <div id="respuesta_error">
                      
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
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>