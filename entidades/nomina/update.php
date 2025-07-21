<?php
include("conexion.php");
$con=conectar();

$ID_nomina=$_POST['ID_nomina'];
$ID_empresa=$_POST['ID_empresa'];
$ID_usuHG=$_POST['ID_usuHG'];
$Mes_nomina=$_POST['Mes_nomina'];
$Ano_nomina=$_POST['Ano_nomina'];
$fecha_creacion_nomina=$_POST['fecha_creacion_nomina'];
$Total_nomina=$_POST['Total_nomina'];
$Estado_nomina=$_POST['Estado_nomina'];

$sql="UPDATE nomina SET `ID_empresa`='$ID_empresa',
                       `ID_usuHG`='$ID_usuHG',
                       `Mes_nomina`='$Mes_nomina', 
                       `Ano_nomina`='$Ano_nomina', 
                       `fecha_creacion_nomina`='$fecha_creacion_nomina', 
                       `Total_nomina`='$Total_nomina', 
                       `Estado_nomina`='$Estado_nomina' 
                       WHERE ID_nomina='$ID_nomina'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: nomina.php"); 
    }
?>