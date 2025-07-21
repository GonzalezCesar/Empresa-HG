<?php
include("conexion.php");
$con=conectar();

$ID_usuario=$_POST['ID_usuario'];
$Email_usuario=$_POST['Email_usuario'];
$Password_usuario=$_POST['Password_usuario'];
$Tipo_de_usuario=$_POST['Tipo_de_usuario'];
$Fecha_de_creacio_usuario=$_POST['Fecha_de_creacio_usuario'];
$Ultimo_loguin_usuario=$_POST['Ultimo_loguin_usuario'];
$Activo_usuario=$_POST['Activo_usuario'];

$sql="INSERT INTO usuario VALUES('$ID_usuario',
                            '$Email_usuario',
                            '$Password_usuario',
                            '$Tipo_de_usuario',
                            '$Fecha_de_creacio_usuario',
                            '$Ultimo_loguin_usuario',
                            '$Activo_usuario')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php"); 
} else {
}
?>