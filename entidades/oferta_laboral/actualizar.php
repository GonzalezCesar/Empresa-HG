<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM oferta_laboral WHERE ID_oferta_laboral='$id'";
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
                    
                                <input type="hidden" name="ID_oferta_laboral" value="<?php echo $row['ID_oferta_laboral']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_oferta_laboral" placeholder="ID de la Oferta Laboral" value="<?php echo $row['ID_oferta_laboral'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_empresa" placeholder="ID de la Empresa" value="<?php echo $row['ID_empresa'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Titulo_oferta_laboral" placeholder="Nombre del puesto Ofertado" value="<?php echo $row['Titulo_oferta_laboral'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Descrpcion_oferta_laboral" placeholder="Nombres del puesto Ofertado" value="<?php echo $row['Descrpcion_oferta_laboral'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Profecion_oferta_laboral" placeholder="Profecion requerida para el puesto laboral" value="<?php echo $row['Profecion_oferta_laboral'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Salario_oferta_laboral" placeholder="Salario del puesto" value="<?php echo $row['Salario_oferta_laboral'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Ubicacion_oferta_laboral" placeholder="Ciudad y Estado de la Oferta Laboral" value="<?php echo $row['Ubicacion_oferta_laboral'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_publicacion_oferta_laboral" placeholder="Fecha de Publicacion de la Oferta Laboral"  value="<?php echo $row['Fecha_publicacion_oferta_laboral'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_cierre_oferta_laboral" placeholder="Fecha de Cierre de la Oferta Laboral"  value="<?php echo $row['Fecha_cierre_oferta_laboral'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Activa_oferta_laboral" placeholder="Estado de la Oferta Laboral"  value="<?php echo $row['Activa_oferta_laboral'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Requisitos_oferta_laboral" placeholder="Requisitos de la Oferta Laboral"  value="<?php echo $row['Requisitos_oferta_laboral'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>