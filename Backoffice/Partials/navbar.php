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
                        <li><a class="dropdown-item" href="Partials/torneoVerano.php" style="color: #333333;">Torneo Verano</a></li>
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

<style>
    .alert-success {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
        display: none;
    }
</style>

    <div class="alert alert-success" id="registroExitoso" role="alert">
        ¡Registro exitoso!
    </div>

  <!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Logo de Argentina -->
                <img src="./img/argentina.png" alt="Logo" style="height: 65px; width: auto; opacity: 0.8; margin-right: 10px;">
                <h5 class="modal-title text-center w-100" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">              
                <!-- Formulario de login -->
                <form method="POST" action="Backoffice/Partials/login.php">
                    <!-- Campo de correo electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Introduce tu correo" required>
                    </div>
                    <!-- Campo de contraseña -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <!-- Campo de contraseña -->
                            <input type="password" class="form-control" name="password" id="password" placeholder="Introduce tu contraseña" required>
                            <!-- Botón para mostrar/ocultar contraseña -->
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="bi bi-eye"></i> <!-- Icono de ojo para mostrar contraseña -->
                            </button>
                        </div>
                        <a href="#" class="d-block text-end mt-2" data-bs-toggle="modal" data-bs-target="#ModalContasenia">Olvidé mi contraseña</a>
                    </div>
                    <!-- Botón para iniciar sesión -->
                    <button type="submit" class="btn btn-primary w-100 btn-sm">Iniciar Sesión</button>
                </form>

                <!-- Enlace para registro de usuario -->
                <p class="text-center mt-3">¿No tienes cuenta? ¡Regístrate ahora!</p>
                <button type="button" class="btn btn-outline-primary w-100 btn-sm" data-bs-toggle="modal" data-bs-target="#registroModal">
                    Crea tu Cuenta en LABF
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
    // Obtener el botón y el campo de contraseña
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    
    // Función para alternar entre mostrar y ocultar la contraseña
    togglePassword.addEventListener('click', function (e) {
        // Alternar el tipo de campo entre 'password' y 'text'
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Cambiar el icono de ojo según el estado
        this.innerHTML = type === 'password' 
            ? '<i class="bi bi-eye"></i>'  // Mostrar icono de ojo cerrado
            : '<i class="bi bi-eye-slash"></i>';  // Mostrar icono de ojo abierto
    });
</script>

<!-- Modal Olvidé mi Contraseña -->
<div class="modal fade" id="ModalContasenia" tabindex="-1" aria-labelledby="ModalContasenia" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="./img/argentina.png" alt="Logo" style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                <h5 class="modal-title text-center w-100" id="ModalContasenia">Restablecer Contraseña</h5>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <p class="text-center mt-3">Recibirás un enlace para restablecer tu contraseña. Por favor completa e proceso ya que el enlace expiara despues de un tiempo determinado</p>
                        <label for="resetEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="resetEmail" placeholder="Introduce tu correo">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 btn-sm">Enviar Enlace de Restablecimiento</button>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Volver</button>
            </div>
        </div>
    </div>
</div>


 <!-- Modal Registro -->
 <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="./img/argentina.png" alt="Logo"
                            style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                        <h5 class="modal-title text-center w-100" id="registroModalLabel">Registro</h5>
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <button type="submit" class="btn btn-primary w-100 btn-sm">Registrar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" data-bs-toggle="modal"
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
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"
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




