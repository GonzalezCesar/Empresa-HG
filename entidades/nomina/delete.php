<?php

include("conexion.php");
$con=conectar();

$ID_nomina=$_GET['id'];

$sql="DELETE FROM nomina  WHERE ID_nomina='$ID_nomina'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: nomina.php");
    }
?>