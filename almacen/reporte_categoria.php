<?php
// Obtener los datos de la imagen desde la solicitud POST
if (isset($_POST['imgData'])) {
    $imgData = $_POST['imgData'];

    // Decodificar la imagen base64
    $imgData = str_replace(' ', '+', $imgData);
    $imgData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgData));

    // Guardar la imagen temporalmente en el servidor
    $filePath = 'C:/xampp/htdocs/SIGEIN/almacen/temp_chart.png';
    if (file_put_contents($filePath, $imgData) === false) {
        die('Error al guardar la imagen');
    }
} else {
}

// Incluir el archivo TCPDF y la configuración
require_once('../app/tcpdf-main/tcpdf.php');
include('../app/config.php');

// Consulta de las categorías de productos
$sql_categorias = "
    SELECT 
        c.nombre_categoria, 
        COUNT(a.id_categoria) AS cantidad_productos
    FROM 
        tb_categoria c
    LEFT JOIN 
        tb_almacen a ON c.id_categoria = a.id_categoria
    GROUP BY 
        c.id_categoria
    ORDER BY 
        c.nombre_categoria ASC
";
$query_categorias = $pdo->prepare($sql_categorias);
$query_categorias->execute();
$categorias_datos = $query_categorias->fetchAll(PDO::FETCH_ASSOC);

// Clase extendida de TCPDF
class MYPDF extends TCPDF
{
    public function Header()
    {
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 15, 'Reporte de Productos por Categoría', 0, 1, 'C');
    }

    public function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

// Crear una instancia del PDF
$pdf = new MYPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu Empresa');
$pdf->SetTitle('Reporte de Productos por Categoría');
$pdf->SetSubject('Reporte PDF');
$pdf->SetKeywords('TCPDF, PDF, report, productos, categorías');

// Agregar una página al PDF
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Crear una tabla HTML con los datos de las categorías
$html = '<table border="1" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th>Nombre de la Categoría</th>
<th>Cantidad de Productos</th>
</tr>
</thead>
<tbody>';

foreach ($categorias_datos as $categoria_dato) {
    $html .= '<tr>
    <td>' . $categoria_dato['nombre_categoria'] . '</td>
    <td>' . $categoria_dato['cantidad_productos'] . '</td>
    </tr>';
}

$html .= '</tbody></table>';

// Escribir el HTML en el PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Ruta de la imagen PNG
$imagePath = 'C:/xampp/htdocs/SIGEIN/almacen/temp_chart.png';

// Ancho de la página y de la imagen
$pageWidth = 210;
$imageWidth = 130;

// Calcular la posición x para centrar la imagen
$xPos = ($pageWidth - $imageWidth) / 2;

// Agregar la imagen al PDF
$pdf->Image($imagePath, $xPos, 80, $imageWidth, 130, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Limpiar el buffer de salida antes de enviar el PDF
ob_end_clean();

// Obtén la fecha actual en el formato dd-mm-yy
$fecha_actual = date('d-m-y');

// Usa la fecha actual en el nombre del archivo
$nombre_archivo = 'productos_por_categoria_' . $fecha_actual . '.pdf';

// Salida del PDF con el nuevo nombre de archivo
$pdf->Output($nombre_archivo, 'D');
?>