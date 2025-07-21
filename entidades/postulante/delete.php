<?php

include("conexion.php");
$con=conectar();

$ID_postulante=$_GET['id'];

$sql="DELETE FROM postulante  WHERE ID_postulante='$ID_postulante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: postulante.php");
    }
?>