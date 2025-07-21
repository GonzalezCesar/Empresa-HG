<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 12 y título centrado
    $this->SetFont('Arial','B',12);
    $this->Cell(0,10,'Reporte de Gastos Fijos',0,0,'C');
    $this->Ln(15);

    // Centrar los encabezados de la tabla
    $this->SetX(($this->GetPageWidth() - 220) / 2);
    $this->SetFont('Arial','B',10);
    $this->Cell(40,7,'Código',1,0,'C');
    $this->Cell(40,7,'ID Casa',1,0,'C');
    $this->Cell(50,7,'Nombre',1,0,'C');
    $this->Cell(30,7,'Monto',1,0,'C');
    $this->Cell(30,7,'Fecha',1,0,'C');
    $this->Cell(30,7,'Estado',1,1,'C');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM `gastos-fijos`";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',10);

while ($row=$resultado->fetch_assoc()) {
    $pdf->SetX(($pdf->GetPageWidth() - 220) / 2); // Ajusta el margen izquierdo dinámicamente
    $pdf->Cell(40,6,$row['codigo'],1,0,'C');
    $pdf->Cell(40,6,$row['id-casa'],1,0,'C');
    $pdf->Cell(50,6,$row['nombre'],1,0,'C');
    $pdf->Cell(30,6,$row['monto'],1,0,'C');
    $pdf->Cell(30,6,$row['fecha'],1,0,'C');
    $pdf->Cell(30,6,$row['estado'],1,1,'C');
}

$pdf->Output();
?>
