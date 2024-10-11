<?php

require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Entity/EquipoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/EquipoBusiness.php';

$equiposBusiness = new EquipoBusiness;
$equipos = $equiposBusiness->all();

?>

<div>
    <a href="/../Backoffice/Pages/equipoAdminCreate.php"><button type="button" class="btn btn-success">Agregar</button></a>
    <div class="col-md-12">
        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($equipos as $equipo): ?>
                    <tr>                        
                        <th>
                        <a href="/../Pages/equipo.php?id=<?php echo $equipo->getId(); ?>"><?php echo $equipo->getId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/equipo.php?id=<?php echo $equipo->getId(); ?>"><?php echo $equipo->getNombre() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/equipo.php?id=<?php echo $equipo->getId(); ?>"><?php echo $equipo->getCategoria() ?></a>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/../Backoffice/Pages/equipoAdminEdit.php?id=<?php echo $equipo->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/../../Backoffice/Controllers/equipoDelete.php" method="POST">
                                <input type="hidden" name="idEquipo" value="<?php echo $equipo->getId() ?>">
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