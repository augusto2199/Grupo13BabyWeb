<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE equipos SET nombre = :nombre, categoria = :categoria, entrenador_id = :entrenador_id WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombreEquipo'],
    ':categoria' => $_POST['categoriaEquipo'],
    ':entrenador_id' => $_POST['entrenadorEquipo'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>