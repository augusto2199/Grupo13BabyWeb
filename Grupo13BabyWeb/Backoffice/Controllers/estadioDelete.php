<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM estadios WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idEstadio'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>