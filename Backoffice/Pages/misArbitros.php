<?php

require __DIR__ . '/../../Backoffice/Entity/ArbitroEntity.php';
require __DIR__ . '/../../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../../Backoffice/DataAccess/ArbitroDaoMySql.php';
require __DIR__ . '/../../Backoffice/Business/Business.php';
require __DIR__ . '/../../Backoffice/Business/ArbitroBusiness.php';

$ArbitroBusiness = new ArbitroBusiness;
$arbitros = $ArbitroBusiness->all();

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
                        <h1 class="modal-title fs-5" id="modalCreateLabel">Crear Arbitro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/ArbitroCreate.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del arbitro" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido del arbitro" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad del arbitro" required>
                            </div>
                            <div class="mb-3">
                                <label for="experiencia" class="form-label">Experiencia</label>
                                <input type="number" class="form-control" id="experiencia" name="experiencia" placeholder="experiencia del arbitro" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email del arbitro" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password del arbitro" required>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Crear Arbitro</button>
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
                    <th>Experiencia</th>                  
                    <th>Email</th>   
                    <th>Password</th>                
                </tr>
            </thead>
            <tbody>
                <?php foreach($arbitros as $arbitro): ?>
                    <tr>
                        <td>
                            <a href="/../Pages/arbitro.php?id=<?php echo $arbitro->getId(); ?>"><?php echo $arbitro->getNombre() ?></a>
                        </td>
                        <td>
                            <?php echo $arbitro->getApellido(); ?>
                        </td>
                        <td>
                            <?php echo $arbitro->getEdad(); ?>
                        </td>
                        <td>
                            <?php echo $arbitro->getExperiencia(); ?>
                        </td>
                        <td>
                            <?php echo $arbitro->getEmail(); ?>
                        </td>
                        <td>
                            <?php echo $arbitro->getPassword(); ?>
                        </td>
                        
                        <td>
                            <!-- Boton editar arbitro -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editArbitroModal<?php echo $arbitro->getId(); ?>">Editar</button>

                            <!-- eliminar arbitro -->
                            <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/arbitroDelete.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="id" value="<?php echo $arbitro->getId(); ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal editar arbitro -->
                    <div class="modal fade" id="editArbitroModal<?php echo $arbitro->getId(); ?>" tabindex="-1" aria-labelledby="editArbitroModalLabel<?php echo $arbitro->getId(); ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editArbitroModalLabel<?php echo $arbitro->getId(); ?>">Editar Árbitro: <?php echo $arbitro->getNombre(); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="/../../GRUPO13BABYWEB/Backoffice/Controllers/arbitroEdit.php" method="POST" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="nombre<?php echo $arbitro->getId(); ?>" class="form-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" id="nombre<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getNombre(); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="apellido<?php echo $arbitro->getId(); ?>" class="form-label">Apellido:</label>
                                <input type="text" name="apellido" class="form-control" id="apellido<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getApellido(); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="edad<?php echo $arbitro->getId(); ?>" class="form-label">Edad:</label>
                                <input type="number" name="edad" class="form-control" id="edad<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getEdad(); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="experiencia<?php echo $arbitro->getId(); ?>" class="form-label">Experiencia:</label>
                                <input type="number" name="experiencia" class="form-control" id="experiencia<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getExperiencia(); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="email<?php echo $arbitro->getId(); ?>" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" id="email<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getEmail(); ?>">
                              </div>
                              <div class="mb-3">
                                <label for="password<?php echo $arbitro->getId(); ?>" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" id="password<?php echo $arbitro->getId(); ?>" value="<?php echo $arbitro->getPassword(); ?>">
                              </div>
                              <input type="hidden" name="id" value="<?php echo $arbitro->getId(); ?>">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
