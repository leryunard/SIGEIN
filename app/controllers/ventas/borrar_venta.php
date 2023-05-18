<?php 
include ('../../config.php');

$id_de_venta = $_GET['id_venta'];
$num_venta = $_GET['num_venta'];

$pdo ->beginTransaction();

$sentencia = $pdo->prepare("DELETE FROM tb_ventas WHERE id_venta=:id_venta");
$sentencia->bindParam('id_venta',$id_de_venta);

if($sentencia->execute()){ 
    
    $sentencia2 = $pdo->prepare("DELETE FROM tb_carrito WHERE num_venta=:num_venta");
    $sentencia2->bindParam('num_venta',$num_venta);
    $sentencia2->execute();
    $pdo->commit();
    session_start();
   $_SESSION['mensaje'] = "Venta eliminada exitosamente";
   $_SESSION['icono'] = "success";
    ?>
   <script>
    location.href="<?php echo $URL. '/ventas/index.php';?>"
   </script>
<?php  
}else{
    ?>
   <script>
    location.href="<?php echo $URL. '/ventas/index.php';?>"
   </script>
<?php 
 session_start();
  $_SESSION['mensaje'] = "No se pudo realizar esta acción";
        $_SESSION['icono'] = "error";
    echo "Error al borrar la venta";
    $pdo->rollBack();
    
}
?>