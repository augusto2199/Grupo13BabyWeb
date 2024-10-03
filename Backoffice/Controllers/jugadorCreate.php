<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO jugador (nombre, apellido, edad, posicion, numero_camiseta, equipo_id) 
VALUES (:nombre, :apellido, :edad, :posicion, :numero_camiseta, :equipo_id)');

$stmt->execute([
    ':nombre' => $_POST['nombre'],
    ':apellido' => $_POST['apellido'],
    ':edad' => $_POST['edad'],
    ':posicion' => $_POST['posicion'],
    ':numero_camiseta' => $_POST['numeroCamiseta'],  
    ':equipo_id' => $_POST['equipo'], 
]);

header('Location: /../../GRUPO13BABYWEB/Backoffice/Pages/misJugadores.php');
exit();

?>
