<?php 
$id_venta_get = $_GET['id'];
$sql_ventas = "SELECT *,cli.nombre_cliente as nombre_cliente FROM tb_ventas as ven INNER JOIN tb_clientes as cli ON ven.id_cliente = cli.id_cliente
WHERE ven.id_venta = '$id_venta_get'";

$query_ventas_mostrar = $pdo -> prepare($sql_ventas);
$query_ventas_mostrar -> execute();

$ventas_datos_mostrar = $query_ventas_mostrar->fetchAll(PDO::FETCH_ASSOC);

foreach ($ventas_datos_mostrar as $venta_mostrar){
    $numero_de_la_venta = $venta_mostrar['num_venta'];
    $id_del_cliente = $venta_mostrar['id_cliente'];
    $monto_venta = $venta_mostrar['total_pagado'];
}

?>