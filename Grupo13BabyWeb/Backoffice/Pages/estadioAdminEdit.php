<?php

require __DIR__ . '/../../Backoffice/Entity/EstadioEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/EstadioDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/EstadioBusiness.php';

$estadioBusiness = new EstadioBusiness;
$estadio = $estadioBusiness->find($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadio: <?php echo $estadio->getNombre()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>
    
    <div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
    </div>

    <div>
        <form action="/Grupo13BabyWeb/Backoffice/Controllers/estadioEdit.php" class="container" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombreEstadio" class="form-label">Nombre:</label>
                <input type="text" name="nombreEstadio" class="form-control" id="nombreEstadio" placeHolder="" value="<?php echo $estadio->getNombre()?>">
            </div>
            <div class="mb-3">
                <label for="ubicacionEstadio" class="form-label">Ubicacion:</label>
                <input type="text" name="ubicacionEstadio" class="form-control" id="ubicacionEstadio" placeHolder="" value="<?php echo $estadio->getUbicacion()?>">
            </div>
            <div class="mb-3">
                <label for="capacidadEstadio" class="form-label">Capacidad:</label>
                <input type="text" name="capacidadEstadio" class="form-control" id="capacidadEstadio" placeHolder="" value="<?php echo $estadio->getCapacidad()?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $estadio->getId(); ?>">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-edit" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success btn-edit">Crear cambios</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>