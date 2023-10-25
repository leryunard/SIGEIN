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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0" style=" font-size: 24px; text-transform: uppercase; font-weight: bold;">Datos del producto [<p class="form-control-static" style="color: blue; display: inline;"><?php echo $nombre; ?></p>
]</h1>
            </div>
        </div>
    </div>
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="background-color: #f5f5f5; padding: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info border shadow-xl">

                <div class="card-header bg-dark text-white">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle"></i> Información del Producto con Código: <?php echo $codigo ?>
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                              <div class="row">
                                  <div class="col-md-9">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="codigo">Código:</label>
                                                  <p class="form-control-static"><?php echo $codigo; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="categoria">Categoría:</label>
                                                  <p class="form-control-static"><?php echo $categoria_nombre; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="nombre">Nombre Producto:</label>
                                                  <p class="form-control-static"><?php echo $nombre; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="usuario">Usuario</label>
                                                  <p class="form-control-static"><?php echo $email; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-8">
                                              <div class="form-group">
                                                  <label for="descripcion">Descripción Producto</label>
                                                  <p class="form-control-static" style="text-align: justify; margin-bottom: 20px;"><?php echo $descripcion; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="stock">Stock:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $stock; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="stock_minimo">Stock Mínimo:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $stock_minimo; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="stock_maximo">Stock Máximo:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $stock_maximo; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="precio_compra">Precio Compra:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $precio_compra; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="precio_venta">Precio Venta:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $precio_venta; ?></p>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="fecha_ingreso">Fecha de Ingreso:</label>
                                                  <p class="form-control-static" style=" border: none; box-shadow: none;"><?php echo $fecha_ingreso; ?></p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label for="imagen">Imagen del Producto</label>
                                          <img src="<?php echo $URL.'/almacen/img_productos/'.$imagen; ?>" alt="" class="img-thumbnail" style="max-width: 100%;">
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group text-right">
                            <a href="./index.php" class="btn btn-info">Lista de Productos</a>
                          </div>
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