<?php

require __DIR__ . '/../../Backoffice/Entity/JugadorEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/JugadorDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/JugadorBusiness.php';

$jugadorBusiness = new jugadorBusiness;
$jugadores = $jugadorBusiness->all();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>

<?php include_once __DIR__ . '/../../Backoffice/Partials/navbar.php'?>

<div class="container home">
    <div>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreate">Agregar</button>
        <div class="modal fade modal-lg" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalCreateLabel">Crear Jugador</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/JugadorCreate.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del jugador" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del jugador" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad del jugador" required>
                            </div>
                            <div class="mb-3">
                                <label for="posicion" class="form-label">Posicion</label>
                                <input type="text" class="form-control" id="posicion" name="posicion" placeholder="Edad del jugador" required>
                            </div>
                            <div class="mb-3">
                                <label for="numeroCamiseta" class="form-label">Numero Camiseta</label>
                                <input type="number" class="form-control" id="numeroCamiseta" name="numeroCamiseta" placeholder="Numero de camiseta del jugador" required>
                            </div>
                            <div class="mb-3">
                                <label for="equipo" class="form-label">Equipo</label>
                                <input type="number" class="form-control" id="equipo" name="equipo" placeholder="nombre del equipo" required>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Crear Jugador</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-striped table-border">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>    
                    <th>Edad</th>
                    <th>Posicion</th>                   
                    <th>Numero Camiseta</th>
                    <th>Equipo</th>                 
                </tr>
            </thead>
            <tbody>
                <?php foreach($jugadores as $jugador): ?>
                    <tr>
                        <td>
                            <a href="/../Pages/jugador.php?id=<?php echo $jugador->getId(); ?>"><?php echo $jugador->getNombre() ?></a>
                        </td>
                        <td>
                            <?php echo $jugador->getApellido(); ?>
                        </td>
                        <td>
                            <?php echo $jugador->getEdad(); ?>
                        </td>
                        <td>
                            <?php echo $jugador->getPosicion(); ?>
                        </td>
                        <td>
                            <?php echo $jugador->getNumeroCamiseta(); ?>
                        </td>
                        <td>
                            <?php echo $jugador->getEquipo(); ?>
                        </td>
                        
                        <td>
                            <a href="/../GRUPO13BABYWEB/Backoffice/Pages/jugadorAdmin.php?id=<?php echo $jugador->getId(); ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                            <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/jugadorDelete.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo $jugador->getId(); ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
