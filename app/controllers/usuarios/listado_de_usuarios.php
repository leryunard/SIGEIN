<?php 


$sql_usuarios = "SElECT * FROM tb_usuarios as u inner join tb_roles as r on r.id_rol = u.id_rol";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();

$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);


?>