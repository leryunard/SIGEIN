<?php 

include('../../config.php');

$nombre_cliente = $_POST['nombre_cliente'];
$documento_identidad = $_POST['documento_identidad'];
$celular_cliente = $_POST['celular_cliente'];
$email_cliente = $_POST['email_cliente'];

$sql_cliente = $pdo -> prepare ("INSERT INTO tb_clientes (nombre_cliente,nit_cliente,celular_cliente,email,fyh_creacion) 
VALUES (:nombre_cliente,:nit_cliente,:celular_cliente,:email,:fyh_creacion)");

$sql_cliente -> bindParam('nombre_cliente', $nombre_cliente);
$sql_cliente -> bindParam('nit_cliente', $documento_identidad);
$sql_cliente -> bindParam('celular_cliente', $celular_cliente);
$sql_cliente -> bindParam('email', $email_cliente);
$sql_cliente -> bindParam('fyh_creacion', $fechaHora);


if ($sql_cliente ->execute()){

   //header('Location:' .$URL. '/categorias/index.php');
   ?>
   <script>
       location.href ="<?php echo $URL;?>/ventas/create.php";
   </script>
   <?php
}else{
   
   session_start();
   $_SESSION['mensaje'] = "Error en la compra";
   $_SESSION['icono'] = "error";
   ?>
   <script>
       location.href ="<?php echo $URL;?>/ventas/create.php";
   </script>
   <?php
   //header('Location:' .$URL. '/categorias/index.php');
}

?>