<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM administrador";
    $query=mysqli_query($con,$sql);
?>
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
                <button class="tab-trigger active" onclick="window.location.href='administrator.php'">Administrador</button>
                <button class="tab-trigger" onclick="window.location.href='entidades/hiring-group/hiring-group.php'">Hiring-Group</button>
                <button class="tab-trigger" onclick="window.location.href='../contratado/contratado.php'">Contratado</button>
                <button class="tab-trigger" onclick="window.location.href='../postulante/postulante.php'">Postulante</button>
                <button class="tab-trigger" onclick="window.location.href='entidades/empresa/empresa.php'">Empresa</button>
            </div>

            <div class="tab-content active">
                <h2 class="section-title">Gestión de Administradores</h2>
                <p class="section-subtitle">Administra los usuarios administradores del Sistema</p>

                <div class="form-card">
                    <h3 class="form-title">Registro de Administradores</h3>
                    <form action="insertar.php" method="POST">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="rol">Rol:</label>
                                <select id="rol" name="rol" required>
                                    <option value="admin">Administrador</option>
                                    <option value="superadmin">Super Administrador</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="register-button">Registrar</button>
                        </div>
                    </form>
                </div>

                <h3 class="section-title-small">Listado de Administradores</h3>
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
                            <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ID_admin']?></th>
                                                <th><?php  echo $row['ID_usuario']?></th>
                                                <th><?php  echo $row['Cedula_admin']?></th>
                                                <th><?php  echo $row['Nombres_admin']?></th>
                                                <th><?php  echo $row['Apellidos_admin']?></th>
                                                <th><?php  echo $row['Telefono_admin']?></th>
                                                <th><?php  echo $row['Codigo_Especial']?></th>
                                                <th><?php  echo $row['Crear_usuario_admin']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['ID_admin'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ID_admin'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>