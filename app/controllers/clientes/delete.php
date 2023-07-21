<?php
include('../../config.php');

$id_cliente = $_GET['id_cliente'];

$sentencia ="DELETE FROM tb_clientes WHERE id_cliente = '$id_cliente'";
$sql_eliminar =$pdo->prepare($sentencia);

if($sql_eliminar->execute()){
    session_start();
    $_SESSION['mensaje'] = "Cliente Eliminado Correctamente";
    $_SESSION['icono'] = "success"; ?>
    <script>
location.href="<?php echo $URL;?>/clientes/index.php";
</script>
<?php

}

?>

