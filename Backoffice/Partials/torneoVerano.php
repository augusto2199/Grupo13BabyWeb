<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav" style="height: 56px;">
    <div class="container px-4" style="display: flex; align-items: center;">
        
        <a class="navbar-brand" href="#page-top" style="display: flex; align-items: center;">
            <img src="./img/Argentina.png" alt="Logo" style="height: 55px; width: auto; margin-right: 10px;">
            LIGA ARGENTINA BABY FUTBOL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto" style="gap: 20px;"> 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="torneosDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff; font-weight: bold;">
                        Torneos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="torneosDropdown">
                        <li><a class="dropdown-item" href="#torneoVerano" style="color: #333333;">Torneo Verano</a></li>
                        <li><a class="dropdown-item" href="#torneoB" style="color: #333333;">Torneo Anual</a></li>
                        <li><a class="dropdown-item" href="#torneoC" style="color: #333333;">Copa Challenger</a></li>
                        <li><a class="dropdown-item" href="#torneoC" style="color: #333333;">Copa de Campeones</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#noticias" style="color: #ffffff; font-weight: bold;">Noticias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="equiposDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff; font-weight: bold;">
                        Equipos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="equiposDropdown">
                        <li><a class="dropdown-item" href="#zonaA">ZONA A</a></li>
                        <li><a class="dropdown-item" href="#zonaB">ZONA B</a></li>
                        <li><a class="dropdown-item" href="#zonaC">ZONA C</a></li>
                        <li><a class="dropdown-item" href="#zonaD">ZONA D</a></li>
                        <li><a class="dropdown-item" href="#zonaE">ZONA E</a></li>
                        <li><a class="dropdown-item" href="#zonaF">ZONA F</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white btn-custom" href="#" data-bs-toggle="modal"
                        data-bs-target="#ContactoModal">
                        <img src="" alt="" style="height: 20px; width: auto; margin-right: 8px;">Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white btn-custom" href="#" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        <img src="./img/contrasena.png" alt="Logo" style="height: 20px; width: auto; margin-right: 8px;">Iniciar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Estilos adicionales -->
<style>
    .navbar-nav .nav-link, .dropdown-menu .dropdown-item {
        color: #ffffff !important; /* Letras blancas para todo el navbar */
        font-weight: bold;
        transition: color 0.3s, background-color 0.3s;
    }

    /* Efecto al pasar por encima */
    .navbar-nav .nav-link:hover, .dropdown-menu .dropdown-item:hover {
        color: #ffffff !important;
        background-color: #007bff !important; /* Mismo color de hover para todos */
    }

    /* Color de los elementos dentro del dropdown (por defecto) */
    .dropdown-menu .dropdown-item {
        color: #333333 !important;
    }
</style>