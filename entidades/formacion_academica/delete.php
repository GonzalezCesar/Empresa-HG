<?php

include("conexion.php");
$con=conectar();

$ID_FormaAcad=$_GET['id'];

$sql="DELETE FROM formacion_academica  WHERE ID_FormaAcad='$ID_FormaAcad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: formacion_academica.php");
    }
?>