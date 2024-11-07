<?php

require __DIR__ . '/../../Config/conn.php';

// Encriptar la contraseña antes de insertarla en la base de datos
$passwordHash = password_hash($_POST['passwordUsuario'], PASSWORD_BCRYPT);

switch ($_POST['roles_idUsuario']) {
    case 12: // Arbitro
        $stmt = $pdo->prepare('INSERT INTO arbitros (experiencia) VALUE (:experiencia)');
        $stmt->execute([
            ':experiencia' => $_POST['experienciaArbitro'],
        ]);
        $last_id = $pdo->lastInsertId();
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, email, password, edad, roles_id, arbitro_id) VALUE (:nombre, :apellido, :email, :password, :edad, :roles_id, :arbitro_id)');
        $stmt->execute([
            ':nombre' => $_POST['nombreUsuario'],
            ':apellido' => $_POST['apellidoUsuario'],
            ':email' => $_POST['emailUsuario'],
            ':password' => $passwordHash, // Contraseña encriptada
            ':edad' => $_POST['edadUsuario'],
            ':roles_id' => $_POST['roles_idUsuario'],
            ':arbitro_id' => $last_id,
        ]);
        break;
    case 13: // Entrenador
        $stmt = $pdo->prepare('INSERT INTO entrenadores (experiencia) VALUE (:experiencia)');
        $stmt->execute([
            ':experiencia' => $_POST['experienciaEntrenador'],
        ]);
        $last_id = $pdo->lastInsertId();
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, email, password, edad, roles_id, entrenador_id) VALUE (:nombre, :apellido, :email, :password, :edad, :roles_id, :entrenador_id)');
        $stmt->execute([
            ':nombre' => $_POST['nombreUsuario'],
            ':apellido' => $_POST['apellidoUsuario'],
            ':email' => $_POST['emailUsuario'],
            ':password' => $passwordHash, // Contraseña encriptada
            ':edad' => $_POST['edadUsuario'],
            ':roles_id' => $_POST['roles_idUsuario'],
            ':entrenador_id' => $last_id,
        ]);
        break;
    case 14: // Jugador
        $stmt = $pdo->prepare('INSERT INTO jugadores (posicion, numero_camiseta, equipo_id) VALUE (:posicion, :numero_camiseta, :equipo_id)');
        $stmt->execute([
            ':posicion' => $_POST['posicionJugador'],
            ':numero_camiseta' => $_POST['numeroCamisetaJugador'],
            ':equipo_id' => $_POST['equipoIdJugador'],
        ]);
        $last_id = $pdo->lastInsertId();
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, email, password, edad, roles_id, jugador_id) VALUE (:nombre, :apellido, :email, :password, :edad, :roles_id, :jugador_id)');
        $stmt->execute([
            ':nombre' => $_POST['nombreUsuario'],
            ':apellido' => $_POST['apellidoUsuario'],
            ':email' => $_POST['emailUsuario'],
            ':password' => $passwordHash, // Contraseña encriptada
            ':edad' => $_POST['edadUsuario'],
            ':roles_id' => $_POST['roles_idUsuario'],
            ':jugador_id' => $last_id,
        ]);
        break;
    default: // Otro rol (si existe)
        $stmt = $pdo->prepare('INSERT INTO usuarios (nombre, apellido, email, password, edad, roles_id) VALUE (:nombre, :apellido, :email, :password, :edad, :roles_id)');
        $stmt->execute([
            ':nombre' => $_POST['nombreUsuario'],
            ':apellido' => $_POST['apellidoUsuario'],
            ':email' => $_POST['emailUsuario'],
            ':password' => $passwordHash, // Contraseña encriptada
            ':edad' => $_POST['edadUsuario'],
            ':roles_id' => $_POST['roles_idUsuario'],
        ]);
        break;
}

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');

?>
