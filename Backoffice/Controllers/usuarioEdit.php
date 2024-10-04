<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, password = :password, edad = :edad WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idUsuario'],
    ':nombre' => $_POST['nombreUsuario'],
    ':apellido' => $_POST['apellidoUsuario'],
    ':email' => $_POST['emailUsuario'],
    ':password' => $_POST['passwordUsuario'],
    ':edad' => $_POST['edadUsuario'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>
