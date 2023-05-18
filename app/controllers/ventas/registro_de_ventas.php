<?php 

include('../../config.php');

$numero_de_venta = $_GET['numero_de_venta'];
$id_cliente = $_GET['id_del_cliente'];
$total_a_cancelar = $_GET['total_a_cancelar'];


$sql_venta_query = $pdo -> prepare ("INSERT INTO tb_ventas (num_venta,id_cliente,total_pagado,fyh_creacion) 
VALUES (:num_venta,:id_cliente,:total_pagado,:fyh_creacion)");

$sql_venta_query -> bindParam('num_venta', $numero_de_venta);
$sql_venta_query -> bindParam('id_cliente', $id_cliente);
$sql_venta_query -> bindParam('total_pagado', $total_a_cancelar);
$sql_venta_query -> bindParam('fyh_creacion', $fechaHora);


if ($sql_venta_query ->execute()){

   session_start();
   $_SESSION['mensaje'] = "Venta exitosa";
   $_SESSION['icono'] = "success";
   //header('Location:' .$URL. '/ventas/index.php');
   ?>
   <script>
       location.href ="<?php echo $URL;?>/ventas/index.php";
   </script>
   <?php
}else{

   session_start();
   $_SESSION['mensaje'] = "Error en la venta";
   $_SESSION['icono'] = "error";
   ?>
   <script>
       location.href ="<?php echo $URL?>/ventas/create.php";
   </script>
   <?php
   //header('Location:' .$URL. '/categorias/index.php');
}

?>