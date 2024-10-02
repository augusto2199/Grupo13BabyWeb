<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO torneo (nombre) VALUE (:nombre)');
$stmt->execute([
    ':nombre' => $_POST['nombre'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misTorneos.php');
?>