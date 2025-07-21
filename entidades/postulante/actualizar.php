<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM postulante WHERE ID_postulante='$id'";
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
                    
                                <input type="hidden" name="ID_postulante" value="<?php echo $row['ID_postulante']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_postulante" placeholder="ID del Postulante" value="<?php echo $row['ID_postulante'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Cedula_postulante" placeholder="Cedula del Postulante" value="<?php echo $row['Cedula_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_postulante" placeholder="Nombres del Postulante" value="<?php echo $row['Nombre_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Apellido_postulante" placeholder="Apellidos del Postulante" value="<?php echo $row['Apellido_postulante'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_de_nacimiento_postulante" placeholder="Fecha de nacimiento Postulante" value="<?php echo $row['Fecha_de_nacimiento_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Telefono_postulante" placeholder="Telefono del Postulante" value="<?php echo $row['Telefono_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Direccion_postulante" placeholder="Direccion del Postulante"  value="<?php echo $row['Direccion_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Tipo_de_sangre_postulante" placeholder="Tipo de sangre del Postulante"  value="<?php echo $row['Tipo_de_sangre_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Contacto_de_emergencia_postulante" placeholder="Contacto de emergencia del Postulante"  value="<?php echo $row['Contacto_de_emergencia_postulante'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Telefono_de_emergencia_postulante" placeholder="Telefono de emergencia del Postulante"  value="<?php echo $row['Telefono_de_emergencia_postulante'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_registro" placeholder="Fecha de Registro"  value="<?php echo $row['Fecha_registro'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>