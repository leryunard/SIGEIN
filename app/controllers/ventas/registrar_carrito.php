<?php 

include('../../config.php');

$num_venta = $_GET['num_venta'];
$id_producto = $_GET['id_producto_seleccionado'];
$cantidad = $_GET['cantidad_venta_producto'];
//$image = $_POST['image'];


$sql_producto = $pdo -> prepare ("INSERT INTO tb_carrito (num_venta, id_producto, cantidad, fyh_creacion)  
VALUES (:num_venta, :id_producto, :cantidad, :fyh_creacion) ");

$sql_producto -> bindParam('num_venta', $num_venta);
$sql_producto -> bindParam('id_producto', $id_producto);
$sql_producto -> bindParam('cantidad', $cantidad);
$sql_producto -> bindParam('fyh_creacion', $fechaHora);



if ($sql_producto ->execute()){ ?>

    <script>
        location.href="<?php echo $URL.'/ventas/create.php'?>";
    </script>
 <?php
 }else{
    ?>
    <script>
        location.href="<?php echo $URL.'/ventas/create.php'?>";
    </script>
 <?php
 }

?>