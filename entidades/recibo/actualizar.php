<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM recibo WHERE ID_recibo='$id'";
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
                    
                                <input type="hidden" name="ID_recibo" value="<?php echo $row['ID_recibo']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_recibo" placeholder="ID del Recibo" value="<?php echo $row['ID_recibo'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_contrato" placeholder="ID del Contrato" value="<?php echo $row['ID_contrato'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_nomina" placeholder="ID de la Nomina" value="<?php echo $row['ID_nomina'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Salario_bruto_recibo" placeholder="Salario Bruto" value="<?php echo $row['Salario_bruto_recibo'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Comision_hiring" placeholder="Comision de Hiring Group" value="<?php echo $row['Comision_hiring'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Descuento_inces" placeholder="Descuento Inces" value="<?php echo $row['Descuento_inces'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Descuento_ivss" placeholder="Descuento de ivss" value="<?php echo $row['Descuento_ivss'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Salario_neto" placeholder="Salario Neto"  value="<?php echo $row['Salario_neto'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_pago" placeholder="Fecha de Pago"  value="<?php echo $row['Fecha_pago'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Numero_recibo" placeholder="Numero del Recibo"  value="<?php echo $row['Numero_recibo'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>