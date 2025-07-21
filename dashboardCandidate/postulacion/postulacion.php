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
    <title>Dashboard-Candidate (Postulaciones)</title>
    <link rel="stylesheet" href="postulaciones.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <i class="fas fa-user-circle header-icon"></i>
            <div>
                <h1 class="header-title">Panel Candidato</h1>
                <p class="header-subtitle">Maria Gonzalez - Ingeniera en Sistemas</p>
            </div>
        </div>
        <div class="header-right">
            <span class="user-info">maria.gonzalez@email.com</span>
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
                    <h2 class="card-title">Postulaciones Activas</h2>
                    <i class="fas fa-file-alt card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">2</div>
                    <p class="card-description">de 2 totales</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Ofertas Disponibles</h2>
                    <i class="fas fa-search card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">3</div>
                    <p class="card-description">en tu área de interés</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Perfil Completado</h2>
                    <i class="fas fa-user card-icon"></i>
                </div>
                <div class="card-content">
                    <div class="card-value">85%</div>
                    <p class="card-description">añade más experiencias</p>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <div class="tabs-navigation">
                <button class="tab-trigger" onclick="window.location.href='dashboard-candidate-ofertas.html'">Ofertas laborales</button>
                <button class="tab-trigger active" onclick="window.location.href='dashboard-candidate-postulaciones.html'">Postulaciones</button>
                <button class="tab-trigger" onclick="window.location.href='dashboard-candidate-mi-perfil.html'">Mi Perfil</button>
            </div>

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

