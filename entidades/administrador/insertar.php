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

$sql="INSERT INTO administrador VALUES('$ID_admin',
                            '$ID_usuario',
                            '$Cedula_admin',
                            '$Nombres_admin',
                            '$Apellidos_admin',
                            '$Telefono_admin',
                            '$Codigo_Especial'),
                            '$Crear_usuario_admin')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: administrador.php"); 
} else {
}
?>