<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO jugador (nombre, apellido, edad, posicion, numero_camiseta, equipo) VALUES (:nombre, :apellido, :edad, :posicion, :numero_camiseta, :equipo)');

$stmt->execute([
    ':nombre' => $_POST['nombre'],
    ':apellido' => $_POST['apellido'],
    ':edad' => $_POST['edad'],
    ':posicion' => $_POST['posicion'],
    ':numero_camiseta' => $_POST['numeroCamiseta'], // Cambio aquí para coincidir con la consulta
    ':equipo' => $_POST['equipo'],
]);

header('Location: /../../GRUPO13BABYWEB/Backoffice/Pages/misJugadores.php');
exit();
?>
