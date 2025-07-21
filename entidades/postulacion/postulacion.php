<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM administrador";
    $query=mysqli_query($con,$sql);

   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Hiring Group (Postulaciones)</title>
    <link rel="stylesheet" href="postulaciones.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <i class="fas fa-shield-alt header-icon"></i>
            <div>
                <h1 class="header-title">Panel Hiring Group</h1>
                <p class="header-subtitle">Sistema Hiring Group - Control Total</p>
            </div>
        </div>
        <div class="header-right">
            <span class="user-info">Usuario: Admin HG</span>
            <button class="logout-button">
                <i class="fas fa-sign-out-alt logout-icon"></i>
                Cerrar Sesión
            </button>
        </div>
    </header>

    <main class="main-content">
        <div class="summary-cards">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Empresas Activas</h2>
                    <i class="fas fa-building card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">24</div>
                    <p class="card-description">en el último periodo</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Ofertas Activas</h2>
                    <i class="fas fa-briefcase card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">87</div>
                    <p class="card-description">en la última semana</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Postulaciones</h2>
                    <i class="fas fa-users card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">342</div>
                    <p class="card-description">este mes</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Empleados Activos</h2>
                    <i class="fas fa-user-check card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">156</div>
                    <p class="card-description">este año</p>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <div class="tabs-navigation">   
                <button class="tab-trigger" onclick="window.location.href='../empresa/empresa.php'">Empresa</button>
                <button class="tab-trigger" onclick="window.location.href='../nomina/nomina.php'">Nómina</button>
                <button class="tab-trigger" onclick="window.location.href='../banco/banco.php'">Banco</button>
                <button class="tab-trigger active" onclick="window.location.href='../postulacion/postulacion.php'">Postulaciones</button>
                <button class="tab-trigger" onclick="window.location.href='../oferta_laboral/ofert_laboral.php'">Ofertas</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Candidatos</button>
                <button class="tab-trigger" onclick="window.location.href='../'">Contratado</button>
            </div>

            <!-- Contenido de la pestaña Postulaciones -->
            <div id="postulaciones" class="tab-content active">
                <div class="postulation-card">
                    <h3 class="postulation-title">Nombre de la Postulación</h3>
                    <p class="postulation-detail">Cargo</p>
                    <p class="postulation-detail">Nombre de la empresa</p>
                    <p class="postulation-detail">Fecha de la postulación</p>
                </div>
                <div class="postulation-card">
                    <h3 class="postulation-title">Nombre de la Postulación</h3>
                    <p class="postulation-detail">Cargo</p>
                    <p class="postulation-detail">Nombre de la empresa</p>
                    <p class="postulation-detail">Fecha de la postulación</p>
                </div>
                <p class="table-info" style="margin-top: 2rem;">Formato para hacer listado desde la BD de la entidad POSTULACIONES</p>
            </div>

            <!-- Otras pestañas (ocultas en este archivo HTML específico) -->
            <div id="empresa" class="tab-content"></div>
            <div id="nomina" class="tab-content"></div>
            <div id="banco" class="tab-content"></div>
            <div id="ofertas" class="tab-content"></div>
            <div id="candidatos" class="tab-content"></div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabTriggers = document.querySelectorAll('.tab-trigger');
            const tabContents = document.querySelectorAll('.tab-content');

            tabTriggers.forEach(trigger => {
                trigger.addEventListener('click', () => {
                    tabTriggers.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));
                    trigger.classList.add('active');
                    const targetTabId = trigger.dataset.tab;
                    document.getElementById(targetTabId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>




<!-- <!DOCTYPE html>
<html lang="es">
    <head>
        <title> ADMINISTRADOR</title>
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

                                    <input type="number" class="form-control mb-3" name="ID_postulacion" placeholder="ID del Postulacion">
                                    <input type="number" class="form-control mb-3" name="ID_oferta" placeholder="ID de la Oferta">
                                    <input type="number" class="form-control mb-3" name="ID_postulante" placeholder="ID del Postulante">
                                    <input type="datetime" class="form-control mb-3" name="Fecha_postulacion" placeholder="Fecha de la Postulacion">
                                    <input type="select" class="form-control mb-3" name="Estado_postulacion" placeholder="Estado de la Postulacion">
                                    <input type="text" class="form-control mb-3" name="notas_postulacion" placeholder="Notas de la Postulacion">
                                    <input type="text" class="form-control mb-3" name="calificacio_postulacion" placeholder="Calificacio de la Postulacion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID del Postulacion</th>
                                        <th>ID de la Oferta</th>
                                        <th>ID del Postulante</th>
                                        <th>Fecha de la Postulacion</th>
                                        <th>Estado de la Postulacion</th>
                                        <th>Notas de la Postulacion</th>
                                        <th>Calificacio de la Postulacion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_postulacion"']?></th>
                                                <th><?php  echo $row['ID_oferta']?></th>
                                                <th><?php  echo $row['ID_postulante']?></th>
                                                <th><?php  echo $row['Fecha_postulacion']?></th>
                                                <th><?php  echo $row['Estado_postulacion']?></th>
                                                <th><?php  echo $row['notas_postulacion']?></th>
                                                <th><?php  echo $row['calificacio_postulacion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_postulacion"'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_postulacion"'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
</html> -->