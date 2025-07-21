<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empresa WHERE ID_empresa='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID_empresa" value="<?php echo $row['ID_empresa']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_empresa" placeholder="ID del empresa" value="<?php echo $row['ID_empresa'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_sector" placeholder="ID del Sector" value="<?php echo $row['ID_sector'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_empresa" placeholder="Nombre de la Empresa" value="<?php echo $row['Nombre_empresa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Rif_empresa" placeholder="Rif Empresa" value="<?php echo $row['Rif_empresa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Direccion_empresa" placeholder="Direccion de la Empresa" value="<?php echo $row['Direccion_empresa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Telefono_empresa" placeholder="Telefono de la Empresa" value="<?php echo $row['Telefono_empresa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Sector_empresa" placeholder="Sector de la Empresa" value="<?php echo $row['Sector_empresa'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_Registro_empresa" placeholder="Fecha de Registro" value="<?php echo $row['Fecha_Registro_empresa'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Activa_empresa" placeholder=" Empresa Activa"  value="<?php echo $row['Activa_empresa'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>