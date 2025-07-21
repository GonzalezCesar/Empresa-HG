<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario_hiringgroup WHERE ID_admin='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Usuario Hiringgroup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID_usuHG" value="<?php echo $row['ID_usuHG']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_usuHG" placeholder="ID Usuario de HG" value="<?php echo $row['ID_usuHG'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario" value="<?php echo $row['ID_usuario'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Nombres_usuHG" placeholder="Nombres del encargado" value="<?php echo $row['Nombres_usuHG'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos_usuHG" placeholder="Apellidos del encargado" value="<?php echo $row['Apellidos_usuHG'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Gestionar_Nomina_usuHG" placeholder="Puede Gestionar de Nomina?" value="<?php echo $row['Gestionar_Nomina_usuHG'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Gestionar_contratos_usuHG" placeholder="Puede Gestionar de Contratos?" value="<?php echo $row['Gestionar_contratos_usuHG'] ?? ''; ?>">
                                <input type="select" class="form-control mb-3" name="Departamento_usuHG" placeholder="Departamento que ocupa en HG"  value="<?php echo $row['Departamento_usuHG'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>