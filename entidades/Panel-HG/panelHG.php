<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
        <!-- <div class="summary-cards">
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
        </div> -->

        <div class="dashboard-section">
            <div class="tabs-navigation">   
                <button class="tab-trigger active" onclick="window.location.href='../empresaHG/empresa.php'">Empresa</button>
                <button class="tab-trigger" onclick="window.location.href='../nomina/nomina.php'">Nómina</button>
                <button class="tab-trigger" onclick="window.location.href='../banco/banco.php'">Banco</button>
                <button class="tab-trigger" onclick="window.location.href='../postulacion/postulacion.php'">Postulaciones</button>
                <button class="tab-trigger" onclick="window.location.href='../oferta_laboral/ofert_laboral.php'">Ofertas</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Candidatos</button>
            </div>

            <div id="administrador" class="tab-content active">
                <h2 class="section-title">Gestión de Usuarios</h2>
                <p class="section-subtitle">Administra todos los usuarios del Sistema</p>

                <div class="form-card">
                    <h3 class="form-title">Hacer inputs de la tabla ADMINISTRADOR para su registro</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="admin-input1">Input:</label>
                            <input type="text" id="admin-input1">
                        </div>
                        <div class="form-group">
                            <label for="admin-input2">Input:</label>
                            <input type="text" id="admin-input2">
                        </div>
                        <div class="form-group">
                            <label for="admin-input3">Input:</label>
                            <input type="text" id="admin-input3">
                        </div>
                        <div class="form-group">
                            <label for="admin-input4">Input:</label>
                            <input type="text" id="admin-input4">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="register-button">Registrar</button>
                    </div>
                </div>

                <p class="table-info">Cambiarle los atributos a las tablas en pro de los registros</p>

                <h3 class="section-title-small">Listado General de Usuarios</h3>
                <p class="section-subtitle-small">Información general de todos los usuarios del sistema</p>
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Último Acceso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Juan Pérez</td>
                                <td>juan@hiringgroup.com</td>
                                <td>Admin</td>
                                <td>Activo</td>
                                <td>2024-01-20</td>
                                <td class="actions-cell">
                                    <button class="action-button edit-button"><i class="fas fa-edit"></i></button>
                                    <button class="action-button delete-button"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>María García</td>
                                <td>maria@techoop.com</td>
                                <td>Empresa</td>
                                <td>Activa</td>
                                <td>2024-01-19</td>
                                <td class="actions-cell">
                                    <button class="action-button edit-button"><i class="fas fa-edit"></i></button>
                                    <button class="action-button delete-button"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Carlos López</td>
                                <td>carlos@robot.com</td>
                                <td>Contratado</td>
                                <td>Activo</td>
                                <td>2024-01-25</td>
                                <td class="actions-cell">
                                    <button class="action-button edit-button"><i class="fas fa-edit"></i></button>
                                    <button class="action-button delete-button"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Las otras pestañas no tienen contenido aquí, ya que son archivos HTML separados -->
            <div id="hiring-group" class="tab-content"></div>
            <div id="contratado" class="tab-content"></div>
            <div id="postulante" class="tab-content"></div>
            <div id="empresa" class="tab-content"></div>
            <div id="nomina" class="tab-content"></div>
            <div id="banco" class="tab-content"></div>
            <div id="postulaciones" class="tab-content"></div>
            <div id="ofertas" class="tab-content"></div>
            <div id="candidatos" class="tab-content"></div>
        </div>
    </main>
</body>
</html>
