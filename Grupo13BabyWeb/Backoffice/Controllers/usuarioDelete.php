<?php

require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
$stmt->execute([
    ':id' => $_POST['idUsuario'],
]);

switch ($_POST['roles_idUsuario']) {
    case 12:
    $stmt = $pdo->prepare('DELETE FROM arbitros WHERE id = :id');
    $stmt->execute([
        ':id' => $_POST['roles_idUsuario'],
    ]);
    break;
    case 13:
    $stmt = $pdo->prepare('DELETE FROM entrenadores WHERE id = :id');
    $stmt->execute([
        ':id' => $_POST['roles_idUsuario'],
    ]);
    break;
    case 14:
    $stmt = $pdo->prepare('DELETE FROM jugadores WHERE id = :id');
    $stmt->execute([
        ':id' => $_POST['roles_idUsuario'],
    ]);
    break;

    }

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>