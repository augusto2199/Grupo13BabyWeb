<?php
session_start();

// Si no hay una sesión activa (el usuario no está autenticado), redirigir al login
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php');  // Asegúrate de que la ruta a tu página de login sea correcta
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/Backoffice/Css/indexAdmin.css">
</head>

<body>



    <div class="container home">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <!-- Botones de navegación -->
                <button class="btn btn-outline-primary btn-lg rounded-3 shadow-sm ms-2" id="nav-usuarios-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-usuarios" type="button" role="tab"
                    aria-controls="nav-usuarios" aria-selected="true">
                    Usuarios
                </button>

                <button class="btn btn-outline-primary btn-lg rounded-3 shadow-sm ms-2" id="nav-torneos-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-torneos" type="button" role="tab"
                    aria-controls="nav-torneos" aria-selected="false">
                    Torneos
                </button>

                <button class="btn btn-outline-primary btn-lg rounded-3 shadow-sm ms-2" id="nav-equipos-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-equipos" type="button" role="tab"
                    aria-controls="nav-equipos" aria-selected="false">
                    Equipos
                </button>

                <button class="btn btn-outline-primary btn-lg rounded-3 shadow-sm ms-2" id="nav-estadios-tab"
                    data-bs-toggle="tab" data-bs-target="#nav-estadios" type="button" role="tab"
                    aria-controls="nav-estadios" aria-selected="false">
                    Estadios
                </button>

                <!-- Botón de Cerrar Sesión -->
                <a href="#" class="btn btn-danger btn-lg rounded-3 shadow-sm ms-auto d-block" data-bs-toggle="modal"
                    data-bs-target="#confirmModal">
                    Cerrar sesión
                </a>


            </div>

            <!-- Modal de confirmación -->
            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmModalLabel">Confirmación de Cierre de Sesión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas cerrar sesión?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a href="Partials/logout.php" class="btn btn-danger">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-usuarios" role="tabpanel" aria-labelledby="nav-usuarios-tab">
                <?php include_once __DIR__ . '/Partials/adminUsuarios.php' ?></div>
            <div class="tab-pane fade" id="nav-torneos" role="tabpanel" aria-labelledby="nav-torneos-tab">
                <?php //include_once __DIR__ . '/Partials/adminTorneos.php' ?></div>
            <div class="tab-pane fade" id="nav-equipos" role="tabpanel" aria-labelledby="nav-equipos-tab">
                <?php //include_once __DIR__ . '/Partials/adminEquipos.php' ?></div>
            <div class="tab-pane fade" id="nav-estadios" role="tabpanel" aria-labelledby="nav-estadios-tab">
                <?php //include_once __DIR__ . '/Partials/adminEstadios.php' ?></div>
            <div class="tab-pane fade" id="nav-partidos" role="tabpanel" aria-labelledby="nav-partidos-tab">
                <?php //include_once __DIR__ . '/Partials/adminPartidos.php' ?></div>




        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>