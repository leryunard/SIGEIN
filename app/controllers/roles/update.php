<?php
include('../../config.php');
$id_rol =$_POST['id'];
$rol = $_POST['rol'];

$sentencia_rol = $pdo -> prepare("UPDATE tb_roles SET rol=:rol, fyh_actualizacion=:fyh_actualizacion
WHERE id_rol=:id_rol");

$sentencia_rol -> bindParam('rol', $rol);
$sentencia_rol -> bindParam('fyh_actualizacion',$fechaHora);
$sentencia_rol -> bindParam('id_rol',$id_rol);
if($sentencia_rol -> execute()){
    session_start();
    $_SESSION['mensaje'] = "Rol actualizado correctamente";
    $_SESSION['icono'] = "success";
    header('Location:' .$URL. '/roles/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar el rol";
    $_SESSION['icono'] = "error";
    header('Location:' .$URL. '/roles/update.php?id='.$id_rol);
}
?>