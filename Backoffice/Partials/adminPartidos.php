<?php

require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Entity/PartidoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/PartidoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/PartidoBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/EquipoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EquipoBusiness.php';

$partidosBusiness = new PartidoBusiness;
$partidos = $partidosBusiness->all();

?>

<div>
    <a href="/../Backoffice/Pages/partidoAdminCreate.php"><button type="button" class="btn btn-success">Agregar</button></a>
    <div class="col-md-12">
        <table class="table table-striped    table-border">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Equipos</th>
                    <th>Torneo</th>
                    <th>Estadio</th>
                    <th>Arbitro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($partidos as $partido): ?>
                    <tr>                        
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $partido->getId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $partido->getFecha() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo "{$partido->getEquipoLocalId()} {$partido->EquipoVisitanteId())} "?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $partido->getTorneoId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $partido->getEstadioId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $partido->getArbitroId() ?></a>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/../Backoffice/Pages/partidoAdminEdit.php?id=<?php echo $partido->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/../../Backoffice/Controllers/partidoDelete.php" method="POST">
                                <input type="hidden" name="idPartido" value="<?php echo $equipo->getId() ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            </div>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>