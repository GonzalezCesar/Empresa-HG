<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM formacion_academica WHERE ID_FormaAcad='$id'";
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
                    
                                <input type="hidden" name="ID_FormaAcad" value="<?php echo $row['ID_FormaAcad']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_FormaAcad" placeholder="ID Formacion Academica" value="<?php echo $row['ID_FormaAcad'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_postulante" placeholder="ID del Postulante" value="<?php echo $row['ID_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Institucion_FormaAcad" placeholder="Institucion donde se formo Academicamente" value="<?php echo $row['Institucion_FormaAcad'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Titulo_FormaAcad" placeholder="Titulo" value="<?php echo $row['Titulo_FormaAcad'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_inicio_FormaAcad" placeholder="Fecha inicio de su formacion Academica" value="<?php echo $row['Fecha_inicio_FormaAcad'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_fin_FormaAcad" placeholder="Fecha fin de su formacion Academica" value="<?php echo $row['Fecha_fin_FormaAcad'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion_FormaAcad" placeholder="Pequeña descripcion de su formacion Academica"  value="<?php echo $row['Descripcion_FormaAcad'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>