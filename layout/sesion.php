<?php
session_start();
if (isset($_SESSION['sesion_email'])){
  //echo "si existe sesion de ".$_SESSION['sesion_email'];
  $email_sesion = $_SESSION['sesion_email'];
  $sql = "SElECT * FROM tb_usuarios as u inner join tb_roles as r on 
  r.id_rol=u.id_rol WHERE email = '$email_sesion'";
  $query = $pdo->prepare($sql);
  $query->execute();

  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach ($usuarios as $usuario){
      $nombres_sesion = $usuario['nombres'];
      $nombre_rol = $usuario['rol'];
      $email_usuario = $usuario['email'];
      $id_usuario_sesion = $usuario['id_usuario'];
  }
}else{
  echo "no existe sesión";
  header('Location:'.$URL.'/login');
}
?> 