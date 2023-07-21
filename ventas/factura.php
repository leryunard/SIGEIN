<?php
include('../app/config.php');
include('../app/controllers/ventas/literal.php');
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 * @group header
 * @group footer
 * @group page
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
require_once('../app/TCPDF-main/tcpdf.php');

$id_venta_get = $_GET['id'];
$numero_venta_get = $_GET['num_venta'];

$sql_ventas = "SELECT *,ven.total_pagado as total_pagado,cli.nombre_cliente as nombre_cliente,cli.nit_cliente as nit_cliente, ven.fyh_creacion as venta_fecha FROM tb_ventas as ven INNER JOIN tb_clientes as cli ON ven.id_cliente = cli.id_cliente
WHERE ven.id_venta = '$id_venta_get'";

$query_ventas_mostrar = $pdo -> prepare($sql_ventas);
$query_ventas_mostrar -> execute();

$ventas_datos_mostrar = $query_ventas_mostrar->fetchAll(PDO::FETCH_ASSOC);

foreach ($ventas_datos_mostrar as $venta_mostrar){
	$numero_venta = $venta_mostrar['num_venta'];
	$fecha_y_hora = $venta_mostrar['venta_fecha'];
	$nit_del_cliente = $venta_mostrar['nit_cliente'];
	$nombre_cliente = $venta_mostrar['nombre_cliente'];
	$total_pagado = $venta_mostrar['total_pagado'];
	
}

//convierte precio total a literal
$monto_literal = numtoletras($total_pagado);

$fecha = date("d/m/Y", strtotime($fecha_y_hora));





// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(215,279), true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Sistema de venta');
$pdf->setTitle('Factura de venta: '.$numero_venta_get.'');
$pdf->setSubject('Factura de venta: '.$numero_venta_get.'');
$pdf->setKeywords('Factura de venta: '.$numero_venta_get.'');

// set default header data
$pdf->setHeaderData(false);
$pdf->setFooterData(false);

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(15, 15, 15);
//$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, 5);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
//$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->setFont('Helvetica', '', 12);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = '
<table border="0">
<tr>
	<td style="text-align: center; width: 190px;">
		<img src="../public/images/carrito.jpg" width="80px" alt=""><br>
		<b>Sistema de Ventas</b><br>
		 Dirección de la empresa <br>
		 71459710 <br>
		 El Salvador - San Salvador
	</td>
	<td style="width: 200px;"></td>
	<td style="text-align: center; font-size: 16px;width: 300px;"> <br><br><br><br><br>
		<b>Nit:</b>00329302 <br>
		<b>Numero de factura:</b> '.$id_venta_get.' <br>
		<b>Numero de autorización: </b>323
		<p><b>ORIGINAL</b></p>
	</td>
</tr>
</table>
<p style="text-align: center;font-size: 25px;"><b>FACTURA</b></p>

<div style="border: 1px solid #000000;">
	<table border="0" cellspacing="8" cellpading="5">
		<tr>
			<td><b>Fecha: </b>'.$fecha.'</td>
			<td></td>
			<td>NIT Cliente: '.$nit_del_cliente.'</td>
		</tr>
		<tr>
			<td colspan="3"><b>Nombre: </b>'.$nombre_cliente.'</td>
		</tr>
	</table>
</div>
<br><br>
<table border="1" cellpadding="5" style="font-size: 10px;">
	<tr style="text-align: center; background-color: #d6d2d2;">
		<th style="width: 40px;"><b>Nro</b></th>
		<th style="width: 130px;"><b>Producto</b></th>
		<th style="width: 203px;"><b>Descripción</b></th>
		<th style="width: 60px;"><b>Cantidad</b></th>
		<th><b>Precio Unitario</b></th>
		<th><b>Subtotal</b></th>
	</tr>
	';

	$sql_carrito = "SELECT *,alma.id_producto as id_producto_almacen,alma.nombre as nombre_producto, alma.descripcion as descripcion_producto,
	alma.precio_venta as precio_unitario_producto,alma.stock as stock_almacen ,carr.cantidad as cantidad_producto
	FROM tb_carrito as carr 
	INNER JOIN tb_almacen as alma ON carr.id_producto = alma.id_producto WHERE carr.num_venta ='$numero_venta_get;'
	ORDER BY carr.id_carrito DESC";

	$query_carrito = $pdo -> prepare($sql_carrito);
	$query_carrito ->execute();
	$productos_carrito = $query_carrito -> fetchAll (PDO::FETCH_ASSOC);

	$contador_carrito = 0;
	$cantidad_total = 0;
	$total_a_pagar = 0;

	foreach ($productos_carrito as $producto_carrito){
		$id_carrito = $producto_carrito['id_carrito'];
		$contador_carrito = $contador_carrito + 1;
		$cantidad_total = $cantidad_total + $producto_carrito['cantidad'];
		$nombre_producto = $producto_carrito['nombre_producto'];
		$descripcion_producto = $producto_carrito['descripcion_producto'];
		$cantidad_por_producto = $producto_carrito['cantidad_producto'];
		$precio_unitario = $producto_carrito['precio_unitario_producto'];
		$total_por_producto = $cantidad_por_producto * $precio_unitario; 
		$total_a_pagar = $total_a_pagar + $total_por_producto;
		$html .= '
			<tr style="text-align: center;">
			<td>'.$contador_carrito.'</td>
			<td>'.$nombre_producto.'</td>
			<td>'.$descripcion_producto.'</td>
			<td>'.$cantidad_por_producto.'</td>
			<td>$'.$precio_unitario.'</td>
			<td>$'.$total_por_producto.'</td>
		</tr>
		';
	}
	$html .='
	<tr>
	<td colspan="3" style="text-align: right;background-color: #d6d2d2;"><b>Total:</b></td>
	<td style="text-align: center;background-color: #d6d2d2;">'.$cantidad_total.'</td>
	<td style="text-align: center;background-color: #d6d2d2;">----</td>
	<td style="text-align: center;background-color: #d6d2d2;">$'.$total_a_pagar.'</td>
</tr>
</table>

<p style="text-align: right;">
	<b>Monto Total: </b> $'.$total_a_pagar.'
</p>
<p>
	<b>Son: </b> '.$monto_literal.'
</p>
<br>
---------------------------------------------------- <br>
<b>USUARIO: </b> Esteban Acosta. <br>

<p style="text-align: center;"></p>
<p style="text-align: center;">"ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USU ILÍCITO DE ÉSTA SERÁ SANCIONADO DE ACUERDO A LA LEY"</p>
<p style="text-align: center;"><b>GRACIAS POR SU PREFERENCIA</b></p>
';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


$style = array(
	'border' => 0,
	'vpadding' => '3',
	'hpadding' => '3',
	'fgcolor' => array (0,0,0),
	'bgcolor' => false,
	'module_widht' => 1,
	'module_height' => 1
	);

$QR = 'Factura realizada por el sistema de ventas, al cliente tal';
$pdf->write2DBarcode($QR,'QRCODE,L', 170, 240, 45, 45, $style);
// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
