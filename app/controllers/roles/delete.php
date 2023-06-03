<?php 
include ('../../config.php');

$id_rol = $_POST['id'];

$sentencia = "DELETE FROM tb_roles WHERE id_rol='$id_rol'";
$sql_delete = $pdo -> prepare($sentencia);

if($sql_delete->execute()){
    session_start();
    $_SESSION['mensaje'] = "Rol Eliminado Correctamente";
    $_SESSION['icono'] = "success"; ?>
    <script>
location.href="<?php echo $URL;?>/roles/index.php";
</script>
<?php

}





?>