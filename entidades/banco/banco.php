<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM banco";
    $query=mysqli_query($con,$sql);

   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Hiring Group (Banco)</title>
    <link rel="stylesheet" href="banco.css">
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
                <button class="tab-trigger" onclick="window.location.href='../Panel-HG/panelHG.php'">Empresa</button>
                <button class="tab-trigger" onclick="window.location.href='../nomina/nomina.php'">Nómina</button>
                <button class="tab-trigger active" onclick="window.location.href='../banco/banco.php'">Banco</button>
                <button class="tab-trigger" onclick="window.location.href='../postulacion/postulacion.php'">Postulaciones</button>
                <button class="tab-trigger" onclick="window.location.href='../oferta_laboral/ofert_laboral.php'">Ofertas</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Candidatos</button>
                
            </div>

            <!-- Contenido de la pestaña Banco -->
            <div id="banco" class="tab-content active">
                <h2 class="section-title">Gestión de Bancos</h2>
                <p class="section-subtitle">Administración de aliados financieros</p>

                <div class="form-card">
                    <h3 class="form-title">Registro de Bancos</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="IDBanco">ID Banco:</label>
                            <input type="number" id="IDBanco">
                        </div>
                        <div class="form-group">
                            <label for="NombreB">Nombre del Banco:</label>
                            <input type="text" id="NombreB">
                        </div>
                        <div class="form-group">
                            <label for="DescripB">Descripción:</label>
                            <input type="text" id="DescripB">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="register-button">Registrar</button>
                    </div>
                </div>

                <h3 class="section-title-small">Listado General de Empresas</h3>
                <p class="section-subtitle-small">Información general de las empresas registradas</p>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID Banco</th>
                                <th>Nombre banco</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_banco']?></th>
                                                <th><?php  echo $row['Nombre_banco']?></th>
                                                <th><?php  echo $row['Descripcion_banco']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['ID_banco'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_banco'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Otras pestañas (ocultas en este archivo HTML específico) -->
            <div id="empresa" class="tab-content"></div>
            <div id="nomina" class="tab-content"></div>
            <div id="postulaciones" class="tab-content"></div>
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
