<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM postulante";
    $query=mysqli_query($con,$sql);

   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin (Postulante)</title>
    <link rel="stylesheet" href="style.css">
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
                <button class="tab-trigger active" onclick="window.location.href='../postulante/postulante.php'">Postulante</button>
                <button class="tab-trigger" onclick="window.location.href='../empresa/empresa.php'">Empresa</button>
            </div>

            <!-- Contenido de la pestaña Postulante -->
            <div id="postulante" class="tab-content active">
                <h2 class="section-title">Gestión de Postulantes</h2>
                <p class="section-subtitle">Supervisa todos los postulantes del sistema</p>

                <div class="form-card">
                    <h3 class="form-title">Hacer inputs de la tabla POSTULANTES para su registro</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="post-input1">Input:</label>
                            <input type="text" id="post-input1">
                        </div>
                        <div class="form-group">
                            <label for="post-input2">Input:</label>
                            <input type="text" id="post-input2">
                        </div>
                        <div class="form-group">
                            <label for="post-input3">Input:</label>
                            <input type="text" id="post-input3">
                        </div>
                        <div class="form-group">
                            <label for="post-input4">Input:</label>
                            <input type="text" id="post-input4">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="register-button">Registrar</button>
                    </div>
                </div>

                <p class="table-info">Cambiarle los atributos a las tablas en pro de los registros/Cambiar las letras negras BOLD por algo acorde</p>

                <h3 class="section-title-small">Listado General de Postulaciones</h3>
                <p class="section-subtitle-small">Información de todos los postulantes realizados</p>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Candidato</th>
                                <th>Email</th>
                                <th>Oferta</th>
                                <th>Empresa</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_postulante']?></th>
                                                <th><?php  echo $row['ID_usuario']?></th>
                                                <th><?php  echo $row['Cedula_postulante']?></th>
                                                <th><?php  echo $row['Nombre_postulante']?></th>
                                                <th><?php  echo $row['Apellido_postulante']?></th>
                                                <th><?php  echo $row['Fecha_de_nacimiento_postulante']?></th>
                                                <th><?php  echo $row['Telefono_postulante']?></th>
                                                <th><?php  echo $row['Direccion_postulante']?></th> 
                                                <th><?php  echo $row['Tipo_de_sangre_postulante']?></th> 
                                                <th><?php  echo $row['Contacto_de_emergencia_postulante']?></th> 
                                                <th><?php  echo $row['Telefono_de_emergencia_postulante']?></th> 
                                                <th><?php  echo $row['Fecha_registro']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_postulante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_postulante'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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
            <div id="empresa" class="tab-content"></div>
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

