<?php

include("conexion.php");
$con=conectar();

$ID_admin=$_GET['id'];

$sql="DELETE FROM administrador  WHERE ID_admin='$ID_admin'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administrador.php");
    }
?>