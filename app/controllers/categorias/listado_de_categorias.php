<?php

$sql_categoria = "SELECT * FROM tb_categoria";
$query_categoria = $pdo ->prepare($sql_categoria);
$query_categoria->execute();

$categorias_datos = $query_categoria->fetchAll(PDO::FETCH_ASSOC);

?>