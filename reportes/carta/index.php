<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->SetFont('Arial','B',12);
        $this->Cell(0,10,'Reporte de Cartas',0,0,'C');
        $this->Ln(15);

        // Definir ancho total de la tabla
        $tabla_ancho = 30 + 30 + 30 + 30 + 70;

        // Calcular posición X para centrar la tabla
        $x_inicial = ($this->GetPageWidth() - $tabla_ancho) / 2;
        $this->SetX($x_inicial);

        $this->SetFont('Arial','B',10);
        $this->Cell(30,7,'Código',1,0,'C');
        $this->Cell(30,7,'Cod. Habitante',1,0,'C');
        $this->Cell(30,7,'Cod. Propietario',1,0,'C');
        $this->Cell(30,7,'Tipo',1,0,'C');
        $this->Cell(70,7,'Descripción',1,1,'C');
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
$consulta = "SELECT * FROM `carta`";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','',10);

$tabla_ancho = 30 + 30 + 30 + 30 + 70;
$x_inicial = ($pdf->GetPageWidth() - $tabla_ancho) / 2;

while ($row = $resultado->fetch_assoc()) {
    $pdf->SetX($x_inicial);
    $pdf->Cell(30,6,$row['codigo'],1,0,'C');
    $pdf->Cell(30,6,$row['cod-habitante'],1,0,'C');
    $pdf->Cell(30,6,$row['codigo-propietario'],1,0,'C');
    $pdf->Cell(30,6,$row['tipo'],1,0,'C');
    $pdf->Cell(70,6,utf8_decode($row['descripcion']),1,1,'C');
}

$pdf->Output();
?>
