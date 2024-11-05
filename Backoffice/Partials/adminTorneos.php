<?php

require __DIR__ . '/../Entity/TorneoEntity.php';
require __DIR__ . '/../DataAccess/Dao.php';
require __DIR__ . '/../DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../Business/Business.php';
require __DIR__ . '/../Business/TorneoBusiness.php';

$torneoBusiness = new TorneoBusiness;
$torneos = $torneoBusiness->all();

?>

<style>
    .degraded-background {
        background: linear-gradient(to bottom right, #f0f8ff, #add8e6);
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="degraded-background">
    <h1 class="text-center mb-4">Gestión de Torneos</h1>
    <a href="/Grupo13BabyWeb/Backoffice/Pages/torneoAdminCreate.php" class="btn btn-success mb-3">Agregar Torneo</a>
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($torneos as $torneo): ?>
                    <tr>
                        <td>
                            <a href="/../Pages/torneo.php?id=<?php echo $torneo->getId(); ?>" class="text-dark text-decoration-none">
                                <?php echo $torneo->getNombre(); ?>
                            </a>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="/Grupo13BabyWeb/Backoffice/Pages/torneoAdminEdit.php?id=<?php echo $torneo->getId(); ?>" class="btn btn-warning btn-sm">Editar</a>
                                <form action="/Grupo13BabyWeb/Backoffice/Controllers/torneoDelete.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $torneo->getId(); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
