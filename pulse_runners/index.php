<?php
include('functions.php');


// Verificar si ya hay una sesión activa, si es así, redirigir al usuario a la página principal
if (checkSession()) {
    header("Location: main.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password)) {
        // Si el login es exitoso, redirigir al usuario a la página principal
        header("Location: main.php");
        exit();
    } else {
        $error = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/autenticacion.css">
</head>
<body>
    <section class="formulario-iniciosesion">
        <h1>Pulse Runners Club©</h1>
        <h2>Iniciar sesión</h2>

        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>

        <form method="post">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="login" value="Iniciar sesión">
        </form>

        <a href="register.php">¿No tienes cuenta? ¡Regístrate aquí!</a>
    </section>
</body>
</html>
