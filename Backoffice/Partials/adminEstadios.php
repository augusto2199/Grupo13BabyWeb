<?php

require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Entity/EstadioEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EstadioDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EstadioBusiness.php';

$estadiosBusiness = new EstadioBusiness;
$estadios = $estadiosBusiness->all();

?>

<div>
    <a href="/../Backoffice/Pages/estadioAdminCreate.php"><button type="button" class="btn btn-success">Agregar</button></a>
    <div class="col-md-12">
        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Capacidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($estadios as $estadio): ?>
                    <tr>                        
                        <th>
                        <a href="/../Pages/estadio.php?id=<?php echo $estadio->getId(); ?>"><?php echo $estadio->getId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/estadio.php?id=<?php echo $estadio->getId(); ?>"><?php echo $estadio->getNombre() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/estadio.php?id=<?php echo $estadio->getId(); ?>"><?php echo $estadio->getUbicacion() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/estadio.php?id=<?php echo $estadio->getId(); ?>"><?php echo $estadio->getCapacidad() ?></a>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/../Backoffice/Pages/estadioAdminEdit.php?id=<?php echo $estadio->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/../../Backoffice/Controllers/estadioDelete.php" method="POST">
                                <input type="hidden" name="idEstadio" value="<?php echo $estadio->getId() ?>">
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