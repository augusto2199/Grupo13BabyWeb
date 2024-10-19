<?php

require __DIR__ . '/../Entity/UsuarioEntity.php';
require __DIR__ . '/../Entity/UsuarioArbitroEntity.php';
require __DIR__ . '/../DataAccess/Dao.php';
require __DIR__ . '/../DataAccess/UsuarioDaoMySql.php';
require __DIR__ . '/../Business/Business.php';
require __DIR__ . '/../Business/UsuarioBusiness.php';
require __DIR__ . '/../Entity/RolEntity.php';
require __DIR__ . '/../DataAccess/RolDaoMySql.php';
require __DIR__ . '/../Business/RolBusiness.php';
require __DIR__ . '/../Entity/EquipoEntity.php';
require __DIR__ . '/../DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../Business/EquipoBusiness.php';

$usuarioBusiness = new UsuarioBusiness;
$usuarios = $usuarioBusiness->all();

$equiposBusiness = new EquipoBusiness;
$equipos = $equiposBusiness->all();
?>

<div>
    <a href="/Grupo13BabyWeb/Backoffice/Pages/usuarioAdminCreate.php"><button type="button" class="btn btn-success">Agregar</button></a>
    <div class="col-md-12">
        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre y apelido</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <th>
                        <a href="/../Pages/usuario.php?id=<?php echo $usuario->getId(); ?>"><?php echo $usuario->getId() ?></a>
                        </th>
                        <th>
                        <a href="/../Pages/usuario.php?id=<?php echo $usuario->getId(); ?>"><?php echo "{$usuario->getNombre()} {$usuario->getApellido()} " ?></a>
                        </th>
                        <th>
                        <?php echo $usuario->buscarNombreRol($usuario->getRol()) ?>
                        </th>
                        <th>
                            <div class="botnesAdmin">
                            <a href="/Grupo13BabyWeb/Backoffice/Pages/usuarioAdminEdit.php?id=<?php echo $usuario->getId(); ?>"><button type="button botnesAdmin" class="btn btn-primary">Editar</button></a>
                            <form action="/Grupo13BabyWeb/Backoffice/Controllers/usuarioDelete.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $usuario->getId() ?>">
                                <input type="hidden" name="roles_idUsuario" value="<?php echo $usuario->getRol() ?>">
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