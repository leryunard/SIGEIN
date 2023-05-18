<?php
include('../../config.php');
$id_producto = $_POST['id_producto'];
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
$image_text = $_POST['image_text'];

if ($_FILES['image']['name'] != null){
    $nombreDelArchivo = date ("Y-m-d-h-i-s");
    $image_text = $nombreDelArchivo."__".$_FILES['image']['name'];
    $location = "../../../almacen/img_productos/".$image_text;

    move_uploaded_file($_FILES['image']['tmp_name'], $location);
}else{
    //echo "No hay imagen";

}

$sentencia_producto = $pdo -> prepare("UPDATE tb_almacen SET 
nombre=:nombre,
descripcion=:descripcion, 
stock=:stock, 
stock_minimo=:stock_minimo, 
stock_maximo=:stock_maximo,
precio_compra=:precio_compra, 
precio_venta=:precio_venta, 
fecha_ingreso=:fecha_ingreso,
imagen=:imagen, 
id_usuario=:id_usuario, 
id_categoria=:id_categoria, 
fyh_actualizacion=:fyh_actualizacion
WHERE id_producto=:id_producto");

$sentencia_producto -> bindParam('nombre', $nombre);
$sentencia_producto -> bindParam('descripcion', $descripcion);
$sentencia_producto -> bindParam('stock', $stock);
$sentencia_producto -> bindParam('stock_minimo', $stock_minimo);
$sentencia_producto -> bindParam('stock_maximo', $stock_maximo);
$sentencia_producto -> bindParam('precio_compra', $precio_compra);
$sentencia_producto -> bindParam('precio_venta', $precio_venta);
$sentencia_producto -> bindParam('fecha_ingreso', $fecha_ingreso);
$sentencia_producto -> bindParam('imagen', $image_text);
$sentencia_producto -> bindParam('id_usuario', $id_usuario);
$sentencia_producto -> bindParam('id_categoria', $id_categoria);
$sentencia_producto -> bindParam('fyh_actualizacion',$fechaHora);
$sentencia_producto -> bindParam('id_producto',$id_producto);
if($sentencia_producto -> execute()){
    session_start();
    $_SESSION['mensaje'] = "Producto actualizado correctamente";
    $_SESSION['icono'] = "success";
    header('Location:' .$URL. '/almacen/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "No se pudo actualizar el producto";
    $_SESSION['icono'] = "error";
    header('Location:' .$URL. '/almacen/update.php?id='.$id_producto);
}
?>