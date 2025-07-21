<?php
include("conexion.php");
$con=conectar();

$ID_recibo=$_POST['ID_recibo'];
$ID_contrato=$_POST['ID_contrato'];
$ID_nomina=$_POST['ID_nomina'];
$Salario_bruto_recibo=$_POST['Salario_bruto_recibo'];
$Comision_hiring=$_POST['Comision_hiring'];
$Descuento_inces=$_POST['Descuento_inces'];
$Descuento_ivss=$_POST['Descuento_ivss'];
$Salario_neto=$_POST['Salario_neto'];
$Fecha_pago=$_POST['Fecha_pago'];
$Numero_recibo=$_POST['Numero_recibo'];

$sql="INSERT INTO recibo VALUES('$ID_recibo',
                            '$ID_contrato',
                            '$ID_nomina',
                            '$Salario_bruto_recibo',
                            '$Comision_hiring',
                            '$Descuento_inces',
                            '$Descuento_ivss',
                            '$Salario_neto',
                            '$Fecha_pago',
                            '$Numero_recibo')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: recibo.php"); 
} else {
}
?>