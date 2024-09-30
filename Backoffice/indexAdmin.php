<?php

require __DIR__ . '/../Backoffice/Entity/TorneoEntity.php';
require __DIR__ . '/../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/../Backoffice/DataAccess/TorneoDaoMySql.php';
require __DIR__ . '/../Backoffice/Business/Business.php';
require __DIR__ . '/../Backoffice/Business/TorneoBusiness.php';


$torneoBusiness = new TorneoBusiness;
$torneos = $torneoBusiness->all();


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

<div>

<nav class="navbar navbar-expand-lg bg-body-tertiary header">
  <div class="container">
    <a class="navbar-brand" href="/../index.php"><img src="/../img/soccer-ball-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="/../GRUPO13BABYWEB/Backoffice/Pages/misTorneos.php">Torneos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/../GRUPO13BABYWEB/Backoffice/Pages/misEquipos.php">Equipos</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/../GRUPO13BABYWEB/Backoffice/Pages/misArbitros.php">Arbitros</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/../GRUPO13BABYWEB/Backoffice/Pages/misEquipos.php">Estadios</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/../Backoffice/indexAdmin.php">Jugadores</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="/../Backoffice/indexAdmin.php">Partidos</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>