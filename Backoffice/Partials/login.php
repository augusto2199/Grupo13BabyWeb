<?php
session_start();
require_once '../../Config/conn.php';  // Incluir la configuración de la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Establecer la conexión con la base de datos
        $pdo = new PDO('mysql:host=localhost;dbname=babyfutbol;charset=utf8', 'root', '');  // Cambiar las credenciales si es necesario
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consultar al usuario por su correo electrónico
        $stmt = $pdo->prepare("SELECT id, email, password FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Si las credenciales son correctas, iniciar sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Redirigir al panel de administración
            header('Location: ../indexAdmin.php');
            exit();
        } else {
            // Si las credenciales son incorrectas, mostrar mensaje de error
            $_SESSION['login_error'] = 'Correo o contraseña incorrectos';
            header('Location: ../indexAdmin.php');  // O la ruta donde está el modal
            exit();
        }
    } catch (PDOException $e) {
        // En caso de error de conexión a la base de datos
        $_SESSION['login_error'] = 'Error al conectar con la base de datos: ' . $e->getMessage();
        header('Location: ../indexAdmin.php');
        exit();
    }
}
?>
