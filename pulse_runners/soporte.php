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
    PULSE RUNNERS CLUB-SOPORTE
  </H2>
  <p>
    Contacto:

Para consultas generales, preguntas o soporte relacionado con nuestro sitio web, puedes ponerte en contacto con nuestro equipo a través del siguiente correo electrónico: <p id="correo_pagina">pulserunnersinfo@gmail.com</p>


IMPORTANTE: <br>

•Si no recibes respuesta en un plazo de 48 horas desde que enviaste tu mensaje al correo principal de la web, por favor, revisa el tiempo que ha pasado desde tu primer contacto. En caso de no haber esperado al menos 2 días, te pedimos paciencia mientras procesamos tu solicitud. <br><br>
•En situaciones donde se requiera una atención más urgente, o si han pasado más de 48 horas sin respuesta, el equipo de apoyo revisará el caso y te contactará lo antes posible. <br><br>
Gracias por tu comprensión y por formar parte de nuestra comunidad. ¡Esperamos poder ayudarte pronto! <br><br><br>
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