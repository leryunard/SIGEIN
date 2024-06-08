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
        p.nombre_proveedor, 
        SUM(c.cantidad) AS total_cantidad
    FROM 
        tb_compras c
    JOIN 
        tb_proveedores p ON c.id_proveedor = p.id_proveedor
    GROUP BY 
        c.id_proveedor
";
$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);
?>