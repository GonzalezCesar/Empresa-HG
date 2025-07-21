<?php

include("conexion.php");
$con=conectar();

$ID_oferta_laboral=$_GET['id'];

$sql="DELETE FROM oferta_laboral  WHERE ID_oferta_laboral='$ID_oferta_laboral'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: oferta_laboral.php");
    }
?>