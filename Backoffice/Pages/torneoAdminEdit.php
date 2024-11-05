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
    <title>Editar Torneo: <?php echo $torneo->getNombre() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Aplicar el fondo degradado */
        .degraded-background {
            background: linear-gradient(to bottom right, #f0f8ff, #add8e6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            margin-top: 40px;
        }
        /* Asegurar estilo de botón */
        .btn-custom {
            width: 100px;
        }
    </style>
</head>
<body>

    <div class="header">
     
    </div>

    <div class="degraded-background">
        <h1 class="text-center mb-4">Editar Torneo</h1>
        <form action="/Grupo13BabyWeb/Backoffice/Controllers/torneoEdit.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $torneo->getNombre() ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $torneo->getId(); ?>">
            <div class="text-center mt-4">
                <button type="button" class="btn btn-secondary btn-sm btn-custom" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success btn-sm btn-custom">Guardar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
