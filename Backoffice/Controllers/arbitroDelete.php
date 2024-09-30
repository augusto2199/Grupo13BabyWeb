<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM arbitro WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misArbitros.php');
?>