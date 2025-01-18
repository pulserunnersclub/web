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
    <title>PULSE RUNNERS CLUB</title>
    <link rel="stylesheet" href="css/styles_index.css">
    <link rel="icon" href="imgs/Sin título (14).png">
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
    emailjs.init('hmi15nNk38w32Npwx')
</script>
</head>
<body oncontextmenu="return false">
    <!-- Contenido Menu -->
    <header>
        <div class="logo">
            <img src="imgs/PTR2.png" alt="imagen">
            <h2 class="nombre empresa">
                <p id="titulo">PULSE RUNNERS CLUB</p>
            </h2>
        </div>
        <nav>
            <a href="main.php">INICIO</a>
            <a href="novedades.php">NOVEDADES</a>
            <a href="soporte.php">SOPORTE</a>
            <a href="users_Info.php">USUARIO</a>
        </nav>
    </header>
    <!-- Productos -->
    <div class="container-items">
        <!-- Producto 1 -->
        <div class="product-item">
            <a href="detallespre1.php">
            <img src="imgs/Training Club(camiseta)delante.png" alt="Camiseta Pulse Runners">
            </a>
            <div class="product-info">
                <h3>Camiseta Training Club</h3>
                <p>Precio: <strong>₡00.000</strong></p>
                <button class="btn-agregar" data-nombre="Camiseta Training Club." data-precio="00.000">
                    Añadir al carrito
                </button>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="product-item">
            <a href="detallespre2.php">
            <img src="imgs/Untitled Project (6).png" alt="Sudadera Pulse Runners en color negro.">
            </a>
            <div class="product-info">
                <h3>Sudadera Training Club Negra</h3>
                <p>Precio: <strong>₡00.000</strong></p>
                <button class="btn-agregar" data-nombre="Sudadera Training Club Negra." data-precio="00.000">
                    Añadir al carrito
                </button>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Pie de pagina -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p class="footer-top">Copyright &copy; 2025 PULSE RUNNERS CLUB. <a href="terminos y condiciones.php">Terminos y condiciones.</a>
            </div>
    </footer>
<script src="carrito2.js"></script>
</body>
</html>
