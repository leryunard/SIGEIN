<?php
// Incluir el archivo PHP para obtener los datos de las compras
include('../app/controllers/proveedores/listado_proveedores_compra.php');

// Extracción de nombres de proveedores y cantidades de compras
$nombresProveedores = json_encode(array_column($compras_datos, 'nombre_proveedor'));
$totalCantidades = json_encode(array_column($compras_datos, 'total_cantidad'));
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div id="chart-container">
    <canvas id="myChart" width="70" height="60"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script>
    // Datos de compras
    var nombresProveedores = <?php echo $nombresProveedores; ?>;
    var totalCantidades = <?php echo $totalCantidades; ?>;

    // Generación del gráfico con Chart.js
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nombresProveedores,
            datasets: [{
                label: 'Total Cantidad Comprada',
                data: totalCantidades,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Capturar el contenido del contenedor como una imagen y agregarla al PDF
    html2canvas(document.getElementById('chart-container')).then(function(canvas) {
        var imgData = canvas.toDataURL('image/png');

        // Llamar a una función en PHP para generar el PDF con la imagen
        generarPDF(imgData);
    });

    // Función para llamar a PHP y generar el PDF con la imagen
    function generarPDF(imgData) {
        // Llamar a un script PHP que generará el PDF
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'generar_pdf.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // El PDF se ha generado correctamente, puedes redirigir al usuario al archivo PDF generado
                window.location.href = 'generado_pdf.pdf';
            }
        };
        xhr.send('imgData=' + imgData);
    }
</script>