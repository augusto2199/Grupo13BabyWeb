<?php
require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO estadios (nombre, ubicacion, capacidad) VALUE (:nombre, :ubicacion, :capacidad)');
$stmt->execute([
    ':nombre' => $_POST['nombreEstadio'],
    ':ubicacion' => $_POST['ubicacionEstadio'],
    ':capacidad' => $_POST['capacidadEstadio'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>