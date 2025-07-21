<?php

include("conexion.php");
$con=conectar();

$ID_sector=$_GET['id'];

$sql="DELETE FROM sector  WHERE ID_sector='$ID_sector'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sector.php");
    }
?>