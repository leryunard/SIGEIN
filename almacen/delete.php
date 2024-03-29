<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/categorias/listado_de_categorias.php');
include('../app/controllers/almacen/show_productos.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Eliminar del producto <?php echo $nombre?></h1>
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
          <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">¿Desea eliminar el producto: <?php echo $codigo?> ?</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                <form action="../app/controllers/almacen/delete.php" method="post">
                    <input type="" name="id_producto" value="<?php echo $id_producto?>" hidden>
                    
                    <div class="row">
                      <div class ="col-md-12">
                            <div class="row">
                                <div class="col-md-9">
                                <div class="row">
                                <div class="col-md-4">
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
                                      <input type="text" id="" class="form-control" placeholder="Código-Producto" 
                                      value="<?php echo $codigo?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Categoría:</label>
                                        <div style="display:flex;">
                                            <input type="text" class="form-control" disabled value="<?php echo $categoria_nombre?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Nombre Producto:</label>
                                      <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control"  placeholder="Nombre-Producto" disabled>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Usuario</label>
                                  <input type="text" name="" id="" value="<?php echo $email;?>" disabled class="form-control">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                  <label for="">Descripción Producto</label>
                                  <textarea type="text" name="descripcion" disabled cols="30" rows="2" class="form-control"><?php echo $descripcion?></textarea>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock:</label>
                                      <input type="number" name="stock" id="" class="form-control" disabled value="<?php echo $stock?>" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Mínimo:</label>
                                      <input type="number" name="stock_minimo" id="" class="form-control" disabled value="<?php echo $stock_minimo;?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Máximo:</label>
                                      <input type="number" name="stock_maximo" id="" class="form-control" disabled value="<?php echo $stock_maximo?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Compra:</label>
                                      <input type="number" name="precio_compra" id="" class="form-control" disabled value="<?php echo $precio_compra?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Venta:</label>
                                      <input type="number" name="precio_venta" id="" class="form-control" disabled value="<?php echo $precio_venta?>">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Fecha de Ingreso:</label>
                                      <input type="date" name="fecha_ingreso" id="" class="form-control" disabled value="<?php echo $fecha_ingreso?>">
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="">Imagen del Producto</label> 
                                        <img src="<?php echo $URL.'/almacen/img_productos/'.$imagen;?>" alt="" width="90%" disabled>
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

                            <hr>
                            <div class="form-group">
                            <a href="./index.php" class="btn btn-secondary">Cancelar</a>
                            <button type="" class="btn btn-danger" ><i class="fa fa-trash"> Borrar Producto</i></button>
                            </div>
                    
                      </div>
                    </div>
                </div>
                </form>
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