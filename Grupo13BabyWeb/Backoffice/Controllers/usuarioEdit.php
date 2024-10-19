<?php

require __DIR__ . '/../../Config/conn.php';

switch ($_POST['roles_idUsuario']) {
    case 12:
        $stmt = $pdo->prepare('UPDATE arbitros SET experiencia = :experiencia WHERE id = :id');
        $stmt->execute([
            ':id' => $_POST['idArbitro'],
            ':experiencia' => $_POST['experienciaArbitro'],
        ]);
        break;
    case 13:
        $stmt = $pdo->prepare('UPDATE entrenadores SET experiencia = :experiencia WHERE id = :id');
        $stmt->execute([
            ':id' => $_POST['idEntrenador'],
            ':experiencia' => $_POST['experienciaEntrenador'],
        ]);
        break;
    case 14:
        $stmt = $pdo->prepare('UPDATE jugadores SET posicion = :posicion, numero_camiseta = :numero_camiseta, equipo_id = :equipo_id WHERE id = :id');
        $stmt->execute([
            ':id' => $_POST['idJugador'],
            ':posicion' => $_POST['posicionJugador'],
            ':numero_camiseta' => $_POST['camisetaJugador'],
            ':equipo_id' => $_POST['equipoJugador'],
        ]);
        break;
}

$stmt = $pdo->prepare('UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, password = :password, edad = :edad WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idUsuario'],
    ':nombre' => $_POST['nombreUsuario'],
    ':apellido' => $_POST['apellidoUsuario'],
    ':email' => $_POST['emailUsuario'],
    ':password' => $_POST['passwordUsuario'],
    ':edad' => $_POST['edadUsuario'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>
