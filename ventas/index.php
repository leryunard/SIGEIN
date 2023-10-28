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
                    <h1 class="m-0">Listado de ventas realizadas </h1>
                </div><!-- /.col -->

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
                            <h3 class="card-title">Ventas Registradas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
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
                                        <th>
                                            <center>#</center>
                                        </th>
                                        <th>
                                            <center># de Venta</center>
                                        </th>
                                        <th>
                                            <center>Productos</center>
                                        </th>
                                        <th>
                                            <center>Clientes</center>
                                        </th>
                                        <th>
                                            <center>Total Pagado</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $contador = 0;
                                    foreach ($ventas_datos as $venta_dato) {
                                        $id_venta = $venta_dato['id_venta'];
                                        $numero_venta = $venta_dato['num_venta'];
                                        $contador = $contador + 1;
                                        $id_cliente_venta = $venta_dato['id_cliente'];
                                        $total_pagado = $venta_dato['total_pagado'];
                                        ?>

                                        <tr>
                                            <td>
                                                <center><?php echo $contador; ?></center>
                                            </td>
                                            <td>
                                                <center><?php echo $numero_venta ?></center>
                                            </td>
                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#modal-productos-venta<?php echo $id_venta; ?>">
                                                        Productos
                                                    </button>
                                                    <div class="modal fade"
                                                         id="modal-productos-venta<?php echo $id_venta ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                     style="background-color: aqua;">
                                                                    <h4 class="modal-title">Productos de la
                                                                        venta: <?php echo $venta_dato['num_venta']; ?></h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered table-sm table-hover table-striped">
                                                                            <thead>
                                                                            <tr>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Nro
                                                                                </th>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Producto
                                                                                </th>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Descripción
                                                                                </th>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Cantidad
                                                                                </th>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Precio Unitario
                                                                                </th>
                                                                                <th style="background-color:#C3B4B4; text-align: center;">
                                                                                    Subtotal
                                                                                </th>
                                                                            </tr>

                                                                            </thead>

                                                                            <tbody>
                                                                            <?php
                                                                            $contador_de_carrito = 0;
                                                                            $nro_venta = $venta_dato['num_venta'];
                                                                            $sql_carrito = "SELECT *,alma.id_producto as id_producto_almacen,alma.nombre as nombre_producto, alma.descripcion as descripcion_producto,
                                                    alma.precio_venta as precio_unitario_producto,alma.stock as stock_almacen ,carr.cantidad as cantidad_producto
                                                    FROM tb_carrito as carr 
                                                    INNER JOIN tb_almacen as alma ON carr.id_producto = alma.id_producto WHERE carr.num_venta ='$nro_venta;'
                                                    ORDER BY carr.id_carrito DESC";

                                                                            $query_carrito = $pdo->prepare($sql_carrito);
                                                                            $query_carrito->execute();
                                                                            $productos_carrito = $query_carrito->fetchAll(PDO::FETCH_ASSOC);

                                                                            $total_cantidad = 0;
                                                                            $total_precio_unitario = 0;
                                                                            $total_de_venta = 0;
                                                                            foreach ($productos_carrito as $producto_carrito) {
                                                                                $id_carrito = $producto_carrito['id_carrito'];
                                                                                $contador_de_carrito = $contador_de_carrito + 1;
                                                                                $nombre_producto = $producto_carrito['nombre_producto'];
                                                                                $descripcion_producto = $producto_carrito['descripcion_producto'];
                                                                                $cantidad_producto = $producto_carrito['cantidad_producto'];
                                                                                $precio_unitario = floatval($producto_carrito['precio_unitario_producto']);
                                                                                $subtotal_producto = floatval($cantidad_producto * $precio_unitario);
                                                                                $total_cantidad = $total_cantidad + $cantidad_producto;
                                                                                $total_precio_unitario = $total_precio_unitario + $precio_unitario;
                                                                                $total_de_venta = $total_de_venta + $subtotal_producto;
                                                                                $id_producto_almacen = $producto_carrito['id_producto_almacen'];
                                                                                ?>


                                                                                <tr>
                                                                                    <td>
                                                                                        <center> <?php echo $contador_de_carrito; ?>
                                                                                            <input hidden name=""
                                                                                                   id="id_producto_almacen<?php echo $contador_de_carrito; ?>"
                                                                                                   value="<?php echo $id_producto_almacen ?>">
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center> <?php echo $nombre_producto; ?> </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center> <?php echo $descripcion_producto ?> </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center>
                                                                                            <span id="cantidad_carrito<?php echo $contador_de_carrito ?>"><?php echo $cantidad_producto ?></span>
                                                                                            <input hidden name=""
                                                                                                   value="<?php echo $producto_carrito['stock_almacen']; ?>"
                                                                                                   id="stock_de_inventario<?php echo $contador_de_carrito; ?>">
                                                                                        </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center> <?php echo $precio_unitario ?> </center>
                                                                                    </td>
                                                                                    <td>
                                                                                        <center> <?php echo $subtotal_producto ?> </center>
                                                                                    </td>
                                                                                </tr>

                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <tr>
                                                                                <th colspan="3"
                                                                                    style="background-color: #E8A2A2; text-align:right">
                                                                                    TOTAL
                                                                                </th>
                                                                                <th>
                                                                                    <center><?= $total_cantidad; ?></center>
                                                                                </th>
                                                                                <th>
                                                                                    <center> <?php echo $total_precio_unitario ?> </center>
                                                                                </th>
                                                                                <th style="background-color:yellowgreen">
                                                                                    <center><?= $total_de_venta ?></center>
                                                                                </th>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Cerrar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                </center>
                                            </td>

                                            <td>
                                                <center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#modal_cliente_venta<?php echo $id_venta; ?>">
                                                        <?php echo $venta_dato['nombre_cliente']; ?>
                                                    </button>
                                                </center>
                                                <!-- Modal -->

                                                <!--Modal para agregar clientes-->
                                                <div class="modal fade" id="modal_cliente_venta<?php echo $id_venta ?>">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color:aqua;">
                                                                <h4 class="modal-title">Datos Cliente </h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <?php
                                                            $sql_cliente_venta = "SELECT * FROM tb_clientes WHERE id_cliente = '$id_cliente_venta'";

                                                            $query_cliente_venta = $pdo->prepare($sql_cliente_venta);
                                                            $query_cliente_venta->execute();

                                                            $clientes_datos_venta = $query_cliente_venta->fetchAll(PDO::FETCH_ASSOC);

                                                            foreach ($clientes_datos_venta as $cliente_dato_venta) {
                                                                $nombre_cliente = $cliente_dato_venta['nombre_cliente'];
                                                                $nit_cliente = $cliente_dato_venta['nit_cliente'];
                                                                $celular_cliente = $cliente_dato_venta['celular_cliente'];
                                                                $email_cliente = $cliente_dato_venta['email'];
                                                            }
                                                            ?>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="">Nombre del Cliente</label>
                                                                    <span><?php echo $nombre_cliente; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Documento de Identidad</label>
                                                                    <span><?php echo $nit_cliente; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Celular</label>
                                                                    <span><?php echo $celular_cliente; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Correo Electrónico</label>
                                                                    <span><?php echo $email_cliente; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">

                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>

                                                    </div>

                                                </div>

                                            </td>
                                            <td>
                                                <center>$<?php echo $total_pagado ?></center>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="show.php?id=<?= $id_venta; ?>" class="btn btn-info"><i
                                                                class="fa fa-eye"></i> Ver Detalle</a>
                                                    <a href="delete.php?id=<?= $id_venta; ?>&num_venta=<?php echo $numero_venta; ?>"
                                                       class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</a>
                                                    <a href="factura.php?id=<?= $id_venta; ?>&num_venta=<?php echo $numero_venta; ?>"
                                                       class="btn btn-secondary" target="_blank"><i
                                                                class="fa fa-print"></i> Imprimir</a>
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

