<?php

require __DIR__ . '/../../Backoffice/Entity/JugadorEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/JugadorDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/JugadorBusiness.php';

$jugadorBusiness = new jugadorBusiness;
$jugadores = $jugadorBusiness->all();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>

<body>

    <?php include_once __DIR__ . '/../../Backoffice/Partials/navbar.php' ?>

    <div class="container home">
        <div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#modalCreate">Agregar</button>
            <div class="modal fade modal-lg" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalCreateLabel">Crear Jugador</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/JugadorCreate.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre del jugador" required>
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        placeholder="Apellido del jugador" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edad" class="form-label">Edad</label>
                                    <input type="number" class="form-control" id="edad" name="edad"
                                        placeholder="Edad del jugador" required>
                                </div>
                                <div class="mb-3">
                                    <label for="posicion" class="form-label">Posicion</label>
                                    <input type="text" class="form-control" id="posicion" name="posicion"
                                        placeholder="Edad del jugador" required>
                                </div>
                                <div class="mb-3">
                                    <label for="numero_camiseta" class="form-label">Numero Camiseta</label>
                                    <input type="number" class="form-control" id="numeroCamiseta"
                                        name="numeroCamiseta" placeholder="Número de camiseta" required>
                                </div>
                                <div class="mb-3">
                                    <label for="equipo" class="form-label">Equipo</label>
                                    <input type="number" class="form-control" id="equipo" name="equipo"
                                        placeholder="nombre del equipo" required>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Crear Jugador</button>
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
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Posicion</th>
                        <th>Numero Camiseta</th>
                        <th>Equipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jugadores as $jugador): ?>
                        <tr>
                            <td>
                                <a
                                    href="/../Pages/jugador.php?id=<?php echo $jugador->getId(); ?>"><?php echo $jugador->getNombre() ?></a>
                            </td>
                            <td>
                                <?php echo $jugador->getApellido(); ?>
                            </td>
                            <td>
                                <?php echo $jugador->getEdad(); ?>
                            </td>
                            <td>
                                <?php echo $jugador->getPosicion(); ?>
                            </td>
                            <td>
                                <?php echo $jugador->getNumeroCamiseta(); ?>
                            </td>

                            <td>
                                <?php echo $jugador->getEquipoNombre(); ?>
                            </td>


                            <td>
                                <!-- Boton editar modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editJugadorModal<?php echo $jugador->getId(); ?>">Editar</button>
                                <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/jugadorDelete.php" method="POST"
                                    style="display:inline-block;">
                                    <input type="hidden" name="id" value="<?php echo $jugador->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Modal editar jugador -->
                        <div class="modal fade" id="editJugadorModal<?php echo $jugador->getId(); ?>" tabindex="-1"
                            aria-labelledby="editJugadorModalLabel<?php echo $jugador->getId(); ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editJugadorModalLabel<?php echo $jugador->getId(); ?>">
                                            Editar Jugador:
                                            <?php echo $jugador->getNombre() . ' ' . $jugador->getApellido(); ?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/jugadorEdit.php"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nombre<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Nombre:</label>
                                                <input type="text" name="nombre" class="form-control"
                                                    id="nombre<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getNombre(); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="apellido<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Apellido:</label>
                                                <input type="text" name="apellido" class="form-control"
                                                    id="apellido<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getApellido(); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edad<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Edad:</label>
                                                <input type="number" name="edad" class="form-control"
                                                    id="edad<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getEdad(); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="posicion<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Posición:</label>
                                                <input type="text" name="posicion" class="form-control"
                                                    id="posicion<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getPosicion(); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="numero_camiseta<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Número de Camiseta:</label>
                                                <input type="number" name="numero_camiseta" class="form-control"
                                                    id="numero_camiseta<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getNumeroCamiseta(); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="equipo<?php echo $jugador->getId(); ?>"
                                                    class="form-label">Equipo:</label>
                                                <input type="text" name="equipo" class="form-control"
                                                    id="equipo<?php echo $jugador->getId(); ?>"
                                                    value="<?php echo $jugador->getEquipoNombre(); ?>" required>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $jugador->getId(); ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
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
    </div>


    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>