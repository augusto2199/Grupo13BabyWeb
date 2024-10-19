<?php

require __DIR__ . '/../../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/TorneoBusiness.php';

$torneoBusiness = new TorneoBusiness;
$torneo = $torneoBusiness->find($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo: <?php echo $torneo->getNombre()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>
    
    <div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
    </div>

    <div>
        <form action="/Grupo13BabyWeb/Backoffice/Controllers/torneoEdit.php" class="container" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeHolder="" value="<?php echo $torneo->getNombre()?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $torneo->getId(); ?>">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-edit" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success btn-edit">Crear cambios</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>