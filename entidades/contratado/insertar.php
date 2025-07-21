<?php
include("conexion.php");
$con=conectar();

$ID_contratado=$_POST['ID_contratado'];
$ID_usuario=$_POST['ID_usuario'];
$ID_contrato=$_POST['ID_contrato'];
$Fecha_de_contratacion=$_POST['Fecha_de_contratacion'];



$sql="INSERT INTO administrador VALUES('$ID_contratado',
                            '$ID_usuario',
                            '$ID_contrato',
                            '$Fecha_de_contratacion')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: contratado.php"); 
} else {
}
?>
