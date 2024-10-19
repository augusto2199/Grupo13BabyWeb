<?php
require __DIR__ . '/../../Config/conn.php';

$stmt = $pdo->prepare('INSERT INTO partidos (fecha, equipo_local_id, equipo_visitante_id, torneo_id, estadio_id, arbitro_id) VALUE (:fecha, :equipo_local_id, :equipo_visitante_id, :torneo_id, :estadio_id, :arbitro_id)');
$stmt->execute([
    ':fecha' => $_POST['fechaPartido'],
    ':equipo_local_id' => $_POST['equipoLocalPartido'],
    ':equipo_visitante_id' => $_POST['equipoVisitantePartido'],
    ':torneo_id' => $_POST['torneoPartido'],
    ':estadio_id' => $_POST['estadioPartido'],
    ':arbitro_id' => $_POST['arbitroPartido'],
]);

header('location: /Grupo13BabyWeb/Backoffice/indexAdmin.php');
?>