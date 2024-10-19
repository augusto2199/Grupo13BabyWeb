<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM partidos WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idPartido'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>