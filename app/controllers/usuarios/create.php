<?php
include('../../config.php');

$nombres = $_POST['nombres'];
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$rol = $_POST['rol'];

if ($password_user == $password_repeat) {
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    try {
        $sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombres, email, id_rol, password_user, fyh_creacion) VALUES (:nombres, :email, :id_rol, :password_user, :fyh_creacion)");

        $sentencia->bindParam(':nombres', $nombres);
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':id_rol', $rol);
        $sentencia->bindParam(':password_user', $password_user);
        $sentencia->bindParam(':fyh_creacion', $fechaHora);
        $sentencia->execute();

        session_start();
        $_SESSION['mensaje'] = "Usuario creado correctamente";
        $_SESSION['icono'] = "success";
        header('Location:'.$URL.'/usuarios/index.php');
    } catch (PDOException $e) {
        if ($e->getCode() === '45000') {
            // Error: Ya existe un usuario con ese email
            session_start();
            $_SESSION['mensaje'] = "Ya existe un usuario con ese email";
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/usuarios/create.php');
        } else {
            // Otro error
            session_start();
            $_SESSION['mensaje'] = "Error al crear el usuario: " . $e->getMessage();
            $_SESSION['icono'] = "error";
            header('Location: '.$URL.'/usuarios/create.php');
        }
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Error, las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/usuarios/create.php');
}
?>
