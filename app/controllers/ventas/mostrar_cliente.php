<?php
$sql_cliente = "SELECT * FROM tb_clientes WHERE id_cliente = '$id_del_cliente'";

$query_clientes_mostrar = $pdo -> prepare($sql_cliente);
$query_clientes_mostrar -> execute();

$clientes_datos_mostrar = $query_clientes_mostrar->fetchAll(PDO::FETCH_ASSOC);
?>