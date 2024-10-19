<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE estadios SET nombre = :nombre, ubicacion = :ubicacion, capacidad = :capacidad WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombreEstadio'],
    ':ubicacion' => $_POST['ubicacionEstadio'],
    ':capacidad' => $_POST['capacidadEstadio'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>