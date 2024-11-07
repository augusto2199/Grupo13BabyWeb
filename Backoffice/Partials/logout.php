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

// Asegurarse de que no queden datos de la sesión
$_SESSION = array();

// Redirigir a la página principal (index.php en la raíz)
header('Location: ../../index.php');  // Cambia la ruta si es necesario
exit();
?>
