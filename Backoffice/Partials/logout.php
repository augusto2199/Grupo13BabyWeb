<?php
session_start();  // Iniciar la sesión

// Destruir todas las variables de sesión
session_unset();  

// Destruir la sesión
session_destroy();  

// Eliminar la cookie de sesión (si se usa)
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');  // Establecer la cookie con una expiración pasada
}

// Redirigir a la página principal o a la página de login
header('Location: index.php');
exit();
?>
