<?php 

include('../../config.php');

$id_producto = $_GET['id_producto'];
$id_proveedor = $_GET['id_proveedor'];
$num_compra = $_GET['numero_compra'];
$fecha_compra = $_GET['fecha_compra'];
$comprobante = $_GET['comprobante_compra'];
$precio_compra = $_GET['precio_compra'];
$cantidad = $_GET['cantidad_compra'];
$id_usario = $_GET['id_usuario'];
$stock_total = $_GET['stock_total'];

$sql_compra = $pdo -> prepare ("INSERT INTO tb_compras (id_producto,num_compra,fecha_compra,id_proveedor,comprobante,id_usuario,precio_compra,cantidad,fyh_creacion) 
VALUES (:id_producto,:num_compra,:fecha_compra,:id_proveedor,:comprobante,:id_usuario,:precio_compra,:cantidad,:fyh_creacion)");

$sql_compra -> bindParam('id_producto', $id_producto);
$sql_compra -> bindParam('num_compra', $num_compra);
$sql_compra -> bindParam('id_proveedor', $id_proveedor);
$sql_compra -> bindParam('id_usuario', $id_usario);
$sql_compra -> bindParam('fecha_compra', $fecha_compra);
$sql_compra -> bindParam('comprobante', $comprobante);
$sql_compra -> bindParam('precio_compra', $precio_compra);
$sql_compra -> bindParam('cantidad', $cantidad);
$sql_compra -> bindParam('fyh_creacion', $fechaHora);

$pdo ->beginTransaction();



if ($sql_compra ->execute()){

   
   $sentencia = $pdo -> prepare("UPDATE tb_almacen SET stock=:stock WHERE id_producto=:id_producto");
   $sentencia -> bindParam('stock', $stock_total);
   $sentencia -> bindParam('id_producto', $id_producto);
   $sentencia ->execute();

   $pdo ->commit();

   session_start();
   $_SESSION['mensaje'] = "Compra exitosa";
   $_SESSION['icono'] = "success";
   //header('Location:' .$URL. '/categorias/index.php');
   ?>
   <script>
       location.href ="<?php echo $URL;?>/compras/index.php";
   </script>
   <?php
}else{
   $pdo ->rollBack();
   session_start();
   $_SESSION['mensaje'] = "Error en la compra";
   $_SESSION['icono'] = "error";
   ?>
   <script>
       location.href ="<?php echo $URL;?>/compras/create.php";
   </script>
   <?php
   //header('Location:' .$URL. '/categorias/index.php');
}

?>