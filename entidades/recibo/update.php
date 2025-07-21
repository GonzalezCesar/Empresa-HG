<?php
include("conexion.php");
$con=conectar();

$ID_recibo=$_POST['ID_recibo'];
$ID_contrato=$_POST['ID_contrato'];
$ID_nomina=$_POST['ID_nomina'];
$Salario_bruto_recibo=$_POST['NombrSalario_bruto_reciboes_admin'];
$Comision_hiring=$_POST['Comision_hiring'];
$Descuento_inces=$_POST['Descuento_inces'];
$Descuento_ivss=$_POST['Descuento_ivss'];
$Salario_neto=$_POST['Salario_neto'];
$Fecha_pago=$_POST['Fecha_pago'];
$Numero_recibo=$_POST['Numero_recibo'];

$sql="UPDATE recibo SET `ID_contrato`='$ID_contrato',
                       `ID_nomina`='$ID_nomina',
                       `Salario_bruto_recibo`='$Salario_bruto_recibo', 
                       `Comision_hiring`='$Comision_hiring', 
                       `Descuento_inces`='$Descuento_inces', 
                       `Descuento_ivss`='$Descuento_ivss', 
                       `Salario_neto`='$Salario_neto', 
                       `Fecha_pago`='$Fecha_pago', 
                       `Numero_recibo`='$Numero_recibo' 
                       WHERE ID_recibo='$ID_recibo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: recibo.php"); 
    }
?>