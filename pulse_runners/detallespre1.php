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
    <title>Camiseta Pulse Runner Club & Trainig Club</title>
    <link rel="stylesheet" href="css/styles_detalles.css">
    <link rel="icon" href="imgs/Sin título (14).png">
</head>
<body oncontextmenu="return false">
    <!-- Contenido Menu -->
    <header>
        <div class="logo">
            <img src="imgs/PTR2.png" alt="imagen">
            <h2 class="nombre empresa">
                <p class="TITULO" 
            </h2>
        </div>
        <nav>
        <a href="main.php">INICIO</a>
            <a href="novedades.php">NOVEDADES</a>
            <a href="soporte.php">SOPORTE</a>
            <a href="users_Info.php">USUARIO</a>
        </nav>
    </header>

    <!-- Contenedor de imagesnes -->
    <div class="detalle-prenda">
        <div class="imagenes-prenda">
            <img src="imgs/Training Club(camiseta)delante.png" alt="Camiseta - Vista Frontal">
            <img src="imgs/Training Club(camiseta)delante (1).png" alt="Camiseta - Vista Trasera">
        </div>
    <!-- Contenedor de informacion -->
        <div class="descripcion-prenda">
            <h2>Camiseta Training Club</h2>
            <p>Precio: <strong>₡00.000</strong></p>
            <p>Descripción: Camiseta ligera y transpirable ideal para actividades deportivas con logos de Training Club y Pulse Runners Club en color rosa.</p>
            <p>Materiales: 100% Poliéster de alta calidadad.</p>
            <p class="disponibilidad">En stock</p>
        </div>
    </div>
    <!-- Pie de pagina -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p class="footer-top">Copyright &copy; 2025 PULSE RUNNERS CLUB.</p></a>
            </div>
<script src="noclick.js"></script>
</footer>
</body>
</html>