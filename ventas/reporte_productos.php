<?php
// Incluir el archivo para la conexión a la base de datos y obtener los datos de los productos más vendidos
// Obtener los datos de la imagen desde la solicitud POST
if (isset($_POST['imgData'])) {
    $imgData = $_POST['imgData'];
    
    // Decodificar la imagen base64
    $imgData = str_replace(' ', '+', $imgData);
    $imgData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgData));

    // Guardar la imagen temporalmente en el servidor
    $filePath = 'C:/xampp/htdocs/SIGEIN/ventas/temp_chart.png';
    if (file_put_contents($filePath, $imgData) === false) {
        die('Error al guardar la imagen');
    }
} else {
}


include('../app/controllers/ventas/productos_mas_vendidos.php');
require_once('../app/tcpdf-main/tcpdf.php');
include('../app/config.php');

// Clase extendida de TCPDF
class MYPDF extends TCPDF {
    public function Header() {
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 15, 'Reporte de Productos Más Vendidos', 0, 1, 'C');
        
        // Ruta de la imagen JPEG
        $imagePath = 'C:/xampp/htdocs/SIGEIN/ventas/temp_chart.png';

        // Agregar la imagen al PDF
        $this->Image($imagePath, 20, 90, 180, 120, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().' / '.$this->getAliasNbPages(), 0, 0, 'C');
    }
}

// Crear una instancia del PDF
$pdf = new MYPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu Empresa');
$pdf->SetTitle('Reporte de Productos Más Vendidos');
$pdf->SetSubject('Reporte PDF');
$pdf->SetKeywords('TCPDF, PDF, report, productos, ventas');

// Agregar una página al PDF
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Consulta SQL para obtener los productos más vendidos
$sql_productos_mas_vendidos = "
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

// Ejecutar la consulta SQL
$query_productos_mas_vendidos = $pdo->prepare($sql_productos_mas_vendidos);
$query_productos_mas_vendidos->execute();
$productos_mas_vendidos = $query_productos_mas_vendidos->fetchAll(PDO::FETCH_ASSOC);

// Crear una tabla HTML con los datos de los productos más vendidos
$html = '<table border="1" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th>Nombre del Producto</th>
<th>Total Cantidad Vendida</th>
</tr>
</thead>
<tbody>';

foreach ($productos_mas_vendidos as $producto) {
    $html .= '<tr>
    <td>'.$producto['nombre'].'</td>
    <td>'.$producto['total_cantidad'].'</td>
    </tr>';
}

$html .= '</tbody></table>';

// Escribir el HTML en el PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Limpiar el buffer de salida antes de enviar el PDF
ob_end_clean();

// Salida del PDF
$pdf->Output('reporte_compras_proveedores.pdf', 'I');
?>