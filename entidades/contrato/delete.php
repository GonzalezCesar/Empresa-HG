<?php

include("conexion.php");
$con=conectar();

$ID_contrato=$_GET['id'];

$sql="DELETE FROM contrato  WHERE ID_contrato='$ID_contrato'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contrato.php");
    }
?>