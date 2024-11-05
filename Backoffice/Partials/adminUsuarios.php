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

$usuarioBusiness = new UsuarioBusiness();
$usuarios = $usuarioBusiness->all();

$equiposBusiness = new EquipoBusiness();
$equipos = $equiposBusiness->all();
?>

<style>
    .degraded-background {
        background: linear-gradient(to bottom right, #f0f8ff, #add8e6);
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="degraded-background">
    <h1 class="text-center mb-4">Liga Argentina de Baby Fútbol</h1>
    <a href="/Grupo13BabyWeb/Backoffice/Pages/usuarioAdminCreate.php" class="btn btn-success mb-3">Agregar Usuario</a>
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre y Apellido</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edad</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario->getId(); ?></td>
                            <td>
                                <a href="/../Pages/usuario.php?id=<?php echo $usuario->getId(); ?>"
                                    class="text-dark text-decoration-none">
                                    <?php echo "{$usuario->getNombre()} {$usuario->getApellido()}"; ?>
                                </a>
                            </td>
                            <td><?php echo $usuario->getEmail(); ?></td>
                            <td><?php echo $usuario->getPassword(); ?></td>
                            <td><?php echo $usuario->getEdad(); ?></td>
                            <td><?php echo $usuario->buscarNombreRol($usuario->getRol()); ?></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="/Grupo13BabyWeb/Backoffice/Pages/usuarioAdminEdit.php?id=<?php echo $usuario->getId(); ?>"
                                        class="btn btn-warning btn-sm">Editar</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#confirmEliminarModal" onclick="setUserId(<?php echo $usuario->getId(); ?>)">
                                        Eliminar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal de confirmación de eliminación -->
<div class="modal fade" id="confirmEliminarModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro que deseas eliminar el usuario?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <form id="deleteForm" action="/Grupo13BabyWeb/Backoffice/Controllers/usuarioDelete.php" method="POST">
                    <input type="hidden" name="idUsuario" id="idUsuario">
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Función para establecer el ID del usuario en el campo oculto del formulario
function setUserId(id) {
    document.getElementById('idUsuario').value = id;
}
</script>
