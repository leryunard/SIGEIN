<?php
include('../../config.php');

$nombre_proveedor = $_GET['nombre_proveedor'];
$celular = $_GET['celular'];
$telefono = $_GET['telefono'];
$empresa = $_GET['empresa'];
$email_proveedor = $_GET['email_proveedor'];
$direccion = $_GET['direccion'];


$sentencia = $pdo -> prepare("INSERT INTO tb_proveedores 
(nombre_proveedor,celular,telefono,empresa,email,direccion,fyh_creacion) 
VALUES (:nombre_proveedor,:celular,:telefono,:empresa,:email,:direccion,:fyh_creacion)");

$sentencia ->bindParam('nombre_proveedor', $nombre_proveedor);
$sentencia ->bindParam('celular', $celular);
$sentencia ->bindParam('telefono', $telefono);
$sentencia ->bindParam('empresa', $empresa);
$sentencia ->bindParam('email', $email_proveedor);
$sentencia ->bindParam('direccion', $direccion);
$sentencia ->bindParam('fyh_creacion', $fechaHora);
if ($sentencia ->execute()){
    session_start();
    $_SESSION['mensaje'] = "Proveedor creado correctamente";
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