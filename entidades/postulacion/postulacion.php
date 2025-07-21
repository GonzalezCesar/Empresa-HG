<?php 
    include("conexion.php");
    $con=conectar();

    // Consulta modificada para obtener los datos necesarios con JOINs según la estructura de empresa_hg
    $sql="SELECT p.ID_postulacion, p.Fecha_postulacion, p.Estado_postulacion,
                 of.titulo_oferta_laboral AS cargo, 
                 emp.Nombre_empresa AS empresa,
                 post.Nombre_postulante AS nombre_postulante,
                 post.Apellido_postulante AS apellido_postulante
          FROM postulacion p
          JOIN oferta_laboral of ON p.ID_oferta = of.ID_oferta_laboral
          JOIN empresa emp ON of.ID_empresa = emp.ID_empresa
          JOIN postulante post ON p.ID_postulante = post.ID_postulante
          ORDER BY p.Fecha_postulacion DESC";
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
    <style>
        .postulation-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        .postulation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        .postulation-title {
            color: #2c3e50;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .postulation-detail {
            margin: 5px 0;
            color: #555;
        }
        .status-badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 5px;
        }
        .status-pendiente { background-color: #f39c12; color: white; }
        .status-revisado { background-color: #3498db; color: white; }
        .status-entrevista { background-color: #9b59b6; color: white; }
        .status-contratado { background-color: #2ecc71; color: white; }
        .status-rechasado { background-color: #e74c3c; color: white; }
    </style>
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
                <button class="tab-trigger" onclick="window.location.href='../banco/banco.php'">Banco</button>
                <button class="tab-trigger active" onclick="window.location.href='../postulacion/postulacion.php'">Postulaciones</button>
                <button class="tab-trigger" onclick="window.location.href='../oferta_laboral/ofert_laboral.php'">Ofertas</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Candidatos</button>
            </div>

            <!-- Contenido de la pestaña Postulaciones -->
            <div id="postulaciones" class="tab-content active">
                <h2 style="margin-bottom: 20px;">Listado de Postulaciones</h2>
                
                <?php while($row = mysqli_fetch_array($query)): 
                    // Limpiar el estado de las comillas simples adicionales
                    $estado = str_replace("'", "", $row['Estado_postulacion']);
                    // Determinar la clase CSS según el estado
                    $estado_class = strtolower($estado);
                ?>
                    <div class="postulation-card">
                        <h3 class="postulation-title">
                            Postulación #<?php echo $row['ID_postulacion']; ?>
                            <span class="status-badge status-<?php echo $estado_class; ?>">
                                <?php echo $estado; ?>
                            </span>
                        </h3>
                        <p class="postulation-detail"><strong>Candidato:</strong> <?php echo $row['nombre_postulante'] . ' ' . $row['apellido_postulante']; ?></p>
                        <p class="postulation-detail"><strong>Cargo:</strong> <?php echo $row['cargo']; ?></p>
                        <p class="postulation-detail"><strong>Empresa:</strong> <?php echo $row['empresa']; ?></p>
                        <p class="postulation-detail"><strong>Fecha:</strong> <?php echo date('d/m/Y H:i', strtotime($row['Fecha_postulacion'])); ?></p>
                        <div class="action-buttons" style="margin-top: 10px;">
                            <a href="detalle_postulacion.php?id=<?php echo $row['ID_postulacion']; ?>" class="btn btn-sm btn-info">Ver Detalles</a>
                            <a href="editar_postulacion.php?id=<?php echo $row['ID_postulacion']; ?>" class="btn btn-sm btn-warning">Editar</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                
                <?php if(mysqli_num_rows($query) == 0): ?>
                    <div class="alert alert-info" style="margin-top: 20px;">
                        No hay postulaciones registradas en este momento.
                    </div>
                <?php endif; ?>
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
