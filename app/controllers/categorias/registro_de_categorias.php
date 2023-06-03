<?php
include('../../config.php');

$nombre_categoria = $_GET['nombre_categoria'];

try {
    $sentencia = $pdo->prepare("INSERT INTO tb_categoria (nombre_categoria, fyh_creacion) VALUES (:nombre_categoria, :fyh_creacion)");

    $sentencia->bindParam(':nombre_categoria', $nombre_categoria);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Categoría creada correctamente";
        $_SESSION['icono'] = "success";
        //header('Location:' . $URL . '/categorias/index.php');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/categorias/index.php";
        </script>
        <?php
    } else {
        // Error en los datos
        session_start();
        $_SESSION['mensaje'] = "Error en los datos";
        $_SESSION['icono'] = "error";
        //header('Location:' . $URL . '/categorias/index.php');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/categorias/index.php";
        </script>
        <?php
    }
} catch (PDOException $e) {
    if ($e->getCode() === '45000') {
        // Error: Ya existe una categoría con ese nombre
        session_start();
        $_SESSION['mensaje'] = "Ya existe una categoría con ese nombre";
        $_SESSION['icono'] = "error";
        //header('Location:' . $URL . '/categorias/index.php');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/categorias/index.php";
        </script>
        <?php
    } else {
        // Otro error
        session_start();
        $_SESSION['mensaje'] = "Error en los datos: " . $e->getMessage();
        $_SESSION['icono'] = "error";
        //header('Location:' . $URL . '/categorias/index.php');
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/categorias/index.php";
        </script>
        <?php
    }
}
?>
