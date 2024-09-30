<?php

require __DIR__ . '/../../Backoffice/Entity/EquipoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/EquipoBusiness.php';

$equipoBusiness = new EquipoBusiness;
$equipos = $equipoBusiness->all();

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
                        <h1 class="modal-title fs-5" id="modalCreateLabel">Crear Equipo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/EquipoCreate.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeHolder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoría:</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" placeHolder="" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Crear Equipo</button>
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
                <th>Categoría</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach($equipos as $equipo): ?>
                <tr>
                    <td>
                        <a href="/../Pages/equipo.php?id=<?php echo $equipo->getId(); ?>"><?php echo $equipo->getNombre() ?></a>
                    </td>
                    <td>
                        <?php echo $equipo->getCategoria(); ?>
                    </td>
                    <td>
                        <!-- Boton editar modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEquipoModal<?php echo $equipo->getId(); ?>">Editar</button>

                        <!-- eliminar equipo -->
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/equipoDelete.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="id" value="<?php echo $equipo->getId(); ?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal editar equipo -->
                <div class="modal fade" id="editEquipoModal<?php echo $equipo->getId(); ?>" tabindex="-1" aria-labelledby="editEquipoModalLabel<?php echo $equipo->getId(); ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="editEquipoModalLabel<?php echo $equipo->getId(); ?>">Editar Equipo: <?php echo $equipo->getNombre(); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/equipoEdit.php" method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="nombre<?php echo $equipo->getId(); ?>" class="form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre<?php echo $equipo->getId(); ?>" value="<?php echo $equipo->getNombre(); ?>">
                          </div>
                          <div class="mb-3">
                            <label for="categoria<?php echo $equipo->getId(); ?>" class="form-label">Categoría:</label>
                            <input type="text" name="categoria" class="form-control" id="categoria<?php echo $equipo->getId(); ?>" value="<?php echo $equipo->getCategoria(); ?>">
                          </div>
                          <input type="hidden" name="id" value="<?php echo $equipo->getId(); ?>">
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
