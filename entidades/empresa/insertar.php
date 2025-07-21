<?php
include("conexion.php");
$con=conectar();

$ID_empresa=$_POST['ID_empresa'];
$Nombre_empresa=$_POST['Nombre_empresa'];
$Rif_empresa=$_POST['Rif_empresa'];
$Direccion_empresa=$_POST['Direccion_empresa'];
$Telefono_empresa=$_POST['Telefono_empresa'];
$Sector_empresa=$_POST['Sector_empresa'];
$Fecha_Registro_empresa=$_POST['Fecha_Registro_empresa'];
$Activa_empresa=$_POST['Activa_empresa'];
$ID_sector=$_POST['ID_sector'];

$sql="INSERT INTO empresa VALUES('$ID_empresa',
                            '$Nombre_empresa',
                            '$Rif_empresa',
                            '$Direccion_empresa',
                            '$Telefono_empresa',
                            '$Sector_empresa',
                            '$Fecha_Registro_empresa'),
                            '$Activa_empresa'),
                            '$ID_sector')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empresa.php"); 
} else {
}
?>