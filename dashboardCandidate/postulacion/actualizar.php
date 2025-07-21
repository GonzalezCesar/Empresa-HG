<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM postulacion WHERE ID_postulacion='$id'";
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
                    
                                <input type="hidden" name="ID_postulacion" value="<?php echo $row['ID_postulacion']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_postulacion" placeholder="ID del Postulacion" value="<?php echo $row['ID_postulacion'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_oferta" placeholder="ID de la Oferta" value="<?php echo $row['ID_oferta'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_postulante" placeholder="ID del Postulante" value="<?php echo $row['ID_postulante'] ?? ''; ?>">
                                <input type="datetime-local" class="form-control mb-3" name="Fecha_postulacion" placeholder="Fecha de la Postulacion" value="<?php echo $row['Fecha_postulacion'] ?? ''; ?>">
                                <input type="select" class="form-control mb-3" name="Estado_postulacion" placeholder="Estado de la Postulacion" value="<?php echo $row['Estado_postulacion'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="notas_postulacion" placeholder="Notas de la Postulacion" value="<?php echo $row['notas_postulacion'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="calificacio_postulacion" placeholder="Calificacio de la Postulacion" value="<?php echo $row['calificacio_postulacion'] ?? ''; ?>">
                                


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>