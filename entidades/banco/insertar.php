<?php
include("conexion.php");
$con=conectar();

$ID_banco=$_POST['ID_banco'];
$Nombre_banco=$_POST['Nombre_banco'];
$Descripcion_banco=$_POST['Descripcion_banco'];


$sql="INSERT INTO administrador VALUES('$ID_banco',
                            '$Nombre_banco',
                            '$Descripcion_banco')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: banco.php"); 
} else {
}
?>