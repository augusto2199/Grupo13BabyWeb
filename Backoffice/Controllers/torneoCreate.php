<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO torneo (name) VALUE (:name)');
$stmt->execute([
    ':name' => $_POST['name'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misTorneos.php');
?>