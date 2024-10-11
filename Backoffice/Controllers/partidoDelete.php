<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM partidos WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idEquipo'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>