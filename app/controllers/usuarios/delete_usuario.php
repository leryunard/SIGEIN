<?php
include('../../config.php');

$id_usuario = $_POST['id'];

$sentencia ="DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario'";
$sql_eliminar =$pdo->prepare($sentencia);
$sql_eliminar->execute();

session_start();
$_SESSION['mensaje'] = "Usuario Eliminado Correctamente";
$_SESSION['icono'] = "success";
header('Location:'.$URL.'/usuarios/index.php');

?>