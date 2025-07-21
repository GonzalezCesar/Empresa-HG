<?php
include("conexion.php");
$con=conectar();

$ID_contrato=$_POST['ID_contrato'];
$ID_postulacion=$_POST['ID_postulacion'];
$ID_usuHG=$_POST['ID_usuHG'];
$ID_banco=$_POST['ID_banco'];
$Fecha_inicio_contrato=$_POST['Fecha_inicio_contrato'];
$Fecha_fin_contrato=$_POST['Fecha_fin_contrato'];
$Tipo_de_contrato=$_POST['Tipo_de_contrato'];
$Salario_Mensual_contrato=$_POST['Salario_Mensual_contrato'];
$Numero_cuenta_contrato=$_POST['Numero_cuenta_contrato'];
$Descripcion_contrato=$_POST['Descripcion_contrato'];
$Activo_contrato=$_POST['Activo_contrato'];

$sql="UPDATE contrato SET `ID_postulacion`='$ID_postulacion',
                       `ID_usuHG`='$ID_usuHG',
                       `ID_banco`='$ID_banco', 
                       `Fecha_inicio_contrato`='$Fecha_inicio_contrato', 
                       `Fecha_fin_contrato`='$Fecha_fin_contrato', 
                       `Tipo_de_contrato`='$Tipo_de_contrato', 
                       `Salario_Mensual_contrato`='$Salario_Mensual_contrato', 
                       `Numero_cuenta_contrato`='$Numero_cuenta_contrato', 
                       `Descripcion_contrato`='$Descripcion_contrato', 
                       `Activo_contrato`='$Activo_contrato' 
                       WHERE ID_contrato='$ID_contrato'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contrato.php"); 
    }
?>