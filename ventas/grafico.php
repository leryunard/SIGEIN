<?php
// Incluir el archivo PHP para obtener los datos de las compras
include('../app/controllers/ventas/productos_mas_vendidos.php');

// Extracción de nombres de productos y cantidades de compras
$nombresProducto = array_column($compras_datos, 'nombre');
$totalCantidades = array_column($compras_datos, 'total_cantidad');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Compras por Producto</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div id="chart-container">
        <canvas id="myChart" width="400" height="200"></canvas>
    </div>

    <script>
    // Datos de compras
    var nombresProducto = <?php echo json_encode($nombresProducto); ?>;
    var totalCantidades = <?php echo json_encode($totalCantidades); ?>;

    // Generación del gráfico con Chart.js
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nombresProducto,
            datasets: [{
                label: 'Total Cantidad Comprada',
                data: totalCantidades,
                backgroundColor: [ // Array de colores
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    // Puedes agregar más colores según la cantidad de productos
                ],
                borderColor: [ // Colores del borde de las barras
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    // Puedes agregar más colores según la cantidad de productos
                ],
                borderWidth: 1
            }]
        },
        options: {
        indexAxis: 'x', // Esto cambia la orientación a horizontal
        scales: {
            x: {
                beginAtZero: true,
                ticks: {
                    font: {
                        size: 20, 
                    }
                }
            },
            y: {
                ticks: {
                    font: {
                        size: 20, 
                    }
                }
            }
        },
        plugins: {
            legend: {
                labels: {
                    font: {
                        family: 'Arial', // Cambiar la fuente
                        size: 20, // Cambiar el tamaño de la fuente
                        weight: 'bold' // Cambiar el peso de la fuente
                    },
                    color: 'black' // Cambiar el color del texto de la leyenda
                }
            },
            tooltip: {
                titleFont: {
                    family: 'Arial',
                    size: 25, 
                    weight: 'bold'
                },
                bodyFont: {
                    family: 'Arial', 
                    size: 20,
                    weight: 'normal'
                },
                footerFont: {
                    family: 'Arial', 
                    size: 25,
                    weight: 'normal'
                }
            }
        }
    }
});


        // Generar la imagen y llamar a la función para generar el PDF
        setTimeout(function() {
            var imgData = myChart.toBase64Image();
            console.log("Imagen capturada:", imgData); // Verifica que imgData contiene la imagen en base64

            // Llamar a una función en PHP para generar el PDF con la imagen
            generarPDF(imgData);
        }, 1000); // Ajustar el tiempo según sea necesario para asegurar que el gráfico se haya renderizado completamente

        // Función para llamar a PHP y generar el PDF con la imagen
        function generarPDF(imgData) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'reporte_productos.php', true); // Asegúrate de que la ruta es correcta
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('PDF generado correctamente');
                    console.log(xhr.responseText); // Verifica la respuesta del servidor
                    window.location.href = 'reporte_productos.php';
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