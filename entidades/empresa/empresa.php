<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empresa";
    $query=mysqli_query($con,$sql);

   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin (Empresa)</title>
    <link rel="stylesheet" href="register-empresa.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <i class="fas fa-shield-alt header-icon"></i>
            <div>
                <h1 class="header-title">Panel Administrador</h1>
                <p class="header-subtitle">Sistema Hiring Group - Control Total</p>
            </div>
        </div>
        <div class="header-right">
            <span class="user-info">Usuario: admin@hiringgroup.com</span>
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
                    <h2 class="card-title">Total Usuarios</h2>
                    <i class="fas fa-users card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">247</div>
                    <p class="card-description">todos los tipos de usuario</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Empresas Registradas</h2>
                    <i class="fas fa-building card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">2</div>
                    <p class="card-description">empresas clientes</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Ofertas Activas</h2>
                    <i class="fas fa-briefcase card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">2</div>
                    <p class="card-description">de 2 ofertas totales</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Empleados Contratados</h2>
                    <i class="fas fa-user-check card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">2</div>
                    <p class="card-description">contratos activos</p>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <div class="tabs-navigation">
                <button class="tab-trigger" onclick="window.location.href='../administrador/administrador.php'">Administrador</button>
                <button class="tab-trigger" onclick="window.location.href='../hiring-group/hiring-group.php'">Hiring-Group</button>
                <button class="tab-trigger" onclick="window.location.href='../contratado/contratado.php'">Contratado</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Postulante</button>
                <button class="tab-trigger active" onclick="window.location.href='../empresa/empresa.php'">Empresa</button>
            </div>

            <!-- Contenido de la pestaña Empresa -->
            <div id="empresa" class="tab-content active">
                <h2 class="section-title">Gestión de Empresas</h2>
                <p class="section-subtitle">Administra todas las empresas clientes</p>

                <div class="form-card">
                    <h3 class="form-title">Registros de Empresas</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="IDEmpresa">ID Empresa:</label>
                            <input type="number" id="IDEmpresa">
                        </div>
                        <div class="form-group">
                            <label for="NombreE">Nombre de la empresa:</label>
                            <input type="text" id="RIF">
                        </div>
                        <div class="form-group">
                            <label for="RIF">RIF de la empresa:</label>
                            <input type="text" id="RIF">
                        </div>
                        <div class="form-group">
                            <label for="DireccE">Dirección:</label>
                            <input type="text" id="DireccE">
                        </div>
                        <div class="form-group">
                            <label for="TlfnoE">Teléfono:</label>
                            <input type="text" id="TlfnoE">
                        </div>
                        <div class="form-group">
                            <label for="SectorE">Sector:</label>
                            <input type="text" id="TlfnoE">
                        </div>
                        <div class="form-group">
                            <label for="FechaRE">Fecha de registro:</label>
                            <input type="date" id="FechaRE">
                        </div>
                        <div class="form-group">
                            <label for="statusE">Confirma la creación?</label>
                            <input type="checkbox" id="statusE" name="statusE"  value="1" required>
                        </div>
                        <div class="form-group">
                            <label for="IDSector">ID Sector:</label>
                            <input type="number" id="IDSector">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="register-button">Registrar</button>
                    </div>
                </div>

                <p class="table-info">Cambiarle los atributos a las tablas en pro de los registros</p>

                <h3 class="section-title-small">Listado General de Empresas</h3>
                <p class="section-subtitle-small">Información general de las empresas registradas</p>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID Empresa</th>
                                <th>Nombre de Empresa</th>
                                <th>RIF</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Sector</th>
                                <th>Fecha Registro</th>
                                <th>Status</th>
                                <th>ID Sector</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_empresa']?></th>
                                                <th><?php  echo $row['Nombre_empresa']?></th>
                                                <th><?php  echo $row['Rif_empresa']?></th>
                                                <th><?php  echo $row['Direccion_empresa']?></th>
                                                <th><?php  echo $row['Telefono_empresa']?></th>
                                                <th><?php  echo $row['Sector_empresa']?></th>
                                                <th><?php  echo $row['Fecha_Registro_empresa']?></th>
                                                <th><?php  echo $row['Activa_empresa']?></th>  
                                                <th><?php  echo $row['ID_sector']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_empresa"'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_empresa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Otras pestañas (ocultas en este archivo HTML específico) -->
            <div id="administrador" class="tab-content"></div>
            <div id="hiring-group" class="tab-content"></div>
            <div id="contratado" class="tab-content"></div>
            <div id="postulante" class="tab-content"></div>
        </div>
    </main>

    <script>
        // Script para la funcionalidad de pestañas (opcional, si quieres que funcione en este HTML standalone)
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
        <title> Empresa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
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

                                    <input type="number" class="form-control mb-3" name="ID_empresa" placeholder="ID del empresa">
                                    <input type="number" class="form-control mb-3" name="ID_sector" placeholder="ID del Sector">
                                    <input type="text" class="form-control mb-3" name="Nombre_empresa" placeholder="Nombre de la Empresa">
                                    <input type="text" class="form-control mb-3" name="Rif_empresa" placeholder="Rif Empresa">
                                    <input type="text" class="form-control mb-3" name="Direccion_empresa" placeholder="Direccion de la Empresa">
                                    <input type="text" class="form-control mb-3" name="Telefono_empresa" placeholder="Telefono de la Empresa">
                                    <input type="text" class="form-control mb-3" name="Sector_empresa" placeholder="Sector de la Empresa">
                                    <input type="date" class="form-control mb-3" name="Fecha_Registro_empresa" placeholder="Fecha de Registro">
                                    <input type="checkbox" class="form-control mb-3" name="Activa_empresa" value="1" placeholder="Empresa Activa">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID del empresa</th>
                                        <th>ID del Sector</th>
                                        <th>Nombre de la Empresa</th>
                                        <th>Rif Empresa</th>
                                        <th>Direccion de la Empresa</th>
                                        <th>Telefono de la Empresa</th>
                                        <th>Sector de la Empresa</th>
                                        <th>Fecha de Registro</th>
                                        <th>Empresa Activa</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_empresa"']?></th>
                                                <th><?php  echo $row['Nombre_empresa']?></th>
                                                <th><?php  echo $row['Rif_empresa']?></th>
                                                <th><?php  echo $row['Direccion_empresa']?></th>
                                                <th><?php  echo $row['Telefono_empresa']?></th>
                                                <th><?php  echo $row['Sector_empresa']?></th>
                                                <th><?php  echo $row['Fecha_Registro_empresa']?></th>
                                                <th><?php  echo $row['Activa_empresa']?></th>  
                                                <th><?php  echo $row['ID_sector']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_empresa"'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_empresa"'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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