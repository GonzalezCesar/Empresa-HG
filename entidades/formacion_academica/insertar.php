<?php
include("conexion.php");
$con=conectar();

$ID_FormaAcad=$_POST['ID_FormaAcad'];
$ID_postulante=$_POST['ID_postulante'];
$Institucion_FormaAcad=$_POST['Institucion_FormaAcad'];
$Titulo_FormaAcad=$_POST['Titulo_FormaAcad'];
$Fecha_inicio_FormaAcad=$_POST['Fecha_inicio_FormaAcad'];
$Fecha_fin_FormaAcad=$_POST['Fecha_fin_FormaAcad'];
$Descripcion_FormaAcad=$_POST['Descripcion_FormaAcad'];
$Crear_usuario_admin=$_POST['Crear_usuario_admin'];

$sql="INSERT INTO formacion_academica VALUES('$ID_FormaAcad',
                            '$ID_postulante',
                            '$Institucion_FormaAcad',
                            '$Titulo_FormaAcad',
                            '$Fecha_inicio_FormaAcad',
                            '$Fecha_fin_FormaAcad',
                            '$Descripcion_FormaAcad')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: formacion_academica.php"); 
} else {
}
?>