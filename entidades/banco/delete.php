<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM banco WHERE ID_banco='$ID_banco'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: banco.php");
    }
?>