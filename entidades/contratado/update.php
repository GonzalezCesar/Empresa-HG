<?php
include("conexion.php");
$con=conectar();

$ID_contratado=$_POST['ID_contratado'];
$ID_usuario=$_POST['ID_usuario'];
$ID_contrato=$_POST['ID_contrato'];
$Fecha_de_contratacion=$_POST['ID_Fecha_de_contratacioncontrato'];


$sql="UPDATE contratado SET `ID_usuario`='$ID_usuario',
                       `ID_contrato`='$ID_contrato',
                       `Fecha_de_contratacion`='$Fecha_de_contratacion',
                       WHERE ID_contratado='$ID_contratado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contratado.php"); 
    }
?>
