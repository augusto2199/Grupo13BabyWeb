<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../Backoffice/Css/indexAdmin.css">
</head>
<body>

<div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
</div>

<div class="container home">
<form action="/Grupo13BabyWeb/Backoffice/Controllers/estadioCreate.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombreEstadio" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreEstadio" name="nombreEstadio" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="capacidadEstadio" class="form-label">Capacidad:</label>
                            <input type="text" class="form-control" id="capacidadEstadio" name="capacidadEstadio" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="ubicacionEstadio" class="form-label">Ubicacion:</label>
                            <input type="text" class="form-control" id="ubicacionEstadio" name="ubicacionEstadio" placeHolder="" value="">
                        </div>
                    </div>
                        <div>
                        <a href="/Grupo13BabyWeb/Backoffice/Pages/indexAdmin.php"><button type="button" class="btn btn-danger">Cerrar</button></a>
                            <button type="submit" class="btn btn-success btn-create">Crear Estadio</button>
                        </div>
                    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>