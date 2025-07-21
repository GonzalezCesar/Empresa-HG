<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'Reporte de Habitantes',0,0,'C');
        $this->Ln(15);

        // Definir ancho total de la tabla
        $tabla_ancho = 30 + 30 + 25 + 25 + 28 + 20 + 25 + 35 + 30 + 30;

        // Calcular posición X para centrar la tabla
        $x_inicial = ($this->GetPageWidth() - $tabla_ancho) / 2;
        $this->SetX($x_inicial);

        $this->SetFont('Arial','B',10);
        $this->Cell(30,7,'Codigo',1,0,'C');
        $this->Cell(30,7,'ID Casa',1,0,'C');
        $this->Cell(25,7,'Nombre',1,0,'C');
        $this->Cell(25,7,'Apellido',1,0,'C');
        $this->Cell(25,7,'Financiamiento',1,0,'C');
        $this->Cell(20,7,'Genero',1,0,'C');
        $this->Cell(25,7,'Telefono',1,0,'C');
        $this->Cell(35,7,'Email',1,0,'C');
        $this->Cell(30,7,'Profesion',1,0,'C');
        $this->Cell(30,7,'Discapacidad',1,1,'C');
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Página ') .$this->PageNo().'/{nb}',0,0,'C');
    }
}

require("cn.php");
$consulta = "SELECT * FROM `habitantes`";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',10);

$tabla_ancho = 30 + 30 + 25 + 25 + 28 + 20 + 25 + 35 + 30 + 30;
$x_inicial = ($pdf->GetPageWidth() - $tabla_ancho) / 2;

while ($row = $resultado->fetch_assoc()) {
    $pdf->SetX($x_inicial);
    $pdf->Cell(30,6,$row['codigo'],1,0,'C');
    $pdf->Cell(30,6,$row['id-casa'],1,0,'C');
    $pdf->Cell(25,6,$row['nombre'],1,0,'C');
    $pdf->Cell(25,6,$row['apellido'],1,0,'C');
    $pdf->Cell(25,6,$row['financiamiento'],1,0,'C');
    $pdf->Cell(20,6,$row['genero'],1,0,'C');
    $pdf->Cell(25,6,$row['telefono'],1,0,'C');
    $pdf->Cell(35,6,$row['email'],1,0,'C');
    $pdf->Cell(30,6,$row['profesion'],1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['discapacidad']),1,1,'C');
}

$pdf->Output();
?>

