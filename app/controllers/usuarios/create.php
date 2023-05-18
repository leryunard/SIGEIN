<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST ['password_repeat'];
$rol = $_POST['rol'];
if ($password_user == $password_repeat){
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);
        
    $sentencia =$pdo -> prepare("INSERT INTO tb_usuarios 
    (nombres,email,id_rol,password_user,fyh_creacion) VALUES (:nombres,:email,:id_rol,:password_user,:fyh_creacion)");

    $sentencia->bindParam('nombres', $nombres);
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('id_rol',$rol); 
    $sentencia->bindParam('password_user', $password_user);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->execute();
    session_start();
    $_SESSION['mensaje'] = "Usuario creado correctamente";
    $_SESSION['icono'] = "success";
    header('Location:'.$URL.'/usuarios/index.php');
}else{
    //echo "Error, las contraseñas no coinciden";
    session_start();
    $_SESSION['mensaje'] = "Error la contraseña no son iguales";
    $_SESSION['mensaje'] ="error";
    header('Location: '.$URL.'/usuarios/create.php');
    
}


//echo $password_user."<br>";
//echo md5($password_user)."<br>";
//echo sha1($password_user)."<br>";





?>