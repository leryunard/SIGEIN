<?php
include('../../config.php');

$codigo = $_POST['codigo'];
$id_categoria = $_POST['id_categoria'];
$nombre = $_POST['nombre'];
$id_usuario = $_POST['id_usuario'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo . "__" . $_FILES['image']['name'];
$location = "../../../almacen/img_productos/" . $filename;

move_uploaded_file($_FILES['image']['tmp_name'], $location);

try {
    $sql_producto = $pdo->prepare("INSERT INTO tb_almacen (codigo, nombre, descripcion, stock, stock_minimo, stock_maximo, precio_compra, precio_venta, fecha_ingreso, imagen, id_usuario, id_categoria, fyh_creacion) 
VALUES (:codigo, :nombre, :descripcion, :stock, :stock_minimo, :stock_maximo, :precio_compra, :precio_venta, :fecha_ingreso, :imagen, :id_usuario, :id_categoria, :fyh_creacion)");

    $sql_producto->bindParam(':codigo', $codigo);
    $sql_producto->bindParam(':nombre', $nombre);
    $sql_producto->bindParam(':descripcion', $descripcion);
    $sql_producto->bindParam(':stock', $stock);
    $sql_producto->bindParam(':stock_minimo', $stock_minimo);
    $sql_producto->bindParam(':stock_maximo', $stock_maximo);
    $sql_producto->bindParam(':precio_compra', $precio_compra);
    $sql_producto->bindParam(':precio_venta', $precio_venta);
    $sql_producto->bindParam(':fecha_ingreso', $fecha_ingreso);
    $sql_producto->bindParam(':imagen', $filename);
    $sql_producto->bindParam(':id_usuario', $id_usuario);
    $sql_producto->bindParam(':id_categoria', $id_categoria);
    $sql_producto->bindParam(':fyh_creacion', $fechaHora);

    if ($sql_producto->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Producto Agregado Correctamente";
        $_SESSION['icono'] = "success";
        header('Location:' . $URL . '/almacen/index.php');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error al agregar el producto";
        $_SESSION['icono'] = "error";
        header('Location:' . $URL . '/almacen/create.php');
    }
} catch (PDOException $e) {
    if ($e->getCode() === '45000') {
        // Error: Ya existe un almacén con ese nombre
        session_start();
        $_SESSION['mensaje'] = "Ya existe un producto con ese nombre";
        $_SESSION['icono'] = "error";
        header('Location:' . $URL . '/almacen/create.php');
    } else {
        // Otro error
        session_start();
        $_SESSION['mensaje'] = "Error al agregar el producto: " . $e->getMessage();
        $_SESSION['icono'] = "error";
        header('Location:' . $URL . '/almacen/create.php');
    }
}
?>