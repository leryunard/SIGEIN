<?php
include('../app/config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">
            <p style=color:#1E90FF>Listado de Productos
          </h1>
          </p>
        </div><!-- /.col -->
        <div class="col-sm-6"
          style="background-color: #f2f2f2; padding: 10px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
          <div class="d-flex flex-row justify-content-center">
            <span class="mr-2">
              <i class="fas fa-square text-danger"></i> Producto en riesgo de agotarse
            </span>
            <span>
              <i class="fas fa-square text-cyan"></i> Demasiado producto en almacén
            </span>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Productos Registrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block">
              <div class="table table-responsive">
                <table id="example1" class="table table-bordered table-sm" style="background-color: white">
                  <thead>
                    <tr>
                      <th>
                        <center># Pro.</center>
                      </th>
                      <th>
                        <center>Código Producto</center>
                      </th>
                      <th>
                        <center>Categoría</center>
                      </th>
                      <th>
                        <center>Nombre</center>
                      </th>
                      <th>
                        <center>Imagen</center>
                      </th>
                      <th>
                        <center>Stock</center>
                      </th>
                      <th>
                        <center>Precio Compra</center>
                      </th>
                      <th>
                        <center>Precio Venta</center>
                      </th>
                      <th>
                        <center>Fecha Compra</center>
                      </th>
                      <th>
                        <center>Usuario</center>
                      </th>
                      <th>
                        <center>Acciones</center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $contador = 0;
                    foreach ($productos_datos as $producto_dato) {
                      $id_producto = $producto_dato['id_producto'] ?>
                      <tr>
                        <td>
                          <center>
                            <?php echo $contador = $contador + 1 ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['codigo'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['nombre_categoria'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['nombre'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php
                            $imagen_url = $URL . "/almacen/img_productos/" . $producto_dato['imagen'];
                            echo "<img style='object-fit: contain'width='100px' height='100px' src='" . $imagen_url . "' alt='Imagen del producto'>";
                            ?>
                          </center>
                        </td>


                        <?php
                        $stock_actual = $producto_dato['stock'];
                        $stock_minimo = $producto_dato['stock_minimo'];
                        $stock_maximo = $producto_dato['stock_maximo'];

                        if ($stock_actual > $stock_maximo) { ?>
                          <td style="background-color:#45B39D;">
                            <center>
                              <?php echo $producto_dato['stock'] ?>
                            </center>
                          </td>
                          <?php
                        } else if ($stock_actual < $stock_minimo) { ?>
                            <td style="background-color:#E13939" ;>
                              <center>
                              <?php echo $producto_dato['stock'] ?>
                              </center>
                            </td>
                            <?php
                        } else { ?>
                            <td>
                              <center>
                              <?php echo $producto_dato['stock'] ?>
                              </center>
                            </td>
                            <?php
                        }

                        ?>
                        <td>
                          <center>
                            <?php echo $producto_dato['precio_compra'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['precio_venta'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['fecha_ingreso'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <?php echo $producto_dato['email'] ?>
                          </center>
                        </td>
                        <td>
                          <center>
                            <div class="btn-group" style="width: 250px;">
                              <a href="./show.php?id=<?php echo $id_producto; ?>" id type="button"
                                class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                              <a href="./update.php?id=<?php echo $id_producto; ?>" type="button"
                                class="btn btn-success btn-sm"><i class="fa fa-pen"> Editar</i></a>
                              <a href="./delete.php?id=<?php echo $id_producto; ?>" type="button"
                                class="btn btn-danger btn-sm"><i class="fa fa-trash"> Borrar</i></a>
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
<?php include('../layout/mensajes.php') ?>
<?php include('../layout/parte2.php') ?>
<script>
  function openPopup(imageUrl) {
    // Abre una ventana emergente con la imagen completa
    window.open(imageUrl, "_blank", "width=800, height=600");
  }
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 25,
      language: {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Roles)",
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>