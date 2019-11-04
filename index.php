<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header(){
    // Logo
    $this->Image('img/upvt.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,40,'Reporte de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require('php/conexion.php');
$consulta = "SELECT * FROM productos";
$resultado = $mysqli-> query($consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
while ($row = $resultado-> fetch_assoc()) {
	$pdf->Cell(90,10, $row['nombre'], 1, 0, 'C', 0);
	$pdf->Cell(90,10, $row['costo'], 1, 0, 'C', 0);
	$pdf->Cell(90,10, $row['unidad'], 1, 0, 'C', 0);
	$pdf->Cell(90,10, $row['existencia'], 1, 0, 'C', 0);
}

$pdf->Output();
?>