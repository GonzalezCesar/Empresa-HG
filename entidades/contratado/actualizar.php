<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM contratado WHERE ID_contratado='$id'";
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
                    
                                <input type="hidden" name="ID_contratado" value="<?php echo $row['ID_contratado']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_contratado" placeholder="ID del Contratado" value="<?php echo $row['ID_contratado'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_contrato" placeholder="ID del Contrato" value="<?php echo $row['ID_contrato'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_de_contratacion" placeholder="Nombres del Admin" value="<?php echo $row['Fecha_de_contratacion'] ?? ''; ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>