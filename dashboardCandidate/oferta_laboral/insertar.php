<?php
include("conexion.php");
$con=conectar();

$ID_oferta_laboral=$_POST['ID_oferta_laboral'];
$ID_empresa=$_POST['ID_empresa'];
$Titulo_oferta_laboral=$_POST['Titulo_oferta_laboral'];
$Descrpcion_oferta_laboral=$_POST['Descrpcion_oferta_laboral'];
$Profecion_oferta_laboral=$_POST['Profecion_oferta_laboral'];
$Salario_oferta_laboral=$_POST['Salario_oferta_laboral'];
$Ubicacion_oferta_laboral=$_POST['Ubicacion_oferta_laboral'];
$Fecha_publicacion_oferta_laboral=$_POST['Fecha_publicacion_oferta_laboral'];
$Fecha_cierre_oferta_laboral=$_POST['Fecha_cierre_oferta_laboral'];
$Activa_oferta_laboral=$_POST['Activa_oferta_laboral'];
$Requisitos_oferta_laboral=$_POST['Requisitos_oferta_laboral'];

$sql="INSERT INTO oferta_laboral VALUES('$ID_oferta_laboral',
                            '$ID_empresa',
                            '$Titulo_oferta_laboral',
                            '$Descrpcion_oferta_laboral',
                            '$Profecion_oferta_laboral',
                            '$Salario_oferta_laboral',
                            '$Ubicacion_oferta_laboral',
                            '$Fecha_publicacion_oferta_laboral',
                            '$Fecha_cierre_oferta_laboral',
                            '$Activa_oferta_laboral',
                            '$Requisitos_oferta_laboral')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: oferta_laboral.php"); 
} else {
}
?>