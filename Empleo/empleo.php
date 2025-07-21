<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Cliente Postulante</title>
    <link rel="stylesheet" href="empleo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <div class="icon-header">
                <i class="fas fa-user-circle form-icon"></i>
            </div>
            <h1 class="form-title">Registro de Candidato</h1>
            <p class="form-subtitle">Crea tu perfil profesional para encontrar oportunidades laborales</p>

            <form class="form-sections">
                <div class="section">
                    <h2 class="section-heading">Información Personal</h2>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" placeholder="Tu apellido">
                        </div>
                        <div class="form-group full-width">
                            <label for="correo-electronico">Correo Electrónico</label>
                            <input type="email" id="correo-electronico" placeholder="tu@email.com">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono" placeholder="+58 412-1234567">
                        </div>
                        <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena">
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h2 class="section-heading">Información Académica</h2>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="profesion">Profesión</label>
                            <select id="profesion">
                                <option>Selecciona tu profesión</option>
                                <option>Ingeniero de Software</option>
                                <option>Diseñador Gráfico</option>
                            </select>
                        </div>
                        <div class="form-group full-width">
                            <label for="universidad">Universidad de Egreso</label>
                            <input type="text" id="universidad" placeholder="Nombre de tu universidad">
                        </div>
                        <div class="form-group full-width">
                            <label for="ano-graduacion">Año de Graduación</label>
                            <select id="ano-graduacion">
                                <option>Selecciona el año</option>
                                <option>2023</option>
                                <option>2022</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h2 class="section-heading">Experiencia Laboral</h2>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label for="empresa">Empresa</label>
                            <input type="text" id="empresa" placeholder="Nombre de la empresa">
                        </div>
                        <div class="form-group full-width">
                            <label for="cargo-laboral">Cargo</label>
                            <input type="text" id="cargo-laboral" placeholder="Tu cargo en la empresa">
                        </div>
                        <div class="form-group">
                            <label for="fecha-inicio">Fecha de Inicio</label>
                            <input type="text" id="fecha-inicio" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group">
                            <label for="fecha-fin">Fecha de Fin</label>
                            <input type="text" id="fecha-fin" placeholder="dd/mm/aaaa">
                        </div>
                        <div class="form-group full-width">
                            <label for="descripcion-funciones">Descripción de Funciones</label>
                            <textarea id="descripcion-funciones" rows="4" placeholder="Describe brevemente tus funciones y logros..."></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-button full-width">Completar Registro</button>
            </form>

            <p class="login-link">¿Ya tienes cuenta? <a href="#">Iniciar sesión</a></p>
        </div>
    </div>
</body>
</html>
