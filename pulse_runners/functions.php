<?php
function getDBConnection() {
    $host = 'sql102.infinityfree.com';
    $db = 'if0_38131066_pulserunnersclub';
    $user = 'if0_38131066';  // Usualmente 'root' en XAMPP
    $pass = 'r3ba3NQ4eT';      // La contraseña está vacía por defecto en XAMPP

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }
}

// Función para verificar si la sesión está activa
function checkSession() {
    session_start();
    return isset($_SESSION['user_id']); // Verifica si el 'user_id' está presente en la sesión
}

// Función para registrar un usuario con nombre, correo y contraseña
function registerUser($nombre, $email, $password) {
    $pdo = getDBConnection();
    
    // Verificar si el correo ya existe
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        return false;  // El correo ya está registrado
    }
    
    // Encriptar la contraseña
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario (incluyendo el nombre)
    $stmt = $pdo->prepare("INSERT INTO users (nombre, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $email, $hashedPassword]);
    return true;
}

// Función para iniciar sesión
function loginUser($email, $password) {
    $pdo = getDBConnection();
    
    // Buscar el usuario por correo
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() == 0) {
        return false;  // Usuario no encontrado
    }
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Verificar la contraseña
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];  // Guardar el ID del usuario en la sesión
        return true;
    }
    
    return false;  // Contraseña incorrecta
}

// Función para obtener el correo del usuario usando su ID
function getUserEmail($user_id) {
    $pdo = getDBConnection();
    
    // Obtener el correo del usuario usando su ID
    $stmt = $pdo->prepare("SELECT email FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $user ? $user['email'] : null;
}

// Función para obtener el nombre del usuario usando su ID
function getUserName($user_id) {
    $pdo = getDBConnection();
    
    // Obtener el nombre del usuario usando su ID
    $stmt = $pdo->prepare("SELECT nombre FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $user ? $user['nombre'] : null;
}
?>
