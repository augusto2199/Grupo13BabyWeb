<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE equipo SET nombre = :nombre, categoria = :categoria WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['id'],
    ':nombre' => $_POST['nombre'],
    ':categoria' => $_POST['categoria'],  
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misJugadores.php');
