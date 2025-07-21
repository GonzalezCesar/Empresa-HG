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
    $this->Cell(0,10,'Reporte de Consejos Comunales',0,0,'C');
    // Salto de línea
    $this->Ln(15);

    $this->SetFont('Arial','B',9); // Aumentar un poco la fuente de la cabecera
    $this->Cell(25,7,'RIF',1,0,'C');
    $this->Cell(40,7,'Nombre',1,0,'C'); // Aumentar ancho
    $this->Cell(22,7,'Creacion',1,0,'C');
    $this->Cell(40,7,'Direccion',1,0,'C'); // Aumentar ancho
    $this->Cell(25,7,'Telefono',1,0,'C');
    $this->Cell(40,7,'Email',1,0,'C'); // Aumentar ancho
    $this->Cell(30,7,'Parroquia',1,0,'C'); // Aumentar ancho
    $this->Cell(30,7,'Municipio',1,0,'C'); // Aumentar ancho
    $this->Cell(25,7,'Estado',1,1,'C');
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
$consulta = "SELECT * FROM consejo_comunal";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',8);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(25,6,$row['rif'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['nombre']),1,0,'C'); // Centrar contenido
    $pdf->Cell(22,6,$row['f_creacion'],1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['direccion']),1,0,'C'); // Centrar contenido
    $pdf->Cell(25,6,$row['telefono'],1,0,'C');
    $pdf->Cell(40,6,$row['email'],1,0,'C'); // Centrar contenido
    $pdf->Cell(30,6,utf8_decode($row['parroquia']),1,0,'C'); // Centrar contenido
    $pdf->Cell(30,6,utf8_decode($row['municipio']),1,0,'C'); // Centrar contenido
    $pdf->Cell(25,6,utf8_decode($row['estado']),1,1,'C'); // Centrar contenido
}

$pdf->Output();
?>