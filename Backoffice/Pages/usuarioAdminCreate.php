<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../Backoffice/Css/indexAdmin.css">
    <style>
        /* Estilo para el fondo degradado */
        .degraded-background {
            background: linear-gradient(to bottom right, #f0f8ff, #add8e6); 
            padding: 20px; 
            border-radius: 10px; 
            max-width: 600px; /* Asegúrate de que el ancho máximo sea el mismo que en el primer formulario */
            margin: auto; /* Centrar el formulario */
        }
    </style>
</head>
<body>

<div class="header">
    <!-- Aquí podrías añadir un encabezado o logo si lo deseas -->
</div>

<div class="container">
    <h1 class="text-center mb-4">Liga Argentina de Baby Fútbol</h1> 
    <div class="form-container"> 
        <div class="degraded-background">
            <h2 class="text-center mb-4">Crear Usuario</h2> 
            <form action="/Grupo13BabyWeb/Backoffice/Controllers/usuarioCreate.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombreUsuario" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="apellidoUsuario" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellidoUsuario" name="apellidoUsuario" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="emailUsuario" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="passwordUsuario" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="edadUsuario" class="form-label">Edad:</label>
                    <input type="number" class="form-control" id="edadUsuario" name="edadUsuario" placeholder="" required>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="roles_idUsuario">Roles</label>
                    <select class="form-select" id="roles_idUsuario" name="roles_idUsuario" required>
                        <option selected>Elegir...</option>
                        <?php foreach($roles as $rol): ?>
                            <option value="<?php echo $rol->getId() ?>"><?php echo $rol->getNombre() ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="experienciaArbitro" class="form-label">Experiencia Arbitro:</label>
                    <input type="text" class="form-control" id="experienciaArbitro" name="experienciaArbitro" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="experienciaEntrenador" class="form-label">Experiencia Entrenador:</label>
                    <input type="text" class="form-control" id="experienciaEntrenador" name="experienciaEntrenador" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="posicionJugador" class="form-label">Posición Jugador:</label>
                    <input type="text" class="form-control" id="posicionJugador" name="posicionJugador" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="numeroCamisetaJugador" class="form-label">Número Camiseta:</label>
                    <input type="text" class="form-control" id="numeroCamisetaJugador" name="numeroCamisetaJugador" placeholder="">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="equipoIdJugador">Equipos jugador:</label>
                    <select class="form-select" id="equipoIdJugador" name="equipoIdJugador" required>
                        <option selected>Elegir...</option>
                        <?php foreach($equipos as $equipo): ?>
                            <option value="<?php echo $equipo->getId() ?>"><?php echo $equipo->getNombre() ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/Grupo13BabyWeb/Backoffice/indexAdmin.php"><button type="button" class="btn btn-secondary btn-edit btn-sm">Cerrar</button></a>
                    <button type="submit" class="btn btn-success btn-sm">Crear usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
