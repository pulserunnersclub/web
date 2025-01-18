<?php
include('functions.php');

// Verificar si hay una sesión activa, si no, redirigir a la página de login
if (!checkSession()) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PULSE RUNNERS CLUB | NOVEDADES</title>
    <link rel="stylesheet" href="css/styles_novedades.css">
    <link rel="icon" href="imgs/Sin título (14).png">
</head>
<body oncontextmenu="return false">
    <!-- Contenido Menu -->
    <header>
        <div class="logo">
        <img src="imgs/PTR2.png" alt="imagen">
        <h2 class="nombre empresa">
            PULSE RUNNERS CLUB
        </h2>
        </div>
            <nav>
            <a href="main.php">INICIO</a>
            <a href="novedades.php">NOVEDADES</a>
            <a href="soporte.php">SOPORTE</a>
            <a href="users_Info.php">USUARIO</a>
        </nav>
    </header>
        
    <!-- Contenedor informacion -->
    <div id="novedades">
        <H2>
        <br>
        PULSE RUNNERS CLUB-NOVEDADES
    </H2>
    <p>
        <p id="novedades_p">Novedades:</p>
        Nos complace anunciar que actualmente estamos desarrollando un sistema avanzado de inicio de sesión y gestión de cuentas. <br> Este nuevo sistema permitirá a nuestros usuarios almacenar de manera segura sus datos y preferencias relacionados con nuestras prendas. <br> Este paso es fundamental para ofrecer una experiencia personalizada y práctica, facilitando el acceso a sus configuraciones y registros en cualquier momento. <br><br>
        <br>
    </div>
    <!-- Pie de pagina -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p class="footer-top">Copyright &copy; 2025 PULSE RUNNERS CLUB.</p>
            </div>
        </div>
        <script src="noclick.js"></script>
</footer>
</body>
</html>