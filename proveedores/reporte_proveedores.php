<?php
// Iniciar el buffer de salida para evitar cualquier salida antes de la generación del PDF
ob_start();

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

class MYPDF extends TCPDF {
    public function Header() {
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 15, 'Reporte de Compras por Proveedor', 0, 1, 'C');
    }

    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().' / '.$this->getAliasNbPages(), 0, 0, 'C');
    }
}

$pdf = new MYPDF();
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Tu Empresa');
$pdf->SetTitle('Reporte de Compras por Proveedor');
$pdf->SetSubject('Reporte PDF');
$pdf->SetKeywords('TCPDF, PDF, report, compras, proveedores');

$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

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
    <td>'.$compra_dato['nombre_proveedor'].'</td>
    <td>'.$compra_dato['total_cantidad'].'</td>
    </tr>';
}

$html .= '</tbody></table>';

$pdf->writeHTML($html, true, false, true, false, '');

include('./grafico.php');
// Incluir el gráfico generado en el PDF
$pdf->Image($imgData, $x, $y, $w, $h);

// Limpiar el buffer de salida antes de enviar el PDF
ob_end_clean();

$pdf->Output('reporte_compras_proveedores.pdf', 'I');
?>