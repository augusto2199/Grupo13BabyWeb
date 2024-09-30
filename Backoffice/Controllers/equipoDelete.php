<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM equipo WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misEquipos.php');
?>