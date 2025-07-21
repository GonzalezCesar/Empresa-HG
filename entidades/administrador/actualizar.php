<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM administrador WHERE ID_admin='$id'";
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
                    
                                <input type="hidden" name="ID_admin" value="<?php echo $row['ID_admin']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_admin" placeholder="ID del Admin" value="<?php echo $row['ID_admin'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Cedula_admin" placeholder="Cedula del Admin" value="<?php echo $row['Cedula_admin'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Nombres_admin" placeholder="Nombres del Admin" value="<?php echo $row['Nombres_admin'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos_admin" placeholder="Apellidos del Admin" value="<?php echo $row['Apellidos_admin'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Telefono_admin" placeholder="Telefono del Admin" value="<?php echo $row['Telefono_admin'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Codigo_Especial" placeholder="Codigo Especial del Admin" value="<?php echo $row['Codigo_Especial'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Crear_usuario_admin" placeholder="Puede crear nuevos usuario?"  value="<?php echo $row['Crear_usuario_admin'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>