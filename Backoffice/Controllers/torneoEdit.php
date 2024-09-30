<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE torneo SET name = :name WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':name' => $_POST['name'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misTorneos.php');
?>