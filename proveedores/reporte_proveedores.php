<?php
// Obtener los datos de la imagen desde la solicitud POST
if (isset($_POST['imgData'])) {
    $imgData = $_POST['imgData'];

    // Decodificar la imagen base64
    $imgData = str_replace(' ', '+', $imgData);
    $imgData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imgData));

    // Guardar la imagen temporalmente en el servidor
    $filePath = 'C:/xampp/htdocs/SIGEIN/proveedores/temp_chart.png';
    if (file_put_contents($filePath, $imgData) === false) {
        die('Error al guardar la imagen');
    }
} else {
}

// Incluir el archivo TCPDF y la configuración
require_once('../app/tcpdf-main/tcpdf.php');
include('../app/config.php');

// Consulta de las compras por proveedor
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
    ORDER BY 
        total_cantidad DESC
";
$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);

// Clase extendida de TCPDF
class MYPDF extends TCPDF
{
    public function Header()
    {
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 15, 'Reporte de Compras por Proveedor', 0, 1, 'C');
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
$pdf->SetTitle('Reporte de Compras por Proveedor');
$pdf->SetSubject('Reporte PDF');
$pdf->SetKeywords('TCPDF, PDF, report, compras, proveedores');

// Agregar una página al PDF
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Crear una tabla HTML con los datos de las compras
$html = '<table border="1" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th>Nombre del Proveedor</th>
<th>Total Cantidad Comprada</th>
</tr>
</thead>
<tbody>';

foreach ($compras_datos as $compra_dato) {
    $html .= '<tr>
    <td>' . $compra_dato['nombre_proveedor'] . '</td>
    <td>' . $compra_dato['total_cantidad'] . '</td>
    </tr>';
}

$html .= '</tbody></table>';

// Escribir el HTML en el PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Ruta de la imagen JPEG
$imagePath = 'C:/xampp/htdocs/SIGEIN/proveedores/temp_chart.png';

// Agregar la imagen al PDF
$pdf->Image($imagePath, 20, 140, 180, 120, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

// Limpiar el buffer de salida antes de enviar el PDF
ob_end_clean();

// Obtén la fecha actual en el formato dd-mm-yy
$fecha_actual = date('d-m-y');

// Usa la fecha actual en el nombre del archivo
$nombre_archivo = 'compras_por_proveedor_' . $fecha_actual . '.pdf';

// Salida del PDF con el nuevo nombre de archivo
$pdf->Output($nombre_archivo, 'D');
?>
