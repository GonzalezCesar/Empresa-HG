<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM contratado";
    $query=mysqli_query($con,$sql);

   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin (Contratado)</title>
    <link rel="stylesheet" href="dashboard-contratado.css">
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
                <button class="tab-trigger active" onclick="window.location.href='../contratado/contratado.php'">Contratado</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Postulante</button>
                <button class="tab-trigger" onclick="window.location.href='../empresa/empresa.php'">Empresa</button>
            </div>

            <!-- Other tab contents are hidden in this specific HTML file -->
            <div id="administrador" class="tab-content"></div>
            <div id="hiring-group" class="tab-content"></div>

            <div id="contratado" class="tab-content active">
                <h2 class="section-title">Gestión de personas contratadas</h2>
                <p class="section-subtitle">Administra todo el personal contratado</p>

                <div class="form-card">
                    <h3 class="form-title">Hacer inputs de la tabla CONTRATADO/EMPLEADO para su registro</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="contracted-input1">Input:</label>
                            <input type="text" id="contracted-input1">
                        </div>
                        <div class="form-group">
                            <label for="contracted-input2">Input:</label>
                            <input type="text" id="contracted-input2">
                        </div>
                        <div class="form-group">
                            <label for="contracted-input3">Input:</label>
                            <input type="text" id="contracted-input3">
                        </div>
                        <div class="form-group">
                            <label for="contracted-input4">Input:</label>
                            <input type="text" id="contracted-input4">
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
                                <th>ID</th>
                                <th>Empresa</th>
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
                                            <th><?php  echo $row['ID_contratado']?></th>
                                            <th><?php  echo $row['ID_usuario']?></th>
                                            <th><?php  echo $row['ID_contrato']?></th>
                                            <th><?php  echo $row['Fecha_de_contratacion']?></th>
                                            <th><a href="actualizar.php?id=<?php echo$row['ID_contratado"'] ?>" class="btnbtn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $ro['ID_contratado"'] ?>" class="btn btn-danger">Eliminar</a><th>                                        
                                        </tr>
                                    <?php 
                                            }
                                    ?>
                                </tbody>
                    </table>
                </div>
            </div>

            <div id="postulante" class="tab-content"></div>
            <div id="empresa" class="tab-content"></div>
        </div>
    </main>
</body>
</html>

