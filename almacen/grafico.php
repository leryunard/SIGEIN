<?php
// Incluir el archivo PHP para obtener los datos de las compras
include('../app/controllers/almacen/productos_categoria.php');

// Extracción de nombres de proveedores y cantidades de compras
$nombresCategoria = json_encode(array_column($productos_categoria, 'nombre_categoria'));
$totalCantidades = json_encode(array_column($productos_categoria, 'cantidad_productos'));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Productos por Categoría</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div id="chart-container" style="width: 600px; height: 600px;">
        <canvas id="myChart"></canvas> <!-- Cambia el tamaño del lienzo del gráfico -->
    </div>

    <script>
        // Datos de compras
        var nombresCategoria = <?php echo $nombresCategoria; ?>;
        var totalCantidades = <?php echo $totalCantidades; ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: nombresCategoria, // Usar las categorías de la base de datos
                datasets: [{
                    data: totalCantidades, // Usar la cantidad de productos de la base de datos
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        labels: {
                            font: {
                                family: 'Arial', // Cambiar la fuente
                                size: 16, // Cambiar el tamaño de la fuente
                                weight: 'bold' // Cambiar el peso de la fuente
                            },
                            color: 'black' // Cambiar el color del texto de la leyenda
                        }
                    },
                    tooltip: {
                        titleFont: {
                            family: 'Arial',
                            size: 18, 
                            weight: 'bold'
                        },
                        bodyFont: {
                            family: 'Arial', 
                            size: 16,
                            weight: 'normal'
                        },
                        footerFont: {
                            family: 'Arial', 
                            size: 18,
                            weight: 'normal'
                        }
                    }
                }
            }
        });

        // Esperar a que el gráfico se renderice completamente antes de capturarlo
        setTimeout(function() {
            var imgData = myChart.toBase64Image();
            console.log("Imagen capturada:", imgData); // Verifica que imgData contiene la imagen en base64

            // Llamar a una función en PHP para generar el PDF con la imagen
            generarPDF(imgData);
        }, 1000); // Ajustar el tiempo según sea necesario para asegurar que el gráfico se haya renderizado completamente

        // Función para llamar a PHP y generar el PDF con la imagen
        function generarPDF(imgData) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'reporte_categoria.php', true); // Asegúrate de que la ruta es correcta
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('PDF generado correctamente');
                    console.log(xhr.responseText); // Verifica la respuesta del servidor
                    window.location.href = 'reporte_categoria.php';
                } else {
                    console.error('Error al generar el PDF:', xhr.responseText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de conexión al servidor');
            };
            xhr.send('imgData=' + encodeURIComponent(imgData));
        }
    </script>
</body>
</html>