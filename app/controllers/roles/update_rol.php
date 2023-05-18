<?php

$id_rol = $_GET['id'];

$sql_rol ="SELECT * FROM tb_roles WHERE id_rol = '$id_rol'";
$query_rol=$pdo->prepare($sql_rol);
$query_rol->execute();

$rol_datos = $query_rol->fetchAll(PDO::FETCH_ASSOC);

foreach ($rol_datos as $rol_dato) {
    $rol = $rol_dato['rol'];
}

?>