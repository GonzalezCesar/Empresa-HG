<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios_empresa WHERE ID_usuEmpre='$id'";
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
                    
                                <input type="hidden" name="ID_usuEmpre" value="<?php echo $row['ID_usuEmpre']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_usuEmpre" placeholder="ID del Usuario de la Empresa" value="<?php echo $row['ID_usuEmpre'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_empresa" placeholder="ID de la Empresa" value="<?php echo $row['ID_empresa'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_usuEmpre" placeholder="Nombre del Representante de la Empresa" value="<?php echo $row['Nombre_usuEmpre'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Apellido_usuEmpre" placeholder="Apellidos del Representante de la Empresa" value="<?php echo $row['Apellido_usuEmpre'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Cargo_usuEmpre" placeholder="Cargo en la Empresa" value="<?php echo $row['Cargo_usuEmpre'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Telefono_usuEmpre" placeholder="Telefono" value="<?php echo $row['Telefono_usuEmpre'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Contacto_Principal_usuEmpre" placeholder="Es el contacto Principal de la Empresa?"  value="<?php echo $row['Contacto_Principal_usuEmpre'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>