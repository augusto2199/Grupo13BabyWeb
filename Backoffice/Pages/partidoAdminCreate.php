<?php

require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Entity/PartidoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/PartidoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/PartidoBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/EquipoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EquipoBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/TorneoBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/EstadioEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EstadioDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EstadioBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/UsuarioEntity.php';
require __DIR__ . '/../../Backoffice/Entity/UsuarioArbitroEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/UsuarioDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/UsuarioBusiness.php';

$equiposBusiness = new EquipoBusiness;
$equipos = $equiposBusiness->all();

$torneosBusiness = new TorneoBusiness;
$torneos = $torneosBusiness->all();

$estadiosBusiness = new EstadioBusiness;
$estadios = $estadiosBusiness->all();

$usuariosBusiness = new UsuarioBusiness;
$usuarios = $usuariosBusiness->all();

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
<form action="/Grupo13BabyWeb/Backoffice/Controllers/PartidoCreate.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="fechaPartido" class="form-label">Fecha:</label>
                            <input type="text" class="form-control" id="fechaPartido" name="fechaPartido" placeHolder="yyyy-mm-dd" value="">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="equipoLocalPartido">Equipo Local:</label>
                            <select class="form-select" id="equipoLocalPartido" name="equipoLocalPartido">
                                <option selected>Elegir...</option>
                                <?php foreach($equipos as $equipo): ?>
                                    <option value="<?php echo $equipo->getId() ?>"><?php echo $equipo->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="equipoVisitantePartido">Equipo Visitante:</label>
                            <select class="form-select" id="equipoVisitantePartido" name="equipoVisitantePartido">
                                <option selected>Elegir...</option>
                                <?php foreach($equipos as $equipo): ?>
                                    <option value="<?php echo $equipo->getId() ?>"><?php echo $equipo->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="torneoPartido">Torneo:</label>
                            <select class="form-select" id="torneoPartido" name="torneoPartido">
                                <option selected>Elegir...</option>
                                <?php foreach($torneos as $torneo): ?>
                                    <option value="<?php echo $torneo->getId() ?>"><?php echo $torneo->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="estadioPartido">Estadio:</label>
                            <select class="form-select" id="estadioPartido" name="estadioPartido">
                                <option selected>Elegir...</option>
                                <?php foreach($estadios as $estadio): ?>
                                    <option value="<?php echo $estadio->getId() ?>"><?php echo $estadio->getNombre() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="arbitroPartido">Arbitro:</label>
                            <select class="form-select" id="arbitroPartido" name="arbitroPartido">
                                <option selected>Elegir...</option>
                                <?php foreach($usuarios as $usuario): 
                                        if(!empty($usuario->getArbitroId())){ ?>
                                    <option value="<?php echo $usuario->getArbitroId() ?>"><?php echo $usuario->getNombre() ?></option>
                                <?php } endforeach; ?>
                            </select>
                        </div>
                    </div>
                        <div>
                        <a href="/Grupo13BabyWeb/Backoffice/indexAdmin.php"><button type="button" class="btn btn-danger">Cerrar</button>
                            <button type="submit" class="btn btn-success btn-create">Crear partido</button>
                        </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>