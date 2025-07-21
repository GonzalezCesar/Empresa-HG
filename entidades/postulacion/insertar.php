<?php
include("conexion.php");
$con=conectar();

$ID_postulacion=$_POST['ID_postulacion'];
$ID_oferta=$_POST['ID_oferta'];
$ID_postulante=$_POST['ID_postulante'];
$Fecha_postulacion=$_POST['Fecha_postulacion'];
$Estado_postulacion=$_POST['Estado_postulacion'];
$notas_postulacion=$_POST['notas_postulacion'];
$calificacio_postulacion=$_POST['calificacio_postulacion'];

$sql="INSERT INTO postulacion VALUES('$ID_postulacion',
                            '$ID_oferta',
                            '$ID_postulante',
                            '$Fecha_postulacion',
                            '$Estado_postulacion',
                            '$notas_postulacion',
                            '$calificacio_postulacion')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: postulacion.php"); 
} else {
}
?>