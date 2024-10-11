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
<form action="/../../Backoffice/Controllers/equipoCreate.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombreEquipo" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="categoriaEquipo" class="form-label">Categoria:</label>
                            <input type="text" class="form-control" id="categoriaEquipo" name="categoriaEquipo" placeHolder="" value="">
                        </div>
                        <div class="mb-3">
                            <label for="entrenadorEquipo" class="form-label">Id Entrenador:</label>
                            <input type="text" class="form-control" id="entrenadorEquipo" name="entrenadorEquipo" placeHolder="" value="">
                        </div>
                    </div>
                        <div>
                        <a href="/../Backoffice/Pages/indexAdmin.php"><button type="button" class="btn btn-danger">Cerrar</button></a>
                            <button type="submit" class="btn btn-success btn-create">Crear Equipo</button>
                        </div>
                    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>