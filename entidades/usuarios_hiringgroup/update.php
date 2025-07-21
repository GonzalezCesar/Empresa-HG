<?php
include("conexion.php");
$con=conectar();

$ID_usuHG=$_POST['ID_usuHG'];
$ID_usuario=$_POST['ID_usuario'];
$Nombres_usuHG=$_POST['Nombres_usuHG'];
$Apellidos_usuHG=$_POST['Apellidos_usuHG'];
$Gestionar_Nomina_usuHG=$_POST['Gestionar_Nomina_usuHG'];
$Gestionar_contratos_usuHG=$_POST['Gestionar_contratos_usuHG'];
$Departamento_usuHG=$_POST['Departamento_usuHG'];

$sql="UPDATE usuario_hiringgroup SET `ID_usuario`='$ID_usuario',
                       `Nombres_usuHG`='$Nombres_usuHG',
                       `Apellidos_usuHG`='$Apellidos_usuHG', 
                       `Gestionar_Nomina_usuHG`='$Gestionar_Nomina_usuHG', 
                       `Gestionar_contratos_usuHG`='$Gestionar_contratos_usuHG', 
                       `Departamento_usuHG`='$Departamento_usuHG' 
                       WHERE ID_usuHG='$ID_usuHG'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario_hiringgroup.php"); 
    }
?>