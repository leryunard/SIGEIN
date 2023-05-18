<?php
include('../../config.php');

$id_producto = $_POST['id_producto'];

$sentencia ="DELETE FROM tb_almacen WHERE id_producto = '$id_producto'";
$sql_eliminar =$pdo->prepare($sentencia);
if($sql_eliminar->execute()){
    session_start();
    $_SESSION['mensaje'] = "Producto Eliminado Correctamente";
    $_SESSION['icono'] = "success";
    header('Location:'.$URL.'/almacen/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se puedo eliminar el producto";
    $_SESSION['icono'] = "error";
    header('Location:'.$URL.'/almacen/delete.php?id='.$id_producto);
}



?>