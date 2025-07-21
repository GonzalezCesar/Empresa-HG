<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 12
    $this->SetFont('Arial','B',12);
    // Título centrado
    $this->Cell(0,10,'Reporte de Casas',0,0,'C');
    $this->Ln(15);

    // Centrar los encabezados de la tabla
    $this->SetX(($this->GetPageWidth() - 175) / 2); 
    $this->SetFont('Arial','B',10);
    $this->Cell(40,7,'Codigo Casa',1,0,'C');
    $this->Cell(40,7,'ID Propietario',1,0,'C');
    $this->Cell(25,7,'Manzana',1,0,'C');
    $this->Cell(40,7,'Calle',1,0,'C');
    $this->Cell(30,7,'Numero Casa',1,1,'C');
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
$consulta = "SELECT * FROM casa";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',10);

while ($row=$resultado->fetch_assoc()) {
    $pdf->SetX(($pdf->GetPageWidth() - 175) / 2); // Ajusta el margen izquierdo dinámicamente
    $pdf->Cell(40,6,$row['codigo_casa'],1,0,'C');
    $pdf->Cell(40,6,$row['id_propietario'],1,0,'C');
    $pdf->Cell(25,6,$row['manzana'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['calle']),1,0,'C');
    $pdf->Cell(30,6,$row['numero_casa'],1,1,'C');
}

$pdf->Output();
?>
