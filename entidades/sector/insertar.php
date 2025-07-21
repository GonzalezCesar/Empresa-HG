<?php
include("conexion.php");
$con=conectar();

$ID_sector=$_POST['ID_sector'];
$Nombre_sector=$_POST['Nombre_sector'];
$Descripcion_sector=$_POST['Descripcion_sector'];

$sql="INSERT INTO sector VALUES('$ID_sector',
                            '$Nombre_sector',
                            '$Descripcion_sector')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sector.php"); 
} else {
}
?>