<?php 
include('app/config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/roles/listado_de_roles.php');
include('app/controllers/categorias/listado_de_categorias.php');
include('app/controllers/almacen/listado_de_productos.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Te damos la bienvenida: <strong><?php echo $nombre_rol;?></strong></h1>
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
                foreach ($usuarios_datos as $usuario_dato){ 
                  $cantidad_usuario = $cantidad_usuario + 1;} ?>
                    <h3><?php echo $cantidad_usuario;?></h3>
                <p>Usuarios Registrados</p>
              </div>
              <a href ="<?php echo $URL. '/usuarios/create.php'?>">             
                 <div class="icon">
                  <i class="fas fa-user-plus"></i>
                 </div></a>
              <a href="<?php echo $URL.'/usuarios/index.php';?>" class="small-box-footer">
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
                foreach ($roles_datos as $rol_dato){ 
                  $roles_cantidad = $roles_cantidad + 1;} ?>
                    <h3><?php echo $roles_cantidad;?></h3>
                <p>Roles Registrados</p>
              </div>
              <a href ="<?php echo $URL. '/roles/create.php'?>">             
                 <div class="icon">
                  <i class="nav-icon fas fa-address-card"></i>
                 </div></a>
              <a href="<?php echo $URL.'/roles/index.php';?>" class="small-box-footer">
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
                foreach ($categorias_datos as $categoria_dato){ 
                  $categorias_registradas = $categorias_registradas + 1;} ?>
                    <h3><?php echo $categorias_registradas;?></h3>
                <p>Categorías Registradas</p>
              </div>
              <a href ="<?php echo $URL. '/categorias/index.php'?>">             
                 <div class="icon">
                  <i class="nav-icon fas fa-tags"></i>
                 </div></a>
              <a href="<?php echo $URL.'/categorias/index.php';?>" class="small-box-footer">
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
                foreach ($productos_datos as $producto_dato){ 
                  $productos = $productos + 1;} ?>
                    <h3><?php echo $productos;?></h3>
                <p>Productos Almacenados</p>
              </div>
              <a href ="<?php echo $URL. '/almacen/create.php'?>">             
                 <div class="icon">
                  <i class="nav-icon fas fa-truck-moving"></i>
                 </div></a>
              <a href="<?php echo $URL.'/almacen/index.php';?>" class="small-box-footer">
                Más detalles <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
<?php include('layout/parte2.php') ?>