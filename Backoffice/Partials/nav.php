<!-- Nav -->
<style>
    .navbar-nav .nav-link,
    .dropdown-menu .dropdown-item {
        color: #ffffff !important;      
        font-weight: bold;
        transition: color 0.3s, background-color 0.3s;
        padding: 5px 10px;
        
    }
    
    .navbar-nav .nav-link:hover,
    .dropdown-menu .dropdown-item:hover {
        color: #ffffff !important;
        background-color: #007bff !important;
        
    }
   
    .dropdown-menu .dropdown-item {
        color: #333333 !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav" style="height: 56px;">
    <div class="container px-4" style="display: flex; align-items: center;">

        <a class="navbar-brand" href="#page-top" style="display: flex; align-items: center; margin-right: 0;">
            <img src="./img/Argentina.png" alt="Logo" style="height: 55px; width: auto; margin-right: 5px;">         
            LIGA ARGENTINA BABY FUTBOL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto" style="gap: 10px; padding: 0;"> 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="torneosDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff; font-weight: bold;">
                        Torneos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="torneosDropdown">
                        <li><a class="dropdown-item" href="Partials/torneoVerano.php" style="color: #333333;">Torneo
                                Verano</a></li>
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
                        data-bs-target="#ContactoModal" style="padding: 5px 10px;"> 
                        <img src="" alt="" style="height: 20px; width: auto; margin-right: 5px;">Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white btn-custom" href="#" data-bs-toggle="modal"
                        data-bs-target="#loginModal" style="padding: 5px 10px;"> 
                        <img src="./img/contrasena.png" alt="Logo"
                            style="height: 20px; width: auto; margin-right: 5px;">Iniciar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>    
    .alert-success {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;      
        display: none;
    }
</style>
</head>

<body>  
    <div class="alert alert-success" id="registroExitoso" role="alert">
        ¡Registro exitoso!
    </div>

    <!-- Modal Login-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="./img/argentina.png" alt="Logo"
                        style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                    <h5 class="modal-title text-center w-100" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Introduce tu correo">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password"
                                placeholder="Introduce tu contraseña">
                            <a href="#" class="d-block text-end mt-2" data-bs-toggle="modal"
                                data-bs-target="#ModalContasenia">Olvidé mi contraseña</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                        <p class="text-center mt-3">¿No tienes cuenta? ¡Regístrate ahora!</p>
                    </form>
                    <button type="submit" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                        data-bs-target="#registroModal">Crea tu Cuenta en LABF</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Registro -->
    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="./img/argentina.png" alt="Logo"
                        style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                    <h5 class="modal-title text-center w-100" id="registroModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registroForm"> 
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombreUsuario"
                                placeholder="Introduce tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellidoUsuario"
                                placeholder="Introduce tu apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="emailUsuario"
                                placeholder="Introduce tu correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordUsuario" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="passwordUsuario" name="passwordUsuario"
                                placeholder="Introduce tu contraseña" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edadUsuario"
                                placeholder="Introduce tu edad" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">
                                Acepto los <a href="#terminos" data-bs-toggle="modal"
                                    data-bs-target="#terminosModal">Términos y Condiciones</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Volver</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirmación -->
    <div class="modal fade" id="confirmacionModal" tabindex="-1" aria-labelledby="confirmacionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"
                style="background-color: #d9d9d9; border-radius: 8px; border: 4px solid #28a745; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);">
                <div class="modal-header" style="background-color: #28a745; color: white;">
                    <h5 class="modal-title" id="confirmacionModalLabel">Registro Exitoso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="opacity: 0.8;"></button>
                </div>
                <div class="modal-body text-center" style="color: black;">
                    <p>Tu registro se ha completado exitosamente. Ahora puedes iniciar sesión.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript para redirigir al hacer clic en "Aceptar" -->
    <script>
        document.getElementById('aceptarRegistro').addEventListener('click', function () {
            // Redireccionar a la página de inicio
            window.location.href = '/Grupo13BabyWeb/index.php';
        });
    </script>

    <!-- JavaScript para manejar el envío del formulario  -->
    <script>
        document.getElementById('registroForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Evita el envío tradicional del formulario

            // Crear el objeto FormData con los datos del formulario
            const formData = new FormData(this);

            // Enviar el formulario con AJAX
            fetch('/Grupo13BabyWeb/Backoffice/Partials/registro.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    if (data.trim() === 'success') { // Respuesta esperada del servidor en caso de éxito
                        // Ocultar el modal de registro y mostrar el modal de confirmación
                        var registroModal = new bootstrap.Modal(document.getElementById('registroModal'));
                        registroModal.hide();

                        var confirmacionModal = new bootstrap.Modal(document.getElementById('confirmacionModal'));
                        confirmacionModal.show();

                        // Redirigir después de 3 segundos
                        setTimeout(function () {
                            window.location.href = '/Grupo13BabyWeb/index.php';
                        }, 3000);
                    } else {
                        alert("Error: " + data); // Muestra el error en caso de fallo
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        // Redirigir al hacer clic en el botón "Aceptar" en el modal de confirmación
        document.getElementById('aceptarRegistro').addEventListener('click', function () {
            window.location.href = '/Grupo13BabyWeb/index.php';
        });
    </script>