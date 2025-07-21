<?php

include("conexion.php");
$con=conectar();

$ID_usuHG=$_GET['id'];

$sql="DELETE FROM usuario_hiringgroup  WHERE ID_usuHG='$ID_usuHG'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario_hiringgroup.php");
    }
?>