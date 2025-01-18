<?php
session_start();
include('functions.php');

// Verificar si ya hay una sesión activa, redirigir al usuario a la página principal
if (isset($_SESSION['user_id'])) {
    header("Location: main.php");
    exit();
}

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];  // Capturamos el nombre
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (registerUser($nombre, $email, $password)) {
        header('Location: index.php');
        exit();
    } else {
        $error = "Hubo un error al registrar el usuario. Intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="css/autenticacion.css">
</head>
<body>
    <section class="formulario-crearcuenta">
        <h1>Pulse Runners Club©</h1>
        <h2>Registrarse</h2>

        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>

        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" required><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="registrarse" value="Registrarse">
        </form>

        <a href="index.php">¡Ya tengo una cuenta!</a>
    </section>
</body>
</html>
