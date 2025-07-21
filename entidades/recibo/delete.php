<?php

include("conexion.php");
$con=conectar();

$ID_recibo=$_GET['id'];

$sql="DELETE FROM recibo  WHERE ID_recibo='$ID_recibo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: recibo.php");
    }
?>