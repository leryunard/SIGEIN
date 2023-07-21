<?php

$id_compra_get = $_GET['id'];

$sql_compras = "SELECT *,pro.codigo as codigo, pro.id_producto as id_producto_almacen, pro.nombre as nombre_producto, pro.descripcion as descripcion_producto,
pro.stock as stock, pro.stock_minimo as stock_minimo, pro.stock_maximo as stock_maximo, pro.precio_compra as precio_compra_almacen,
pro.precio_venta as precio_venta, pro.fecha_ingreso as fecha_ingreso_almacen, pro.imagen as imagen_producto,
ca.nombre_categoria as nombre_categoria, com.precio_compra as compra_producto_nueva, com.num_compra as numero_compra,
com.fecha_compra as fecha_compra_nueva, com.comprobante as comprobante_compra, com.cantidad as cantidad_compra,
usua.nombres as nombre_usuario_producto, usua.email as email_usuario, rol.rol as usuario_rol,
prove.nombre_proveedor as nombre_proveedor, prove.id_proveedor as id_proveedor, prove.email as email_proveedor, prove.celular as proveedor_celular,
prove.telefono as telefono_proveedor, prove.empresa as empresa_proveedor, prove.direccion as direccion_proveedor
FROM tb_compras as com INNER JOIN tb_almacen as pro ON pro.id_producto = com.id_producto
INNER JOIN tb_usuarios as usu ON usu.id_usuario = com.id_usuario 
INNER JOIN tb_categoria as ca ON ca.id_categoria = pro.id_categoria
INNER JOIN tb_usuarios as usua ON usua.id_usuario = pro.id_usuario
INNER JOIN tb_proveedores as prove ON prove.id_proveedor = com.id_proveedor
INNER JOIN tb_roles as rol ON rol.id_rol = usua.id_rol WHERE id_compra = '$id_compra_get'";
$query_compras = $pdo ->prepare($sql_compras);
$query_compras->execute();

$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);

foreach ($compras_datos as $compra_dato){
    //datos producto almacen
    $id_producto_almacen = $compra_dato['id_producto_almacen'];
    $codigo_producto = $compra_dato['codigo'];
    $categoria_producto = $compra_dato['nombre_categoria'];
    $email_usuario_producto = $compra_dato['email_usuario'];
    $descripcion_producto = $compra_dato['descripcion_producto'];
    $stock_producto = $compra_dato['stock'];
    $stock_minimo_producto = $compra_dato['stock_minimo'];
    $stock_maximo_producto = $compra_dato['stock_maximo'];
    $precio_compra_producto_almacen = $compra_dato['precio_compra_almacen'];
    $precio_venta_producto_almacen = $compra_dato['precio_venta'];
    $fecha_ingreso_almacen = $compra_dato['fecha_ingreso_almacen'];
    $nombre_producto = $compra_dato['nombre'];
    $imagen_producto = $compra_dato['imagen_producto'];

    //datos proveedor
    $id_proveedor_compra = $compra_dato['id_proveedor'];
    $nombre_proveedor = $compra_dato['nombre_proveedor'];
    $email_proveedor = $compra_dato['email_proveedor'];
    $celular_proveedor = $compra_dato['proveedor_celular'];
    $telefono_proveedor = $compra_dato['telefono_proveedor'];
    $empresa_proveedor = $compra_dato['empresa_proveedor'];
    $direccion_proveedor = $compra_dato['direccion_proveedor'];

    //detalle de la compra
    $numero_de_compra = $compra_dato['numero_compra'];
    $fecha_de_compra = $compra_dato['fecha_compra_nueva'];
    $comprobante_compra = $compra_dato['comprobante_compra'];
    $precio_compra = $compra_dato['compra_producto_nueva'];
    $stock_actual_compra = $compra_dato['stock'];
    $cantidad_compra = $compra_dato['cantidad_compra'];
    $usuario_compra = $compra_dato['nombres'];
    $stock_total_compra = $stock_actual_compra + $cantidad_compra;
    $id_de_compra = $compra_dato['id_compra'];
}

?>