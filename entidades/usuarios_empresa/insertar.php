<?php
include("conexion.php");
$con=conectar();

$ID_usuEmpre=$_POST['ID_usuEmpre'];
$ID_empresa=$_POST['ID_empresa'];
$ID_usuario=$_POST['ID_usuario'];
$Nombre_usuEmpre=$_POST['Nombre_usuEmpre'];
$Apellido_usuEmpre=$_POST['Apellido_usuEmpre'];
$Cargo_usuEmpre=$_POST['Cargo_usuEmpre'];
$Telefono_usuEmpre=$_POST['Telefono_usuEmpre'];
$Contacto_Principal_usuEmpre=$_POST['Contacto_Principal_usuEmpre'];

$sql="INSERT INTO usuarios_empresa VALUES('$ID_usuEmpre',
                            '$ID_empresa',
                            '$ID_usuario',
                            '$Nombre_usuEmpre',
                            '$Apellido_usuEmpre',
                            '$Cargo_usuEmpre',
                            '$Telefono_usuEmpre'),
                            '$Contacto_Principal_usuEmpre')";

$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios_empresa.php"); 
} else {
}
?>