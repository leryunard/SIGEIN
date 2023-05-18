<?php
include('../../config.php');

$id_cliente = $_GET['id_cliente'];
$nombre_cliente = $_GET['nombre_cliente'];
$celular_cliente = $_GET['celular_cliente'];
$nit_cliente = $_GET['nit_cliente'];
$email_cliente = $_GET['email_cliente'];


$sentencia = $pdo -> prepare("UPDATE tb_clientes SET 
nombre_cliente=:nombre_cliente,
nit_cliente=:nit_cliente,
celular_cliente=:celular_cliente,
email=:email,
fyh_actualizacion=:fyh_actualizacion WHERE id_cliente=:id_cliente");

$sentencia ->bindParam('id_cliente', $id_cliente);
$sentencia ->bindParam('nombre_cliente', $nombre_cliente);
$sentencia ->bindParam('celular_cliente', $celular_cliente);
$sentencia ->bindParam('nit_cliente', $nit_cliente);
$sentencia ->bindParam('email', $email_cliente);
$sentencia ->bindParam('fyh_actualizacion', $fechaHora);

if ($sentencia ->execute()){
    session_start();
    $_SESSION['mensaje'] = "Cliente actualizado correctamente";
    $_SESSION['icono'] = "success";
    //header('Location:' .$URL. '/categorias/index.php');
    ?>
    <script>
        location.href ="<?php echo $URL;?>/clientes/index.php";
    </script>
    <?php
}else{
    session_start();
    $_SESSION['mensaje'] = "Error en los datos";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href ="<?php echo $URL;?>/clientes/index.php";
    </script>
    <?php
    //header('Location:' .$URL. '/categorias/index.php');
}
?>