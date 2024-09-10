<!DOCTYPE html> 
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/RecursosUsuario.css') }}">
    <title>Atención Profesional</title>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="{{ route('home.usuario') }}"><img src="{{ asset('img/Imagenes/LogoTranquilidad.jpg') }}" alt="Logo de Atención Profesional"></a>
                <span>Atención Profesional</span>
                </div>
                <div class="servicios">
                <span>Servicios</span>
                <div class="submenu">
                    <ul>
                    <li>Biblioterapia</li>
                    <li>Arteterapia</li>
                    <li>Musicoterapia</li>
                    <li>Ejercicios</li>
                    </ul> 
                </div>
                </div>
                <div class="user-info">
                <span>Juanito Alimaña</span>
                <img class="imagen-usuario" src="{{ asset('img/Imagenes/FotoUsuario.png') }}" alt="Foto de perfil del usuario">
                </div>
            </nav>
        </header>

        <div class="background-animation">
            <div class="ball ball1"></div>
            <div class="ball ball2"></div>
        </div>
        
        <main>
            <div class="background-animation">
                <div class="ball ball1"></div>
                <div class="ball ball2"></div>
            </div>
            
            <div class="grid"> 
                <a href="../Archivos_Usuario/ArchivosUsuario.html">
                    <div class="grid-item informes">Archivos</div>
                </a>
                <a href="../Informes1_Usuario/Informes1Usuario.html">
                    <div class="grid-item informes">Informes</div>
                </a>
                <a href="../Reseñas_Usuario/ReseñasUsuario.html">
                    <div class="grid-item resenas">Reseñas</div>
                </a>
                <a href="../HistoriaslCitas_Usuario/HistorialCitasUsuario.html">
                    <div class="grid-item historial">Historial de citas</div>
                </a>
                <a href="../Prontamente/Prontamente.html">
                    <div class="grid-item proximamente1">Proximamente :)</div>
                </a>
                <a href="../MisCodigosUsuario/MisCodigosUsuario.html">
                    <div class="grid-item proximamente2">Mis codigos</div> 
                </a>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-links">
                <div class="contactanos">
                <span>Contactanos</span>
                    <div class="imagenes-container">
                    <img class="imagen-footer" src="{{ asset('img/Imagenes/WhatsApp.png') }}" alt="Whatsapp">
                    <img class="imagen-footer" src="{{ asset('img/Imagenes/Telegram App.png') }}" alt="Telegram">
                    </div>
                </div>
            </div>
            <div class="canales-atencion">
                <span>Canales de atencion</span>
                <div class="imagenes-container">
                    <img class="imagen-footer" src="{{ asset('img/Imagenes/Email.png') }}" alt="Correo">
                </div>
            </div>
            <div class="social-media">
                <span>Redes Sociales</span>
                <div class="imagenes-container">
                    <img class="imagen-footer" src="{{ asset('img/Imagenes/Facebook.png') }}" alt="Facebook">
                    <img class="imagen-footer" src="{{ asset('img/Imagenes/Instagram.png') }}" alt="Instagram">
                </div>
            </div>
            </div>
            <div class="texto-footer">
            <span>¿Quienes somos? </span>
            </div>
        </footer>
  </body>
</html> 