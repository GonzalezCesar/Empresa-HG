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
    $this->Cell(0,10,'Reporte de Propietarios',0,0,'C');
    // Salto de línea
    $this->Ln(15);

    $this->SetFont('Arial','B',9);
    $this->Cell(25,7,'Codigo',1,0,'C');
    $this->Cell(25,7,'Cedula',1,0,'C');
    $this->Cell(35,7,'Nombre',1,0,'C');       // Aumentado el ancho
    $this->Cell(35,7,'Apellido',1,0,'C');    // Aumentado el ancho
    $this->Cell(25,7,'Nacimiento',1,0,'C');
    $this->Cell(25,7,'Genero',1,0,'C');
    $this->Cell(25,7,'Telefono',1,0,'C');
    $this->Cell(40,7,'Email',1,0,'C');       // Aumentado el ancho
    $this->Cell(30,7,'Profesion',1,1,'C');    // Aumentado el ancho
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
$consulta = "SELECT * FROM propietario";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');  // Añadido para formato horizontal
$pdf->SetFont('Arial','',8);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(25,6,$row['codigo'],1,0,'C');
    $pdf->Cell(25,6,$row['cedula'],1,0,'C');
    $pdf->Cell(35,6,utf8_decode($row['nombre']),1,0,'C');
    $pdf->Cell(35,6,utf8_decode($row['apellido']),1,0,'C');
    $pdf->Cell(25,6,$row['fecha_nacimiento'],1,0,'C');
    $pdf->Cell(25,6,utf8_decode($row['genero']),1,0,'C');
    $pdf->Cell(25,6,$row['telefono'],1,0,'C');
    $pdf->Cell(40,6,$row['email'],1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['profesion']),1,1,'C');
}

$pdf->Output();
?>
