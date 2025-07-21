<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Cliente Empresa</title>
    <link rel="stylesheet" href="register-empresa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <div class="icon-header">
                <i class="fas fa-file-alt form-icon"></i>
            </div>
            <h1 class="form-title">Registro de Empresa</h1>
            <p class="form-subtitle">Registra tu empresa para acceder a nuestros servicios de reclutamiento</p>

            <form class="form-grid">
                <div class="form-group full-width">
                    <label for="nombre-empresa">Nombre de la Empresa</label>
                    <input type="text" id="nombre-empresa" placeholder="Nombre completo de la empresa">
                </div>
                <div class="form-group">
                    <label for="rif">RIF</label>
                    <input type="text" id="rif" placeholder="J-12345678-9">
                </div>
                <div class="form-group">
                    <label for="sector-empresarial">Sector Empresarial</label>
                    <select id="sector-empresarial">
                        <option>Selecciona el sector</option>
                        <option>Tecnología</option>
                        <option>Finanzas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" id="cargo" placeholder="Gerente de RRHH">
                </div>
                <div class="form-group full-width">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" placeholder="Dirección completa de la empresa">
                </div>
                <div class="form-group">
                    <label for="persona-contacto">Persona de Contacto</label>
                    <input type="text" id="persona-contacto" placeholder="Nombre del responsable">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" placeholder="+58 212-1234567">
                </div>
                <div class="form-group full-width">
                    <label for="email-contacto">Email de Contacto</label>
                    <input type="email" id="email-contacto" placeholder="contacto@empresa.com">
                </div>
                <div class="form-group full-width">
                    <label for="descripcion-empresa">Descripción de la Empresa</label>
                    <textarea id="descripcion-empresa" rows="4" placeholder="Breve descripción de la empresa, sus actividades y cultura organizacional..."></textarea>
                </div>

                <button type="submit" class="submit-button full-width">Enviar Solicitud de Registro</button>
            </form>

            <p class="login-link">¿Ya tienes cuenta? <a href="#">Iniciar sesión</a></p>
        </div>
    </div>
</body>
</html>
