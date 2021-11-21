<?php
require('../fpdf/fpdf.php');
require('conexion.php');
//include("../auth.php")

date_default_timezone_set("America/Bogota");


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Ln(20);
$pdf->Cell(90,20,'Fecha: '.date('d.m.Y.H.i.s').'',0);
$pdf->Ln(10);
$pdf->Cell(100,20,utf8_decode('REPORTES PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(20,20,'CODIGOS');
$pdf->Cell(25,20,'NOMBRES');
$pdf->Cell(25,20,'MARCAS');
$pdf->Cell(40,20,'PRECIOS');
$pdf->Cell(40,20,'UNIDADES');

$pdf->Ln(10);

$pdf->SetFont('Arial','',8);


$query_select = 'SELECT * FROM tabla35';
$result = mysqli_query($connection,$query_select);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	


$pdf->Cell(20,20, $reg['id'], 0);

$pdf->Cell(25,20, utf8_decode($reg['Nombre_Producto']), 0);

$pdf->Cell(25,20, utf8_decode($reg['Marca_Producto']), 0);

$pdf->Cell(40,20, utf8_decode($reg['Precio']), 0);

$pdf->Cell(40,20, utf8_decode($reg['Cantidad']), 0);

$pdf->Ln(10);

}
}

$pdf->Output();
mysqli_close($connection);
?>
