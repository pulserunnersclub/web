<?php
// Configuración de la base de datos
$host = "localhost";
$dbname = "mydb";
$username = "root"; // Cambia según tus credenciales
$password = ""; // Cambia según tus credenciales

// Crear la conexión
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
