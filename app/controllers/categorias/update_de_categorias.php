<?php
include('../../config.php');
$id_categoria =$_GET['id_categoria'];
$nombre_categoria = $_GET['nombre_categoria'];

$sentencia_rol = $pdo -> prepare("UPDATE tb_categoria SET nombre_categoria=:nombre_categoria, fyh_actualizacion=:fyh_actualizacion
WHERE id_categoria=:id_categoria");

$sentencia_rol -> bindParam('nombre_categoria', $nombre_categoria);
$sentencia_rol -> bindParam('fyh_actualizacion',$fechaHora);
$sentencia_rol -> bindParam('id_categoria',$id_categoria);
if($sentencia_rol -> execute()){
    session_start();
    $_SESSION['mensaje'] = "Categoría actualizado correctamente";
    $_SESSION['icono'] = "success";
    //header('Location:' .$URL. '/roles/index.php');
?>
<script>
    location.href="<?php echo $URL;?>/categorias/index.php";
</script>
<?php
}else{
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar la categoría";
    $_SESSION['icono'] = "error";
  //  header('Location:' .$URL. '/roles/update.php?id='.$id_rol); ?>
  <script>
    location.href="<?php echo $URL;?>/categorias/index.php";
  </script>
  <?php
}
?>