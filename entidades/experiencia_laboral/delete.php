<?php

include("conexion.php");
$con=conectar();

$ID_expeLa=$_GET['id'];

$sql="DELETE FROM experiencia_laboral  WHERE ID_expeLa='$ID_expeLa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: experiencia_laboral.php");
    }
?>