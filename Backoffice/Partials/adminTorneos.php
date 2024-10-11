<?php

require __DIR__ . '/../../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/TorneoBusiness.php';

$torneoBusiness = new TorneoBusiness;
$torneos = $torneoBusiness->all();

?>

<div>
<a href="/../Backoffice/Pages/torneoAdminCreate.php?>"><button type="button" class="btn btn-success">Agregar</button></a>
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
                        <th>
                        <a href="/../Pages/torneo.php?id=<?php echo $torneo->getId(); ?>"><?php echo $torneo->getNombre() ?></a>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/../Backoffice/Pages/torneoAdminEdit.php?id=<?php echo $torneo->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/../../Backoffice/Controllers/torneoDelete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $torneo->getId() ?>">
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

