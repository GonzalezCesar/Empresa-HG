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

$sql="UPDATE usuarios_empresa SET `ID_empresa`='$ID_empresa',
                       `ID_usuario`='$ID_usuario',
                       `Nombre_usuEmpre`='$Nombre_usuEmpre', 
                       `Apellido_usuEmpre`='$Apellido_usuEmpre', 
                       `Cargo_usuEmpre`='$Cargo_usuEmpre', 
                       `Telefono_usuEmpre`='$Telefono_usuEmpre', 
                       `Contacto_Principal_usuEmpre`='$Contacto_Principal_usuEmpre' 
                       WHERE ID_usuEmpre='$ID_usuEmpre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios_empresa.php"); 
    }
?>