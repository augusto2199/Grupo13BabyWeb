<?php

require __DIR__ . '/../../Config/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $equipo_id = $_POST['equipo'];

     $stmt = $pdo->prepare('SELECT COUNT(*) FROM equipo WHERE id = :equipo_id');
    $stmt->execute([':equipo_id' => $equipo_id]);
    $exists = $stmt->fetchColumn();

    if (!$exists) {
        die("Error: El ID del equipo no existe.");
    }

      $stmt = $pdo->prepare('UPDATE jugador SET nombre = :nombre, apellido = :apellido, edad = :edad, posicion = :posicion, numero_camiseta = :numero_camiseta, equipo_id = :equipo_id WHERE id = :id');

      $stmt->execute([
        ':nombre' => $_POST['nombre'],
        ':apellido' => $_POST['apellido'],
        ':edad' => $_POST['edad'],
        ':posicion' => $_POST['posicion'],
        ':numero_camiseta' => $_POST['numero_camiseta'], 
        ':equipo_id' => $_POST['equipo'],
        ':id' => $_POST['id']
    ]);

       header('Location: /../../GRUPO13BABYWEB/Backoffice/Pages/misJugadores.php');
    exit();
}

?>
