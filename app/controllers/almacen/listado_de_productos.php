<?php 

$sql_productos = "SELECT * FROM tb_almacen as al INNER JOIN tb_categoria as ca ON 
ca.id_categoria = al.id_categoria INNER JOIN tb_usuarios as us ON us.id_usuario=al.id_usuario";

$query_productos = $pdo -> prepare($sql_productos);
$query_productos ->execute();

$productos_datos = $query_productos -> fetchAll (PDO::FETCH_ASSOC);

?>