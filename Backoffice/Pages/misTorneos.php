<?php

require __DIR__ . '/../../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/TorneoBusiness.php';

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

<?php include_once __DIR__ . '/../../Backoffice/Partials/navbar.php'?>

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
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/torneoCreate.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeHolder="" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Crear torneo</button>
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
                    <td>
                        <a href="/../Pages/torneo.php?id=<?php echo $torneo->getId(); ?>"><?php echo $torneo->getNombre() ?></a>
                    </td>
                    <td>
                        <!-- Boton de editar torneo -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTorneoModal<?php echo $torneo->getId(); ?>">Editar</button>

                        <!-- eliminar torneo -->
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/torneoDelete.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?php echo $torneo->getId() ?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal para editar torneo -->
                <div class="modal fade" id="editTorneoModal<?php echo $torneo->getId(); ?>" tabindex="-1" aria-labelledby="editTorneoModalLabel<?php echo $torneo->getId(); ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editTorneoModalLabel<?php echo $torneo->getId(); ?>">Editar Torneo: <?php echo $torneo->getNombre(); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/torneoEdit.php" method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="nombre<?php echo $torneo->getId(); ?>" class="form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre<?php echo $torneo->getId(); ?>" value="<?php echo $torneo->getNombre() ?>">
                          </div>
                          <input type="hidden" name="id" value="<?php echo $torneo->getId(); ?>">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
