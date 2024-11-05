<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol - Crear Torneo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .degraded-background {
            background: linear-gradient(to bottom right, #f0f8ff, #add8e6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            margin-top: 40px;
        }
        .btn-custom {
            width: 100px;
        }
    </style>
</head>
<body>

<div class="header">
    
</div>

<div class="degraded-background">
    <h1 class="text-center mb-4">Crear Torneo</h1>
    <form action="/Grupo13BabyWeb/Backoffice/Controllers/torneoCreate.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombreTorneo" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombreTorneo" name="nombreTorneo" value="">
        </div>
        <div class="text-center mt-4">
            <a href="../../../Grupo13BabyWeb/Backoffice/indexAdmin.php" class="btn btn-danger btn-sm btn-custom">Cerrar</a>
            <button type="submit" class="btn btn-success btn-sm btn-custom">Crear</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
