<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 12
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de Usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Arial','B',8);
    $this->Cell(30,6,'Codigo',1,0,'C');
    $this->Cell(30,6,'Cedula',1,0,'C');
    $this->Cell(30,6,'Nombre',1,0,'C');
    $this->Cell(30,6,'Apellido',1,0,'C');
    $this->Cell(30,6,'Usuario',1,1,'C');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM user";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(30,6,$row['codigo'],1,0,'C');
    $pdf->Cell(30,6,$row['cedula'],1,0,'C');
    $pdf->Cell(30,6,$row['nombre'],1,0,'C');
    $pdf->Cell(30,6,$row['apellido'],1,0,'C');
    $pdf->Cell(30,6,$row['usuario'],1,1,'C');
}

$pdf->Output();
?>