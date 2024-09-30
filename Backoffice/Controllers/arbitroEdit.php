<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('UPDATE arbitro SET nombre = :nombre, apellido = :apellido, edad = :edad, 
                       experiencia = :experiencia, email = :email, password = :password WHERE id = :id');

$stmt->execute([
    ':id' => $_POST['id'],  
    ':nombre' => $_POST['nombre'],
    ':apellido' => $_POST['apellido'],
    ':edad' => $_POST['edad'],
    ':experiencia' => $_POST['experiencia'],
    ':email' => $_POST['email'],
    ':password' => $_POST['password']
]);

header('location: /../../GRUPO13BABYWEB/Backoffice/Pages/misArbitros.php');
?>
