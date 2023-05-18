<?php
include('../../config.php');

$id_categoria = $_GET['id_categoria'];

$sentencia ="DELETE FROM tb_categoria WHERE id_categoria = '$id_categoria'";
$sql_eliminar =$pdo->prepare($sentencia);
$sql_eliminar->execute();

session_start();
$_SESSION['mensaje'] = "Categoría Eliminado Correctamente";
$_SESSION['icono'] = "success";
//header('Location:'.$URL.'/usuarios/index.php'); ?>
<script>
location.href="<?php echo $URL;?>/categorias/index.php";
</script>
<?php
?>