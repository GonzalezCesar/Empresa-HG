<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario_hiringgroup";
    $query=mysqli_query($con,$sql);

   
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> Usuario Hiring Group</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="stylo.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

    <nav class="nave">
            <ul class="menu_horizontal"> 

                <li> <a href="http://localhost/Empresa%20HG/principal_pag/paginaMain.php">Inicio</a> </li>


                <li> 
                    <a href="http://localhost/Empresa%20HG/principal_pag/paginaMain.php">CRUD</a> 
                    <ul class="menu_vertical">
                        <li><a href="http://localhost/Empresa%20HG/entidades/administrador/administrador.php">Administrador</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/banco/banco.php">Banco</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/contratado/contratado.php">Contratado</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/contrato/contrato.php">Contrato</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/empresa/empresa.php">Empresa</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/experiencia_laboral/experiencia_laboral.php">Experiencia_Laboral</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/formacion_academica/formacion_academica.php">Formacion_Academica</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/nomina/nomina.php">Nomina</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/oferta_laboral/oferta_laboral.php">Oferta_Laboral</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/postulacion/postulacion.php">Postulacion</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/postulante/postulante.php">Postulante</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/recibo/recibo.php">Recibo</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/sector/sector.php">Sector</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/usuario/usuario.php">Usuario</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/usuario_empresa/usuario_empresa.php">Usuario_Empresa</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/entidades/usuario_hiringgroup/usuario_hiringgroup.php">usuario_hiringgroup</a> </li>
                    </ul>
                </li>


                <li> 
                    <a href="http://localhost/Empresa%20HG/principal_pag/paginaMain.php">Reportes</a> 
                    <ul class="menu_vertical">
                        <li><a href="http://localhost/Empresa%20HG/reportes/administrador/administrador.php">Administrador</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/banco/banco.php">Banco</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/contratado/contratado.php">Contratado</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/contrato/contrato.php">Contrato</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/empresa/empresa.php">Empresa</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/experiencia_laboral/experiencia_laboral.php">Experiencia_Laboral</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/formacion_academica/formacion_academica.php">Formacion_Academica</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/nomina/nomina.php">Nomina</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/oferta_laboral/oferta_laboral.php">Oferta_Laboral</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/postulacion/postulacion.php">Postulacion</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/postulante/postulante.php">Postulante</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/recibo/recibo.php">Recibo</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/sector/sector.php">Sector</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/usuario/usuario.php">Usuario</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/usuario_empresa/usuario_empresa.php">Usuario_Empresa</a> </li>
                        <li><a href="http://localhost/Empresa%20HG/reportes/usuario_hiringgroup/usuario_hiringgroup.php">usuario_hiringgroup</a> </li>
                    </ul>
                </li>

                <li> 
                    <a href="http://localhost/Empresa%20HG/principal_pag/paginaMain.php">Cartas</a>
                    <ul class="menu_vertical">
                        <li><a href="!">no se si va</a> </li>
                        <li><a href="!">no se si va</a> </li>
                        <li><a href="!">no se si va</a> </li>
                    </ul> 
                </li>

            </ul>
         </nav>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="number" class="form-control mb-3" name="ID_usuHG" placeholder="ID Usuario de HG">
                                    <input type="number" class="form-control mb-3" name="ID_usuario" placeholder="ID usuario">
                                    <input type="text" class="form-control mb-3" name="Nombres_usuHG" placeholder="Nombres del encargado">
                                    <input type="text" class="form-control mb-3" name="Apellidos_usuHG" placeholder="Apellidos del encargado">
                                    <input type="checkbox" class="form-control mb-3" name="Gestionar_Nomina_usuHG" placeholder="Puede Gestionar de Nomina?">
                                    <input type="checkbox" class="form-control mb-3" name="Gestionar_contratos_usuHG" placeholder="Puede Gestionar de Contratos?">
                                    <input type="select" class="form-control mb-3" name="Departamento_usuHG" placeholder="Departamento que ocupa en HG">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Usuario de HG</th>
                                        <th>ID usuario</th>
                                        <th>Nombres del encargado</th>
                                        <th>Apellidos del encargado</th>
                                        <th>Puede Gestionar de Nomina?</th>
                                        <th>Puede Gestionar de Contratos?</th>
                                        <th>Departamento que ocupa en HG</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_usuHG"']?></th>
                                                <th><?php  echo $row['ID_usuario']?></th>
                                                <th><?php  echo $row['Nombres_usuHG']?></th>
                                                <th><?php  echo $row['Apellidos_usuHG']?></th>
                                                <th><?php  echo $row['Gestionar_Nomina_usuHG']?></th>
                                                <th><?php  echo $row['Gestionar_contratos_usuHG']?></th>
                                                <th><?php  echo $row['Departamento_usuHG']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_usuHG"'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_usuHG"'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>