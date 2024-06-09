<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=sistemadeventas';
    $username = 'root';
    $password = '';
    
    // Intentar la conexión a la base de datos
    try {
        $pdo = new PDO($dsn, $username, $password);
        // Establecer el modo de error de PDO a excepción
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // En caso de error en la conexión, mostrar el mensaje de error
        echo 'Error de conexión: ' . $e->getMessage();
        die(); // Terminar el script
    }

    $sql = "SELECT tb_categoria.nombre_categoria, COUNT(tb_almacen.id_categoria) AS cantidad_productos
    FROM tb_categoria
    LEFT JOIN tb_almacen ON tb_categoria.id_categoria = tb_almacen.id_categoria
    GROUP BY tb_categoria.nombre_categoria";

    $query_productos = $pdo->prepare($sql);
    $query_productos->execute();
    $productos_categoria = $query_productos->fetchAll(PDO::FETCH_ASSOC);
?>