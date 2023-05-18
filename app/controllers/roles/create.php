<?php
include('../../config.php');

$rol = $_POST['rol'];

$sql_rol = $pdo -> prepare("INSERT INTO tb_roles 
(rol,fyh_creacion) VALUES (:rol,:fyh_creacion)");

$sql_rol ->bindParam('rol', $rol);
$sql_rol ->bindParam('fyh_creacion', $fechaHora);
if ($sql_rol ->execute()){
    session_start();
    $_SESSION['mensaje'] = "Rol creado correctamente";
    $_SESSION['icono'] = "success";
    header('Location:' .$URL. '/roles/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error en los datos";
    $_SESSION['icono'] = "error";
    header('Location:' .$URL. '/roles/create.php');
}

?>