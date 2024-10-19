<?php

require __DIR__ . '/../Entity/EquipoEntity.php';
require __DIR__ . '/../DataAccess/Dao.php';
require __DIR__ . '/../DataAccess/EquipoDaoMySql.php';
require __DIR__ . '/../Business/Business.php';
require __DIR__ . '/../Business/EquipoBusiness.php';
require __DIR__ . '/../Entity/UsuarioEntity.php';
require __DIR__ . '/../Entity/UsuarioEntrenadorEntity.php';
require __DIR__ . '/../DataAccess/UsuarioDaoMySql.php';
require __DIR__ . '/../Business/UsuarioBusiness.php';

$equipoBusiness = new EquipoBusiness;
$equipo = $equipoBusiness->find($_GET['id']);

$usuarioBusiness = new UsuarioBusiness;
$usuarios = $usuarioBusiness->all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadio: <?php echo $equipo->getNombre()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>
    
    <div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
    </div>

    <div>
        <form action="/Grupo13BabyWeb/Backoffice/Controllers/equipoEdit.php" class="container" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombreEquipo" class="form-label">Nombre:</label>
                <input type="text" name="nombreEquipo" class="form-control" id="nombreEquipo" placeHolder="" value="<?php echo $equipo->getNombre()?>">
            </div>
            <div class="mb-3">
                <label for="categoriaEquipo" class="form-label">Categoria:</label>
                <input type="text" name="categoriaEquipo" class="form-control" id="categoriaEquipo" placeHolder="" value="<?php echo $equipo->getCategoria()?>">
            </div>
            <div class="input-group mb-3">
                            <label class="input-group-text" for="entrenadorEquipo">Entrenador</label>
                            <select class="form-select" id="entrenadorEquipo" name="entrenadorEquipo">
                                <?php foreach($usuarios as $usuario):
                                    if(!empty($usuario->getEntrenadorId())){ 
                                        if($usuario->getEntrenadorId()== $equipo->getEntrenadorId()){?>
                                            <option value="<?php echo $usuario->getEntrenadorId() ?>" selected><?php echo $usuario->getNombre() ?></option>
                                        <?php }?>
                                    <option value="<?php echo $usuario->getEntrenadorId() ?>"><?php echo "{$usuario->getNombre()}" ?></option>
                                <?php } endforeach; ?>
                            </select>
                        </div>
            <input type="hidden" name="id" value="<?php echo $equipo->getId(); ?>">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-edit" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success btn-edit">Crear cambios</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>