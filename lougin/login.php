<?php
include 'conexion.php'; // Incluimos el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $conexion = conectar(); // Establecemos la conexión usando tu función

    if ($conexion) {
        $consulta = "SELECT * FROM user WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            // ¡Importante! La contraseña en la base de datos debería estar hasheada
            if ($contrasena == $fila["contrasena"]) {
                echo '<script language="javascript">alert("¡Inicio de sesión exitoso!"); window.location.href = "http://localhost/Consejo%20Comunal/principal_pag/paginaMain.php";</script>';
                exit();
            } else {
                echo '<script language="javascript">alert("Contraseña incorrecta."); window.location.href = "login.php";</script>';
                exit();
            }
        } else {
            echo '<script language="javascript">alert("El usuario no existe."); window.location.href = "login.php";</script>';
            exit();
        }

        mysqli_close($conexion); // Cerramos la conexión
    } else {
        echo '<script language="javascript">alert("Error al conectar a la base de datos."); window.location.href = "login.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Iniciar sesión</title>
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <div class="icon-header">
                <i class="fas fa-building form-icon"></i>
            </div>
            <h1 class="form-title">Iniciar Sesión</h1>
            <p class="form-subtitle">Accede a tu cuenta de Hiring Group</p>

            <form class="login-form">
                <div class="form-group">
                    <label for="tipo-usuario">Tipo de Usuario</label>
                    <select id="tipo-usuario">
                        <option>Selecciona tu tipo de usuario</option>
                        <option>Administrador</option>
                        <option>Empresa</option>
                        <option>Postulante</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="correo-electronico">Correo Electrónico</label>
                    <input type="email" id="correo-electronico" placeholder="tu@email.com">
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena">
                </div>

                <button type="submit" class="submit-button">Iniciar Sesión</button>
            </form>

            <p class="register-link">¿No tienes cuenta? <a href="#">Regístrate como candidato</a></p>
        </div>
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
    <h1>Iniciar Sesión</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="username">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </div>
        <br>
        <div class="username">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
        </div>
        <br>
        <button type="submit">Iniciar</button>
    </form>
    </div>
</body>
</html> -->