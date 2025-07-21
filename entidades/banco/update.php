<?php
include("conexion.php");
$con=conectar();

$ID_banco=$_POST['ID_banco'];
$Nombre_banco=$_POST['Nombre_banco'];
$Descripcion_banco=$_POST['Descripcion_banco'];


$sql="UPDATE banco SET `Nombre_banco`='$Nombre_banco',
                       `Descripcion_banco`='$Descripcion_banco',
                       WHERE ID_banco='$ID_banco'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: banco.php"); 
    }
?>