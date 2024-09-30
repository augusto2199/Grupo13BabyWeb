<?php

require __DIR__ . '/../../Backoffice/Entity/ArbitroEntity.php';
require __DIR__ . '/..//../Backoffice/DataAccess/Dao.php';
require __DIR__ . '/..//../Backoffice/DataAccess/ArbitroDaoMySql.php';
require __DIR__ . '/..//../Backoffice/Business/Business.php';
require __DIR__ . '/..//../Backoffice/Business/ArbitroBusiness.php';

$ArbitroBusiness = new ArbitroBusiness;
$arbitro = $ArbitroBusiness->find($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbitro: <?php echo $arbitro->getNombre()?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>
<body>
    
    <div class="header">
    <?php include_once __DIR__ . '/../Partials/navbar.php'?>
    </div>

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>