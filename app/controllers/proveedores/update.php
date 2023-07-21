<?php
include('../../config.php');

$id_proveedor = $_GET['id_proveedor'];
$nombre_proveedor = $_GET['nombre_proveedor'];
$celular = $_GET['celular'];
$telefono = $_GET['telefono'];
$empresa = $_GET['empresa'];
$email = $_GET['email_proveedor'];
$direccion = $_GET['direccion'];


$sentencia = $pdo -> prepare("UPDATE tb_proveedores SET 
nombre_proveedor=:nombre_proveedor,
celular=:celular,
telefono=:telefono,
empresa=:empresa,
email=:email,
direccion=:direccion,
fyh_actualizacion=:fyh_actualizacion WHERE id_proveedor=:id_proveedor");

$sentencia ->bindParam('id_proveedor', $id_proveedor);
$sentencia ->bindParam('nombre_proveedor', $nombre_proveedor);
$sentencia ->bindParam('celular', $celular);
$sentencia ->bindParam('telefono', $telefono);
$sentencia ->bindParam('empresa', $empresa);
$sentencia ->bindParam('email', $email);
$sentencia ->bindParam('direccion', $direccion);
$sentencia ->bindParam('fyh_actualizacion', $fechaHora);

if ($sentencia ->execute()){
    session_start();
    $_SESSION['mensaje'] = "Proveedor actualizado correctamente";
    $_SESSION['icono'] = "success";
    //header('Location:' .$URL. '/categorias/index.php');
    ?>
    <script>
        location.href ="<?php echo $URL;?>/proveedores/index.php";
    </script>
    <?php
}else{
    session_start();
    $_SESSION['mensaje'] = "Error en los datos";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href ="<?php echo $URL;?>/proveedores/index.php";
    </script>
    <?php
    //header('Location:' .$URL. '/categorias/index.php');
}
?>