<?php 

include('../../config.php');

$id_producto = $_GET['id_producto'];
$stock_calculado = $_GET['stock_calculado'];


$sql_compra = $pdo -> prepare ("UPDATE tb_almacen SET 
stock=:stock  WHERE id_producto =:id_producto");

$sql_compra -> bindParam('id_producto', $id_producto);
$sql_compra -> bindParam('stock', $stock_calculado);





if ($sql_compra ->execute()){
    echo "se actualizó todo";
    
}else{
    echo "Error al actualizar";
}

?>