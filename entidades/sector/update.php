<?php
include("conexion.php");
$con=conectar();

$ID_sector=$_POST['ID_sector'];
$Nombre_sector=$_POST['Nombre_sector'];
$Descripcion_sector=$_POST['Descripcion_sector'];

$sql="UPDATE sector SET `Nombre_sector`='$Nombre_sector',
                       `Descripcion_sector`='$Descripcion_sector', 
                       WHERE ID_sector='$ID_sector'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sector.php"); 
    }
?>