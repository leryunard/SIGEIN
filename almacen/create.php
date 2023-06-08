<?php 
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/categorias/listado_de_categorias.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"><p style=color:#00FA9A>Registro de un Nuevo Producto</h1></p>
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
          <div class="card card-primary">
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
                    <div class="row">
                      <div class ="col-md-12">
                        <form action="../app/controllers/almacen/create.php" method="post" enctype="multipart/form-data">
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
                                      value="<?php echo "P-". ceros($contador_de_id)?>" disabled>
                                      <input type="text" name="codigo" value="<?php echo "P-". ceros($contador_de_id)?>" hidden>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="">Categoría:</label>
                                        <div style="display:flex;">

                                           <select class="form-control" name="id_categoria" required>
                                            <?php foreach($categorias_datos as $categoria_dato){ ?>
                                           <option value="<?php echo $categoria_dato['id_categoria'];?>"><?php echo $categoria_dato['nombre_categoria'];?></option>  
                                          <?php
                                          } ?>

                                           </select>
                                           <a href="<?php echo $URL;?>/categorias/index.php" class="btn btn-info"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Nombre Producto:</label>
                                      <input type="text" name="nombre" id="" class="form-control"  placeholder="Nombre-Producto" required>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Usuario</label>
                                  <input type="text" name="" id="" value="<?php echo $email_usuario;?>" disabled class="form-control">
                                  <input name="id_usuario" value="<?php echo $id_usuario_sesion;?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                  <label for="">Descripción Producto</label>
                                  <textarea type="text" name="descripcion" cols="30" rows="2" id="" class="form-control" placeholder="Descripción-Producto"></textarea>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock:</label>
                                      <input type="number" name="stock" id="" class="form-control" placeholder="Stock-Producto" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Mínimo:</label>
                                      <input type="number" name="stock_minimo" id="" class="form-control" placeholder="Stock-Mínimo">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Stock Máximo:</label>
                                      <input type="number" name="stock_maximo" id="" class="form-control" placeholder="Stock-maximo">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Compra:</label>
                                      <input type="number" name="precio_compra" id="" class="form-control" placeholder="Precio-Compra" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Precio Venta:</label>
                                      <input type="number" name="precio_venta" id="" class="form-control" placeholder="Precio-Venta" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label for="">Fecha de Ingreso:</label>
                                      <input type="date" name="fecha_ingreso" id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="">Imagen del Producto</label> 
                                      <input type="file" name="image" id="file" value="" class="form-control">
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
                               <button type="submit" class="btn btn-primary">Guardar Producto</button>
                            </div>
                        </form>
                      </div>
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
<?php include('../layout/parte2.php') ?>
<?php include('../layout/mensajes.php')?>