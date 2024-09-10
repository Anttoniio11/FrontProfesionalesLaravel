<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/CitasUsuario.css') }}">
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


  <main class="body-content">
    <div class="container">
        <a href="{{ route('agendar.cita.usuario') }}">
        <div class="card">
          <img src="{{ asset('img/Imagenes/AgendarCita.png') }}" alt="">
          <h3>Agendar Cita</h3>
        </div>
      </a>
      <a href="{{ route('cancelar.cita.usuario') }}">
        <div class="card">
          <img src="{{ asset('img/Imagenes/CancelarCitas.png') }}" alt="">
          <h3>Cancelar Cita</h3>
        </div>
      </a>
      <a href="{{ route('citas.programadas.usuario') }}">
        <div class="card">
          <img src="{{ asset('img/Imagenes/CitasProgramadas.png') }}" alt="">
          <h3>Citas Programaadas</h3>
        </div>
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
