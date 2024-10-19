<?php

require __DIR__ . '/../DataAccess/Dao.php';
require __DIR__ . '/../Business/Business.php';
require __DIR__ . '/../Entity/PartidoEntity.php';
require __DIR__ . '/../DataAccess/PartidoDaoMySql.php';
require __DIR__ . '/../Business/PartidoBusiness.php';
require __DIR__ . '/../Entity/EquipoEntity.php';
require __DIR__ . '/../DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../Business/EquipoBusiness.php';
require __DIR__ . '/../Entity/TorneoEntity.php';
require __DIR__ . '/../DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../Business/TorneoBusiness.php';
require __DIR__ . '/../Entity/EstadioEntity.php';
require __DIR__ . '/../DataAccess/EstadioDaoMySql.php';
require __DIR__ . '/../Business/EstadioBusiness.php';
require __DIR__ . '/../Entity/UsuarioEntity.php';
require __DIR__ . '/../DataAccess/UsuarioDaoMySql.php';
require __DIR__ . '/../Business/UsuarioBusiness.php';

$partidosBusiness = new PartidoBusiness;
$partidos = $partidosBusiness->all();

$equipoBusiness = new EquipoBusiness;

$torneoBusiness = new TorneoBusiness;

$estadioBusiness = new EstadioBusiness;

$usuarioBusiness = new UsuarioBusiness;
$usuarios = $usuarioBusiness->all();

?>



<div>
    <a href="/Grupo13BabyWeb/Backoffice/Pages/partidoAdminCreate.php"><button type="button" class="btn btn-success">Agregar</button></a>
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
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo "{$equipoBusiness->find($partido->getEquipoLocalId())->getNombre()} vs {$equipoBusiness->find($partido->getEquipoVisitanteId())->getNombre()} "?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $torneoBusiness->find($partido->getTorneoId())->getNombre() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php echo $estadioBusiness->find($partido->getEstadioId())->getNombre() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/partido.php?id=<?php echo $partido->getId(); ?>"><?php foreach($usuarios as $usuario): if($usuario->getArbitroId() === $partido->getArbitroId()){echo $usuario->getNombre();} endforeach;?></a>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/Grupo13BabyWeb/Backoffice/Pages/partidoAdminEdit.php?id=<?php echo $partido->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/Grupo13BabyWeb/Backoffice/Controllers/partidoDelete.php" method="POST">
                                <input type="hidden" name="idPartido" value="<?php echo $partido->getId() ?>">
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