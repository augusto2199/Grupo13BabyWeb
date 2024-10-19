<?php

require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Entity/RolEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/RolDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/RolBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/EquipoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EquipoBusiness.php';

$equiposBusiness = new EquipoBusiness;
$equipos = $equiposBusiness->all();

$rolesBusiness = new RolBusiness;
$roles = $rolesBusiness->all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../Backoffice/Css/indexAdmin.css">
</head>
<body>

<div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
</div>

<div class="container home">
<form action="/../../Backoffice/Controllers/usuarioCreate.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombreUsuario" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="apellidoUsuario" class="form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellidoUsuario" name="apellidoUsuario" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="emailUsuario" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="emailUsuario" name="emailUsuario" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="passwordUsuario" class="form-label">Password:</label>
                            <input type="text" class="form-control" id="passwordUsuario" name="passwordUsuario" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="edadUsuario" class="form-label">Edad:</label>
                            <input type="text" class="form-control" id="edadUsuario" name="edadUsuario" placeHolder="" value="">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="roles_idUsuario">Roles</label>
                            <select class="form-select" id="roles_idUsuario" name="roles_idUsuario">
                                <option selected>Elegir...</option>
                                <?php foreach($roles as $rol): ?>
                                    <option value="<?php echo $rol->getId() ?>"><?php echo $rol->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="experienciaArbitro" class="form-label">Experiencia Arbitro:</label>
                            <input type="text" class="form-control" id="experienciaArbitro" name="experienciaArbitro" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="experienciaEntrenador" class="form-label">Experiencia Entrenador:</label>
                            <input type="text" class="form-control" id="experienciaEntrenador" name="experienciaEntrenador" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="posicionJugador" class="form-label">Posicion Jugador:</label>
                            <input type="text" class="form-control" id="posicionJugador" name="posicionJugador" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="numeroCamisetaJugador" class="form-label">Numero Camiseta:</label>
                            <input type="text" class="form-control" id="numeroCamisetaJugador" name="numeroCamisetaJugador" placeHolder="" value="">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="equipoIdJugador">Equipos jugador:</label>
                            <select class="form-select" id="equipoIdJugador" name="equipoIdJugador">
                                <option selected>Elegir...</option>
                                <?php foreach($equipos as $equipo): ?>
                                    <option value="<?php echo $equipo->getId() ?>"><?php echo $equipo->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                        <div>
                        <a href="/../Backoffice/indexAdmin.php"><button type="button" class="btn btn-danger">Cerrar</button>
                            <button type="submit" class="btn btn-success btn-create">Crear usuario</button>
                        </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>