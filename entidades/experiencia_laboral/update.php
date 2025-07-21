<?php
include("conexion.php");
$con=conectar();

$ID_expeLa=$_POST['ID_expeLa'];
$ID_postulante=$_POST['ID_postulante'];
$Empresa_expeLa=$_POST['Empresa_expeLa'];
$Cargo_expeLa=$_POST['Cargo_expeLa'];
$Fecha_inicio_expeLa=$_POST['Fecha_inicio_expeLa'];
$Fecha_fin_expeLa=$_POST['Fecha_fin_expeLa'];
$Descripcion_expeLa=$_POST['Descripcion_expeLa'];
$Referencia_expeLa=$_POST['Referencia_expeLa'];

$sql="UPDATE experiencia_laboral SET `ID_postulante`='$ID_postulante',
                       `Empresa_expeLa`='$Empresa_expeLa',
                       `Cargo_expeLa`='$Cargo_expeLa', 
                       `Fecha_inicio_expeLa`='$Fecha_inicio_expeLa', 
                       `Fecha_fin_expeLa`='$Fecha_fin_expeLa', 
                       `Descripcion_expeLa`='$Descripcion_expeLa', 
                       `Referencia_expeLa`='$Referencia_expeLa' 
                       WHERE ID_expeLa='$ID_expeLa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: experiencia_laboral.php"); 
    }
?>