<?php
// Mostrar errores (solo para desarrollo, desactivar en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $pdo = new PDO('mysql:host=localhost;dbname=babyfutbol;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombreUsuario'] ?? '');
    $apellido = trim($_POST['apellidoUsuario'] ?? '');
    $email = trim($_POST['emailUsuario'] ?? '');
    $password = password_hash(trim($_POST['passwordUsuario'] ?? ''), PASSWORD_BCRYPT);
    $edad = (int)($_POST['edadUsuario'] ?? null);

    if ($nombre && $apellido && $email && $password && $edad) {
        try {
            $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, email, password, edad, roles_id) VALUES (:nombre, :apellido, :email, :password, :edad, 2)');
            $stmt->execute([
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':email' => $email,
                ':password' => $password,
                ':edad' => $edad,
            ]);

            echo 'success'; // Respuesta en caso de éxito
        } catch (PDOException $e) {
            echo "Error en la ejecución de la consulta: " . $e->getMessage();
        }
    } else {
        echo "Por favor, completa todos los campos obligatorios.";
    }
} else {
    echo "Método no permitido.";
}
?>
