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
    <title>PULSE RUNNERS CLUB | SOPORTE</title>
    <link rel="stylesheet" href="css/styles_soporte.css">
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
  <div id="soporte">
    <H2>
      <br>
    PULSE RUNNERS CLUB-TERMINOS Y CONDICIONES
  </H2>
  <p>
  

Última actualización: [15/01/2025] <br>

Al acceder y usar el sitio web de PulseRunnersClub, aceptas estos términos y condiciones. Si no estás de acuerdo, por favor no uses nuestro sitio.

Nos reservamos el derecho de cambiar los productos, precios y cualquier otra información en el sitio en cualquier momento.

Al realizar una compra, te comprometes a proporcionar información correcta y a pagar el precio total indicado. Si no se puede procesar tu pago, no podremos completar tu pedido.

Todos los contenidos de nuestro sitio, incluidos textos, imágenes y logotipos, son propiedad de PulseRunnersClub y están protegidos por derechos de autor. No se permite su uso sin autorización.

Nos reservamos el derecho de modificar estos términos en cualquier momento. Cualquier cambio se publicará en esta página.

Si tienes alguna pregunta, puedes contactarnos a través de [pulserunnersinfo@gmail.com].
  </p>
</div>
<footer>
  <!-- Pie de pagina -->
  <div class="footer-container">
      <div class="footer-info">
          <p class="footer-top">Copyright &copy; 2025 PULSE RUNNERS CLUB.</p>
      </div>
  </div>
</footer>
<script src="noclick.js"></script>
</body>
</html>