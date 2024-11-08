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
            // Verificar la contraseña solo si el rol no es administrador
            if ($user['roles_id'] == 1) {
                // Para el administrador, permitir la contraseña en texto claro
                if ($password === $user['password']) {
                    // Si la contraseña es correcta para el admin
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];

                    header('Location: ../indexAdmin.php');
                    exit();
                }
            } else {
                // Para otros usuarios, verificar la contraseña cifrada
                $passwordCheck = password_verify($password, $user['password']);

                if ($passwordCheck) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];

                    if ($user['roles_id'] == 2) {
                        // USUARIO
                        header('Location: ../Partials/ingresoUsuarios.php');
                        exit();
                    } else {
                        // Otros roles
                        header('Location: ../paginaPrincipal.php');
                        exit();
                    }
                }
            }

            // Si la contraseña es incorrecta
            $_SESSION['login_error'] = 'Correo o contraseña incorrectos';
            header('Location: ../Partials/ERROR.php');
            exit();
        } else {
            // Si el correo no existe
            $_SESSION['login_error'] = 'Correo o contraseña incorrectos';
            header('Location: ../Partials/login.php');
            exit();
        }
    } catch (PDOException $e) {
        // En caso de error de conexión a la base de datos
        $_SESSION['login_error'] = 'Error al conectar con la base de datos: ' . $e->getMessage();
        header('Location: ../Partials/ERROR.php');
        exit();
    }
}
?>
