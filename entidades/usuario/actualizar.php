<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE ID_usuario='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID_usuario" value="<?php echo $row['ID_usuario']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID del Usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Email_usuario" placeholder="Email del Usuario" value="<?php echo $row['Email_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Password_usuario" placeholder="Password del Usuariovalue"<?php echo $row['Password_usuario'] ?? ''; ?>">
                                <input type="select" class="form-control mb-3" name="Tipo_de_usuario" placeholder="Tipo de Usuario" value="<?php echo $row['Tipo_de_usuario'] ?? ''; ?>">
                                <input type="datetime-local" class="form-control mb-3" name="Fecha_de_creacio_usuario" placeholder="Fecha de creacio Usuario" value="<?php echo $row['Fecha_de_creacio_usuario'] ?? ''; ?>">
                                <input type="datetime-local" class="form-control mb-3" name="Ultimo_loguin_usuario" placeholder="Ultimo loguin Usuario" value="<?php echo $row['Ultimo_loguin_usuario'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Activo_usuario" placeholder="Estado del Usuario"  value="<?php echo $row['Activo_usuario'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>