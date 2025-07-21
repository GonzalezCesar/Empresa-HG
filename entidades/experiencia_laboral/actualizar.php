<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM experiencia_laboral WHERE ID_expeLa='$id'";
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
                    
                                <input type="hidden" name="ID_expeLa" value="<?php echo $row['ID_expeLa']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_expeLa" placeholder="ID Experiencia Laboral" value="<?php echo $row['ID_expeLa'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_postulante" placeholder="ID del Postulante" value="<?php echo $row['ID_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Empresa_expeLa" placeholder="Empresa donde Trabajo" value="<?php echo $row['Empresa_expeLa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Cargo_expeLa" placeholder="Puesto que ocupo" value="<?php echo $row['Cargo_expeLa'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_inicio_expeLa" placeholder="Fecha Inicio" value="<?php echo $row['Fecha_inicio_expeLa'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_fin_expeLa" placeholder="Fecha Fin" value="<?php echo $row['Fecha_fin_expeLa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion_expeLa" placeholder="Descripcion del puesto de trabajo" value="<?php echo $row['Descripcion_expeLa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Referencia_expeLa" placeholder="Referencias"  value="<?php echo $row['Referencia_expeLa'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>