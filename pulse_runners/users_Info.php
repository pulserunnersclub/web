<?php
include('functions.php');

$error = null;

// Verificar si hay una sesión activa
if (checkSession()) {
    $user_id = $_SESSION['user_id'];

    // Obtener el correo del usuario
    $email = getUserEmail($user_id);
    $nombre = getUserName($user_id);
} else {
    // Si no hay sesión activa, redirigir a la página de login
    header('Location: index.php');
    exit();
}

// Procesar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password)) {
        header('Location: main.php');
        exit();
    } else {
        $error = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Usuario - PulseRunnersClub</title>
    <link rel="stylesheet" href="css/styles_infouser.css">
    <link rel="icon" href="imgs/Sin título (14).png">
</head>
<body oncontextmenu="return false">
    <div class="usuario_Info">
        <img src="imgs/usuario (1).png" alt="usuario_Porfile_Image">
        <p id="correo">Bienvenido/a, <?php echo htmlspecialchars($nombre); ?></p>
        <p id="correo">Tu sesión activa, <?php echo htmlspecialchars($email); ?></p>
        <hr>
        <!-- Cerrar sesión será gestionado desde FirebaseConnect -->
        <a href="logout.php"><button id="cerrarSesionBtn">Cerrar sesión</button></a>
        <a class="inicio_hipervinculo" href="main.php">
            <button>Ir al menú</button>
        </a>
    </div>

    <!-- Importación de los scripts -->
</body>
</html>