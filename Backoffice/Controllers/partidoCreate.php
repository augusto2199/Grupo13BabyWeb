<?php
require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO partidos (nombre, categoria, entrenador_id) VALUE (:nombre, :categoria, :entrenador_id)');
$stmt->execute([
    ':nombre' => $_POST['nombreEquipo'],
    ':categoria' => $_POST['categoriaEquipo'],
    ':entrenador_id' => $_POST['entrenadorEquipo'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>