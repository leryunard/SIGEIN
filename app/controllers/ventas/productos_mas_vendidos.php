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
    
    $sql_compras = "
        SELECT 
            p.nombre, 
            SUM(c.cantidad) AS total_cantidad
        FROM 
            tb_carrito c
        JOIN 
            tb_almacen p ON c.id_producto = p.id_producto
        GROUP BY 
            c.id_producto
        ORDER BY 
            total_cantidad DESC
        LIMIT 5
    ";
    $query_compras = $pdo->prepare($sql_compras);
    $query_compras->execute();
    $compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);
?>