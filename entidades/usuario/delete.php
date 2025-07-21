<?php

include("conexion.php");
$con=conectar();

$ID_usuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE ID_usuario='$ID_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>