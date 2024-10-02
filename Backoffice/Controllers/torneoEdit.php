<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE torneo SET nombre = :nombre WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombre'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misTorneos.php');
?>