<?php

$sql_compras = "SELECT *,pro.codigo as codigo, pro.nombre as nombre_producto, pro.descripcion as descripcion_producto,
pro.stock as stock, pro.stock_minimo as stock_minimo, pro.stock_maximo as stock_maximo, pro.precio_compra as precio_compra_almacen,
pro.precio_venta as precio_venta, pro.fecha_ingreso as fecha_ingreso, pro.imagen as imagen_producto,
ca.nombre_categoria as nombre_categoria, com.precio_compra as compra_producto_nueva, com.num_compra as numero_de_compra, 
usua.nombres as nombre_usuario_producto, usua.email as email_usuario, rol.rol as usuario_rol,
prove.nombre_proveedor as nombre_proveedor, prove.email as email_proveedor, prove.celular as proveedor_celular,
prove.telefono as telefono_proveedor, prove.empresa as empresa_proveedor, prove.direccion as direccion_proveedor
FROM tb_compras as com INNER JOIN tb_almacen as pro ON pro.id_producto = com.id_producto
INNER JOIN tb_usuarios as usu ON usu.id_usuario = com.id_usuario 
INNER JOIN tb_categoria as ca ON ca.id_categoria = pro.id_categoria
INNER JOIN tb_usuarios as usua ON usua.id_usuario = pro.id_usuario
INNER JOIN tb_proveedores as prove ON prove.id_proveedor = com.id_proveedor
INNER JOIN tb_roles as rol ON rol.id_rol = usua.id_rol";
$query_compras = $pdo ->prepare($sql_compras);
$query_compras->execute();

$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);

/*foreach ($compras_datos as $compra_dato){
    $id_compra = $compra_dato['id_compra'];
    $id_producto = $compra_dato['id_producto'];
    $nombre_producto = $compra_dato['nombre'];
    $nombre_usuario = $compra_dato['nombres'];
}*/

?>