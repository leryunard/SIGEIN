<?php
include('../../config.php');

$id_proveedor = $_GET['id_proveedor'];

$sentencia ="DELETE FROM tb_proveedores WHERE id_proveedor = '$id_proveedor'";
$sql_eliminar =$pdo->prepare($sentencia);

if($sql_eliminar->execute()){
    session_start();
    $_SESSION['mensaje'] = "Proveedor Eliminado Correctamente";
    $_SESSION['icono'] = "success"; ?>
    <script>
location.href="<?php echo $URL;?>/proveedores/index.php";
</script>
<?php

}

?>