<script>
    document.getElementById('registroForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Evita el envío del formulario
        const formData = new FormData(this);

        fetch('registro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Muestra el mensaje de respuesta
            if (data.includes("Registro exitoso")) {
                $('#registroModal').modal('hide'); // Cierra el modal
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>


<!-- Modal Términos y Condiciones -->
<div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="./img/argentina.png" alt="Logo"
                    style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                <h5 class="modal-title" id="terminosModalLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Bienvenido a la Liga Argentina de Baby Fútbol. Al registrarte en nuestro sitio web, aceptas cumplir
                    con los siguientes términos y condiciones. Por favor, léelos cuidadosamente.
                </p>

                <h6>1. Aceptación de los Términos</h6>
                <p>
                    Al acceder y utilizar nuestro sitio, aceptas estar sujeto a estos Términos y Condiciones, así como a
                    nuestra Política de Privacidad. Si no estás de acuerdo con alguna parte de estos términos, no
                    deberías registrarte ni utilizar nuestros servicios.
                </p>

                <h6>2. Uso del Sitio</h6>
                <p>
                    Nuestro sitio está destinado a proporcionar información y servicios relacionados con la Liga
                    Argentina de Baby Fútbol. No debes utilizar este sitio para ningún propósito ilegal o no autorizado.
                    El uso indebido del sitio resultará en la cancelación de tu cuenta.
                </p>

                <h6>3. Registro de Usuario</h6>
                <p>
                    Para registrarte, debes proporcionar información veraz, completa y actualizada. Al crear una cuenta,
                    te comprometes a no compartir tu información de acceso con terceros. Eres responsable de mantener la
                    confidencialidad de tu cuenta y contraseña.
                </p>

                <h6>4. Política de Privacidad</h6>
                <p>
                    Al utilizar nuestro sitio, también aceptas nuestra Política de Privacidad, que describe cómo
                    recopilamos, utilizamos y protegemos tu información personal. Te recomendamos leerla para comprender
                    mejor nuestros procedimientos.
                </p>

                <h6>5. Propiedad Intelectual</h6>
                <p>
                    Todo el contenido disponible en nuestro sitio, incluyendo textos, gráficos, logotipos, imágenes y
                    software, es propiedad de la Liga Argentina de Baby Fútbol o sus proveedores y está protegido por
                    leyes de derechos de autor. No puedes utilizar, reproducir o distribuir el contenido sin
                    autorización expresa.
                </p>

                <h6>6. Modificaciones de los Términos</h6>
                <p>
                    Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento. Te
                    notificaremos sobre los cambios publicando los términos actualizados en nuestro sitio web. Es tu
                    responsabilidad revisar estos términos periódicamente para estar al tanto de las modificaciones.
                </p>

                <h6>7. Terminación</h6>
                <p>
                    Podemos cancelar o suspender tu cuenta en cualquier momento, sin previo aviso, si violas alguno de
                    estos términos. También puedes cerrar tu cuenta en cualquier momento poniéndote en contacto con
                    nosotros.
                </p>

                <h6>8. Limitación de Responsabilidad</h6>
                <p>
                    No somos responsables de ningún daño directo, indirecto, incidental o consecuente que resulte del
                    uso o la incapacidad de uso de nuestro sitio.
                </p>

                <h6>9. Ley Aplicable</h6>
                <p>
                    Estos Términos y Condiciones se rigen por las leyes vigentes en la República Argentina. Cualquier
                    disputa que surja del uso del sitio será resuelta ante los tribunales competentes de la Ciudad de
                    Buenos Aires.
                </p>

                <h6>10. Contacto</h6>
                <p>
                    Si tienes alguna pregunta sobre estos Términos y Condiciones, puedes ponerte en contacto con
                    nosotros a través de nuestro correo electrónico: <a
                        href="mailto:ligaargentinaBF@gmail.com">ligaargentinaBF@gmail.com</a>.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Volver</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Contacto-->
<div class="modal fade" id="ContactoModal" tabindex="-1" aria-labelledby="ContactoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal más amplio -->
        <div class="modal-content" style="height: 90vh;"> <!-- Altura del modal un poco menor que el viewport -->
            <div class="modal-header">
                <img src="./img/argentina.png" alt="Logo"
                    style="height: 65px; width: auto; opacity: 8; margin-right: 10px;">
                <h5 class="modal-title text-center w-100" id="ContactoModalLabel">Contacto</h5>
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0 h-100">
                    <!-- Columna izquierda para la información de contacto -->
                    <div class="col-md-6 d-flex flex-column position-relative">
                        <!-- Imagen con margen blanco y ocupando todo el alto del modal -->
                        <img src="./img/pelotas.jpg" alt="Imagen de contacto" class="img-fluid position-absolute" style="top: 0; left: 0; width: calc(100% - 20px); height: calc(100% - 20px); object-fit: cover; 
                                    box-sizing: border-box; margin: 10px;">

                        <!-- Información de contacto encima de la imagen -->
                        <div class="position-absolute top-0 start-0 p-4" style="z-index: 1; color: black;">
                            <p class="lead mb-2">Nuestro horario de atención es de lunes a viernes de 10 a 18 Hs.</p>
                            <ul class="mb-0">
                                <li><strong>Dirección:</strong> Av Libertad 248</li>
                                <li><strong>Teléfono:</strong> 0220-4948069</li>
                                <li><strong>E-Mail:</strong> ligaargentinaBF@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Columna derecha para el formulario -->
                    <div class="col-md-6 d-flex align-items-center">
                        <form class="w-100 p-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Introduce tu nombre completo">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Introduce tu correo">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" rows="4"
                                    placeholder="Escribe tu mensaje aquí"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-sm">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    // Mostrar modal de registro al cerrar el de términos y condiciones
    document.getElementById('terminosModal').addEventListener('hidden.bs.modal', function () {
        var registroModal = bootstrap.Modal.getOrCreateInstance(document.getElementById('registroModal'));
        registroModal.show();
    });
</script>