<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO arbitro (nombre, apellido, edad, experiencia, email, password) 
                       VALUES (:nombre, :apellido, :edad, :experiencia, :email, :password)');
$stmt->execute([
    ':nombre' => $_POST['nombre'],
    ':apellido' => $_POST['apellido'],  // Cambiado ':categoria' a ':apellido'
    ':edad' => $_POST['edad'],
    ':experiencia' => $_POST['experiencia'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misArbitros.php');
?>
