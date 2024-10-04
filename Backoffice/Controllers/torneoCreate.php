<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO torneos (nombre) VALUE (:nombre)');
$stmt->execute([
    ':nombre' => $_POST['nombreTorneo'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>