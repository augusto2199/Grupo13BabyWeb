<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM equipos WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idEquipo'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>