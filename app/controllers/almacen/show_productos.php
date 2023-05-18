<?php

$id_producto = $_GET['id'];

$sql_productos ="SELECT * FROM tb_almacen as al INNER JOIN tb_categoria as ca on ca.id_categoria = al.id_categoria
INNER JOIN tb_usuarios as us on us.id_usuario = al.id_usuario WHERE id_producto = '$id_producto'";
$query_productos=$pdo->prepare($sql_productos);
$query_productos->execute();

$productos_datos = $query_productos->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos_datos as $producto_dato) {
    $nombre = $producto_dato['nombre'];
    $id_pro = $producto_dato['id_producto'];
    $id_usuario = $producto_dato['id_usuario'];
    $email = $producto_dato['email'];
    $codigo = $producto_dato['codigo'];
    $categoria_nombre = $producto_dato['nombre_categoria'];
    $descripcion = $producto_dato['descripcion'];
    $stock = $producto_dato['stock'];
    $stock_minimo = $producto_dato['stock_minimo'];
    $stock_maximo = $producto_dato['stock_maximo'];
    $precio_venta = $producto_dato['precio_venta'];
    $precio_compra = $producto_dato['precio_compra'];
    $fecha_ingreso = $producto_dato['fecha_ingreso'];
    $imagen = $producto_dato['imagen'];
}
?>