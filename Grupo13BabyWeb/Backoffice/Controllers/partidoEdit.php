<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE partidos SET nombre = :nombre WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombre'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>