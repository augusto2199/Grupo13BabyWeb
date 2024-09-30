<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO equipo (nombre, categoria) VALUE (:nombre, :categoria)');
$stmt->execute([
    ':nombre' => $_POST['nombre'],
    ':categoria' => $_POST['categoria'], 
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misEquipos.php');
?>