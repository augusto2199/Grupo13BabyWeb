<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM torneo WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
]);

header('location: /../../Backoffice/indexAdmin.php');
?>