<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM administrador WHERE ID_admin='$id'";
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
                    
                                <input type="hidden" name="ID_admin" value="<?php echo $row['ID_admin']  ?>">
                                
                                <input type="number" class="form-control mb-3" name="ID_contrato" placeholder="Codigo del Contrato" value="<?php echo $row['ID_contrato'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_postulacion" placeholder="Codigo de Costulacion" value="<?php echo $row['ID_postulacion'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_usuHG" placeholder="Codigo de UsuarioHG" value="<?php echo $row['ID_usuHG'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="ID_banco" placeholder="Codigo del Banco" value="<?php echo $row['ID_banco'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_inicio_contrato" placeholder="Fecha de Inicio del Contrato" value="<?php echo $row['Fecha_inicio_contrato'] ?? ''; ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_fin_contrato" placeholder="Fecha de Fin del Contrato" value="<?php echo $row['Fecha_fin_contrato'] ?? ''; ?>">
                                <input type="select" class="form-control mb-3" name="Tipo_de_contrato" placeholder="Tipo de contrato" value="<?php echo $row['Tipo_de_contrato'] ?? ''; ?>">
                                <input type="number" class="form-control mb-3" name="Salario_Mensual_contrato" placeholder="Salario Mensual del Contrato"  value="<?php echo $row['Salario_Mensual_contrato'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Numero_cuenta_contrato" placeholder="Numero Cuenta"  value="<?php echo $row['Numero_cuenta_contrato'] ?? ''; ?>">
                                <input type="text" class="form-control mb-3" name="Descripcion_contrato" placeholder="Descripcion del Contrato"  value="<?php echo $row['Descripcion_contrato'] ?? ''; ?>">
                                <input type="checkbox" class="form-control mb-3" name="Activo_contrato" placeholder="Estado del contrato"  value="<?php echo $row['Activo_contrato'] ?? ''; ?>">


                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>