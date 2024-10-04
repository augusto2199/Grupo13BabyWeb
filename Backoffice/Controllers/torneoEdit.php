<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE torneos SET nombre = :nombre WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombre'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>