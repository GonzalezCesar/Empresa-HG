<?php
include("conexion.php");
$con=conectar();

$ID_postulante=$_POST['ID_postulante'];
$ID_usuario=$_POST['ID_usuario'];
$Cedula_postulante=$_POST['Cedula_postulante'];
$Nombre_postulante=$_POST['Nombre_postulante'];
$Apellido_postulante=$_POST['Apellido_postulante'];
$Fecha_de_nacimiento_postulante=$_POST['Fecha_de_nacimiento_postulante'];
$Telefono_postulante=$_POST['Telefono_postulante'];
$Direccion_postulante=$_POST['Direccion_postulante'];
$Tipo_de_sangre_postulante=$_POST['Tipo_de_sangre_postulante'];
$Contacto_de_emergencia_postulante=$_POST['Contacto_de_emergencia_postulante'];
$Telefono_de_emergencia_postulante=$_POST['CodigTelefono_de_emergencia_postulanteo_Especial'];
$Fecha_registro=$_POST['Fecha_registro'];

$sql="INSERT INTO postulante VALUES('$ID_postulante',
                            '$ID_usuario',
                            '$Cedula_postulante',
                            '$Nombre_postulante',
                            '$Apellido_postulante',
                            '$Fecha_de_nacimiento_postulante',
                            '$Telefono_postulante',
                            '$Direccion_postulante',
                            '$Tipo_de_sangre_postulante',
                            '$Contacto_de_emergencia_postulante',
                            '$Telefono_de_emergencia_postulante',
                            '$Fecha_registro')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: postulante.php"); 
} else {
}
?>