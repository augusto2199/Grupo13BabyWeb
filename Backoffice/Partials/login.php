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
        $stmt = $pdo->prepare("SELECT id, email, password, roles_id FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si el usuario existe
        if ($user) {
            // Verificar si la contraseña es correcta
            $passwordCheck = password_verify($password, $user['password']);

            // Depurar: Muestra si la contraseña es correcta o no
            var_dump($passwordCheck); // Esto es solo para depurar. Deberías eliminarlo en producción.

            if ($passwordCheck) {
                // Si las credenciales son correctas, iniciar sesión y redirigir
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];

                // Dependiendo del rol, redirigir al panel correspondiente
                if ($user['roles_id'] == 1) {
                    // ADMIN
                    header('Location: ../indexAdmin.php');
                    exit();
                } else if ($user['roles_id'] == 2) {
                    // USUARIO
                    header('Location: ../Partials/ingresoUsuarios.php');
                    exit();
                } else {
                    // Otros roles
                    header('Location: ../paginaPrincipal.php'); 
                    exit();
                }
            } else {
                // Si la contraseña es incorrecta
                $_SESSION['login_error'] = 'Correo o contraseña incorrectos';

                // Destruir la sesión al fallar el login
                session_unset();  // Limpiar las variables de sesión
                session_destroy();  // Destruir la sesión completamente

                header('Location: ');
                exit();
            }
        } else {
            // Si el correo no existe
            $_SESSION['login_error'] = 'Correo o contraseña incorrectos';

            // Destruir la sesión al no encontrar el correo
            session_unset();  // Limpiar las variables de sesión
            session_destroy();  // Destruir la sesión completamente

            header('Location: ');
            exit();
        }
    } catch (PDOException $e) {
        // En caso de error de conexión a la base de datos
        $_SESSION['login_error'] = 'Error al conectar con la base de datos: ' . $e->getMessage();
        
        // Destruir la sesión en caso de error
        session_unset();  // Limpiar las variables de sesión
        session_destroy();  // Destruir la sesión completamente

        header('Location: ');
        exit();
    }
}
