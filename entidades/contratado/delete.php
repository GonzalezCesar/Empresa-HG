<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM contratado  WHERE ID_contratado='$ID_contratado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contratado.php");
    }
?>