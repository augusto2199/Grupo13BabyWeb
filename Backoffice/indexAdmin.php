
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../GRUPO13BABYWEB/Backoffice/Css/indexAdmin.css">
</head>
<body>

<div class="header">
    <?php include_once __DIR__ . '../Partials/navbar.php'?>
</div>

<div class="container home">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-usuarios-tab" data-bs-toggle="tab" data-bs-target="#nav-usuarios" type="button" role="tab" aria-controls="nav-usuarios" aria-selected="true">Usuarios</button>
            <button class="nav-link" id="nav-torneos-tab" data-bs-toggle="tab" data-bs-target="#nav-torneos" type="button" role="tab" aria-controls="nav-torneos" aria-selected="false">Torneos</button>
            <button class="nav-link" id="nav-equipos-tab" data-bs-toggle="tab" data-bs-target="#nav-equipos" type="button" role="tab" aria-controls="nav-equipos" aria-selected="false">Equipos</button>
            <button class="nav-link" id="nav-estadios-tab" data-bs-toggle="tab" data-bs-target="#nav-estadios" type="button" role="tab" aria-controls="nav-estadios" aria-selected="false">Estadios</button>
            <button class="nav-link" id="nav-partidos-tab" data-bs-toggle="tab" data-bs-target="#nav-partidos" type="button" role="tab" aria-controls="nav-partidos" aria-selected="false">Partidos</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-usuarios" role="tabpanel" aria-labelledby="nav-usuarios-tab"><?php //include_once __DIR__ . '/Partials/adminUsuarios.php'?></div>
        <div class="tab-pane fade" id="nav-torneos" role="tabpanel" aria-labelledby="nav-torneos-tab"><?php //include_once __DIR__ . '/Partials/adminTorneos.php'?></div>
        <div class="tab-pane fade" id="nav-equipos" role="tabpanel" aria-labelledby="nav-equipos-tab"><?php //include_once __DIR__ . '/Partials/adminEquipos.php'?></div>
        <div class="tab-pane fade" id="nav-estadios" role="tabpanel" aria-labelledby="nav-estadios-tab"><?php //include_once __DIR__ . '/Partials/adminEstadios.php'?></div>
        <div class="tab-pane fade" id="nav-partidos" role="tabpanel" aria-labelledby="nav-partidos-tab"><?php include_once __DIR__ . '/Partials/adminPartidos.php'?></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>