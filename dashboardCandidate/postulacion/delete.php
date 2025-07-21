<?php

include("conexion.php");
$con=conectar();

$ID_postulacion=$_GET['id'];

$sql="DELETE FROM postulacion  WHERE ID_postulacion='$ID_postulacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: postulacion.php");
    }
?>