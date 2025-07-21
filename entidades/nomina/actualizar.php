<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM nomina WHERE ID_nomina='$id'";
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
                    
                                <input type="hidden" name="ID_nomina" value="<?php echo $row['ID_nomina']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_nomina" placeholder="ID de la Nomina" value="<?php echo $row['ID_nomina'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_empresa" placeholder="ID de Empresa" value="<?php echo $row['ID_empresa'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuHG" placeholder="ID del usuario HG" value="<?php echo $row['ID_usuHG'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Mes_nomina" placeholder="Mes de la nomina" value="<?php echo $row['Mes_nomina'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Ano_nomina" placeholder="Ano d la nomina" value="<?php echo $row['Ano_nomina'] ?? ''; ?>">
                                <input type="datetime-local" class="form-control mb-3" name="fecha_creacion_nomina" placeholder="Fecha de creacion de la Nomina" value="<?php echo $row['fecha_creacion_nomina'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Total_nomina" placeholder="Pago de la Nomina" value="<?php echo $row['Total_nomina'] ?? ''; ?>">
                                <input type="select" class="form-control mb-3" name="Estado_nomina" placeholder="Estado de la Nomina"  value="<?php echo $row['Estado_nomina'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>