<?php
include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/roles/listado_de_roles.php');
include('app/controllers/categorias/listado_de_categorias.php');
include('app/controllers/almacen/listado_de_productos.php');
include('app/controllers/proveedores/listado_de_proveedores.php');
include('app/controllers/compras/listado_de_compras.php');
include('app/controllers/ventas/listado_de_ventas.php');
include('app/controllers/clientes/listado_de_cliente.php');
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Te damos la bienvenida: <strong><?php echo $nombre_rol; ?></strong></h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <!-- USUARIOS -->
                <div class="row">
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <?php
                                $cantidad_usuario = 0;
                                foreach ($usuarios_datos as $usuario_dato) {
                                    $cantidad_usuario = $cantidad_usuario + 1;
                                } ?>
                                <h3><?php echo $cantidad_usuario; ?></h3>
                                <p>Usuarios Registrados</p>
                            </div>
                            <a href="<?php echo $URL . '/usuarios/create.php' ?>">
                                <div class="icon">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/usuarios/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- ROLES -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <?php
                                $roles_cantidad = 0;
                                foreach ($roles_datos as $rol_dato) {
                                    $roles_cantidad = $roles_cantidad + 1;
                                } ?>
                                <h3><?php echo $roles_cantidad; ?></h3>
                                <p>Roles Registrados</p>
                            </div>
                            <a href="<?php echo $URL . '/roles/create.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-address-card"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/roles/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CATEGORÍA -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <?php
                                $categorias_registradas = 0;
                                foreach ($categorias_datos as $categoria_dato) {
                                    $categorias_registradas = $categorias_registradas + 1;
                                } ?>
                                <h3><?php echo $categorias_registradas; ?></h3>
                                <p>Categorías Registradas</p>
                            </div>
                            <a href="<?php echo $URL . '/categorias/index.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-tags"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/categorias/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- PRODUCTO -->

                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-primary">
                            <div class="inner">
                                <?php
                                $productos = 0;
                                foreach ($productos_datos as $producto_dato) {
                                    $productos = $productos + 1;
                                } ?>
                                <h3><?php echo $productos; ?></h3>
                                <p>Productos Almacenados</p>
                            </div>
                            <a href="<?php echo $URL . '/almacen/create.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-truck-moving"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/almacen/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- PROVEEDORES -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-dark">
                            <div class="inner">
                                <?php
                                $proveedor = 0;
                                foreach ($proveedores_datos as $proveedor_dato) {
                                    $proveedor = $proveedor + 1;
                                } ?>
                                <h3><?php echo $proveedor; ?></h3>
                                <p>Proveedores Registrados</p>
                            </div>
                            <a href="<?php echo $URL . '/proveedores/index.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-parachute-box"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/proveedores/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- COMPRAS -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-olive">
                            <div class="inner">
                                <?php
                                $compra = 0;
                                foreach ($compras_datos as $compra_dato) {
                                    $compra = $compra + 1;
                                } ?>
                                <h3><?php echo $compra; ?></h3>
                                <p>Compras Registradas</p>
                            </div>
                            <a href="<?php echo $URL . '/compras/create.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-cart-plus"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/compras/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- VENTAS -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-indigo">
                            <div class="inner">
                                <?php
                                $venta = 0;
                                foreach ($ventas_datos as $venta_dato) {
                                    $venta = $venta + 1;
                                } ?>
                                <h3><?php echo $venta; ?></h3>
                                <p>Ventas Registradas</p>
                            </div>
                            <a href="<?php echo $URL . '/ventas/create.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-shopping-bag"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/ventas/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Clientes -->
                    <div class="col-lg-3 col-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-lightblue">
                            <div class="inner">
                                <?php
                                $cliente = 0;
                                foreach ($clientes_datos as $cliente_dato) {
                                    $cliente = $cliente + 1;
                                } ?>
                                <h3><?php echo $cliente; ?></h3>
                                <p>Clientes Registrados</p>
                            </div>
                            <a href="<?php echo $URL . '/clientes/index.php' ?>">
                                <div class="icon">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                </div>
                            </a>
                            <a href="<?php echo $URL . '/clientes/index.php'; ?>" class="small-box-footer">
                                Más detalles <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <div style="display: flex; justify-content: center; align-items: center; height: 100%; margin-top: 50px;">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                <p style="font-weight: bold; font-size: large">Cantidad total de productos por categoría</p>
                <canvas id="myChart" style="width: 400px; height: 400px;"></canvas>
            </div>
        </div>
        <?php
        // Consulta para obtener las categorías y la cantidad de productos por categoría
        $sql = "SELECT tb_categoria.nombre_categoria, COUNT(tb_almacen.id_categoria) AS cantidad_productos
        FROM tb_categoria
        LEFT JOIN tb_almacen ON tb_categoria.id_categoria = tb_almacen.id_categoria
        GROUP BY tb_categoria.nombre_categoria";

        $query = $pdo->prepare($sql);
        $query->execute();

        $categorias = [];
        $cantidad_productos = [];

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $categorias[] = $row['nombre_categoria'];
            $cantidad_productos[] = $row['cantidad_productos'];
        }

        // Convertir los arrays a JSON para usarlos en JavaScript
        $categorias_json = json_encode($categorias);
        $cantidad_productos_json = json_encode($cantidad_productos);
        ?>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');

            // Obtener los arrays JSON de PHP
            var categorias = JSON.parse('<?php echo $categorias_json; ?>');
            var cantidad_productos = JSON.parse('<?php echo $cantidad_productos_json; ?>');

            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: categorias, // Usar las categorías de la base de datos
                    datasets: [{
                        data: cantidad_productos, // Usar la cantidad de productos de la base de datos
                        backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                }
            });
        </script>
    </div>

<?php include('layout/parte2.php') ?>