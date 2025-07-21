<?php
include("conexion.php");
$con=conectar();

$ID_admin=$_POST['ID_admin'];
$ID_usuario=$_POST['ID_usuario'];
$Cedula_admin=$_POST['Cedula_admin'];
$Nombres_admin=$_POST['Nombres_admin'];
$Apellidos_admin=$_POST['Apellidos_admin'];
$Telefono_admin=$_POST['Telefono_admin'];
$Codigo_Especial=$_POST['Codigo_Especial'];
$Crear_usuario_admin=$_POST['Crear_usuario_admin'];

$sql="UPDATE administrador SET `ID_usuario`='$ID_usuario',
                       `Cedula_admin`='$Cedula_admin',
                       `Nombres_admin`='$Nombres_admin', 
                       `Apellidos_admin`='$Apellidos_admin', 
                       `Telefono_admin`='$Telefono_admin', 
                       `Codigo_Especial`='$Codigo_Especial', 
                       `Crear_usuario_admin`='$Crear_usuario_admin' 
                       WHERE ID_admin='$ID_admin'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administrador.php"); 
    }
?>