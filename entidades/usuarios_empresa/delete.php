<?php

include("conexion.php");
$con=conectar();

$ID_usuEmpre=$_GET['id'];

$sql="DELETE FROM usuarios_empresa  WHERE ID_usuEmpre='$ID_usuEmpre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios_empresa.php");
    }
?>