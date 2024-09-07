<?php

require __DIR__ . '/../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../Backoffice/Business/Business.php';
require __DIR__ . '/../Backoffice/Business/TorneoBusiness.php';

$torneoBusiness = new TorneoBusiness;
$torneos = $torneoBusiness->all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>

<div class="header">
    <?php include_once __DIR__ . '../Partials/navbar.php'?>
</div>

<div class="container home">
        <div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">Agregar</button>
            <div class="modal fade modal-lg" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCreateLabel">Crear Torneo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/../../Backoffice/Controllers/torneoCreate.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeHolder="" value="test">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-create" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success btn-create">Crear torneo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-border">
                <thead>
                    <tr>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($torneos as $torneo): ?>
                        <tr>
                            <th>
                            <a href="/../Pages/torneo.php?id=<?php echo $torneo->getId(); ?>"><?php echo $torneo->getName() ?></a>
                            </th>
                            <th>
                                <a href="/../Backoffice/Pages/torneoAdmin.php?id=<?php echo $torneo->getId(); ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                                <form action="/../../Backoffice/Controllers/torneoDelete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $torneo->getId() ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>