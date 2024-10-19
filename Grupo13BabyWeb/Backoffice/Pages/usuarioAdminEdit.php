<?php

require __DIR__ . '/../../Backoffice/Entity/UsuarioEntity.php';
require __DIR__ . '/../../Backoffice/Entity/UsuarioArbitroEntity.php';
require __DIR__ . '/../../Backoffice/Entity/UsuarioEntrenadorEntity.php';
require __DIR__ . '/../../Backoffice/Entity/UsuarioJugadorEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/UsuarioDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/UsuarioBusiness.php';
require __DIR__ . '/../../Backoffice/Entity/RolEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/RolDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/RolBusiness.php';

$usuarioBusiness = new UsuarioBusiness;
$usuario = $usuarioBusiness->find($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario: <?php echo $usuario->getNombre()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>
    
    <div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
    </div>

    <div>
        <form action="/Grupo13BabyWeb/Backoffice/Controllers/usuarioEdit.php" class="container" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombreUsuario" class="form-label">Nombre:</label>
                <input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" placeHolder="" value="<?php echo $usuario->getNombre()?>">
            </div>
            <div class="mb-3">
                <label for="apellidoUsuario" class="form-label">Apellido:</label>
                <input type="text" name="apellidoUsuario" class="form-control" id="apellidoUsuario" placeHolder="" value="<?php echo $usuario->getApellido()?>">
            </div>
            <div class="mb-3">
                <label for="emailUsuario" class="form-label">Email:</label>
                <input type="text" name="emailUsuario" class="form-control" id="emailUsuario" placeHolder="" value="<?php echo $usuario->getEmail()?>">
            </div>
            <div class="mb-3">
                <label for="passwordUsuario" class="form-label">Password</label>
                <input type="text" name="passwordUsuario" class="form-control" id="passwordUsuario" placeHolder="" value="<?php echo $usuario->getPassword()?>">
            </div>
            <div class="mb-3">
                <label for="edadUsuario" class="form-label">Edad:</label>
                <input type="text" name="edadUsuario" class="form-control" id="edadUsuario" placeHolder="" value="<?php echo $usuario->getEdad()?>">
            </div>
            <?php if(!empty($usuario->getJugadorId())){
                $jugador = $usuarioBusiness->findJugador($usuario->getJugadorId())?>
                <input type="hidden" name="idJugador" value="<?php echo $jugador->getId(); ?>">
                <div class="mb-3">
                    <label for="posicionJugador" class="form-label">Posicion:</label>
                    <input type="text" name="posicionJugador" class="form-control" id="posicionJugador" placeHolder="" value="<?php echo $jugador->getPosicion()?>">
                </div>
                <div class="mb-3">
                    <label for="camisetaJugador" class="form-label">Numero de Camiseta:</label>
                    <input type="text" name="camisetaJugador" class="form-control" id="camisetaJugador" placeHolder="" value="<?php echo $jugador->getNumeroCamiseta()?>">
                </div>
                <div class="mb-3">
                    <label for="equipoJugador" class="form-label">Equipo:</label>
                    <input type="text" name="equipoJugador" class="form-control" id="equipoJugador" placeHolder="" value="<?php echo $jugador->getEquipo()?>">
                </div>
            <?php }elseif(!empty($usuario->getEntrenadorId())){
                $entrenador = $usuarioBusiness->findEntrenador($usuario->getEntrenadorId())?>
                <input type="hidden" name="idEntrenador" value="<?php echo $entrenador->getId(); ?>">
                <div class="mb-3">
                    <label for="experienciaEntrenador" class="form-label">Experiencia:</label>
                    <input type="text" name="experienciaEntrenador" class="form-control" id="experienciaEntrenador" placeHolder="" value="<?php echo $entrenador->getExperiencia()?>">
                </div>
            <?php }elseif(!empty($usuario->getArbitroId())){
                $arbitro = $usuarioBusiness->findArbitro($usuario->getArbitroId())?>
                <input type="hidden" name="idArbitro" value="<?php echo $arbitro->getId(); ?>">
                <div class="mb-3">
                    <label for="experienciaArbitro" class="form-label">Experiencia:</label>
                    <input type="text" name="experienciaArbitro" class="form-control" id="experienciaArbitro" placeHolder="" value="<?php echo $arbitro->getExperiencia()?>">
                </div>
            <?php }?>
            <input type="hidden" name="idUsuario" value="<?php echo $usuario->getId(); ?>">
            <input type="hidden" name="roles_idUsuario" value="<?php echo $usuario->getRol(); ?>">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-edit" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success btn-edit">Crear cambios</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>