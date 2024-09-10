<!DOCTYPE html> 
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/homeUsuario.css') }}">
    <title>Atención Profesional</title>
    </head>
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
      
  <main class="body">
    <body>
      <div class="frases">
          <p> ←Respira. Todo estará bien. A veces, es necesario solo un paso a la vez.→</p>
      </div>
  
      <div class="carrusel">
        <a href="{{ route('citas.usuario') }}">
          <div class="cuadro">
            <img src="{{ asset('img/Imagenes/Citas.png') }}" alt="Citas">
            <h3>Citas</h3>
          </div>
        </a>
        <a href="{{ route('profesionales.usuario') }}">
          <div class="cuadro">
            <img src="{{ asset('img/Imagenes/Profesional.png') }}" alt="Citas">
            <h3>Profesionales</h3>
          </div>
        </a> 
        <a href="{{ route('recursos.usuario') }}">
          <div class="cuadro">
            <img src="{{ asset('img/Imagenes/Recurso.png') }}" alt="Citas">
            <h3>Recursos</h3>
          </div>
        </a>
        <a href="../Notificaciones_Usuario/NotificacionesUsuario.html">
          <div class="cuadro">
            <img src="{{ asset('img/Imagenes/notificaciones.png') }}" alt="Citas">
            <h3>Notificaciones</h3>
          </div>
        </a>
        <a href="{{ route('historial.pagos.usuario') }}">
          <div class="cuadro">
            <img src="{{ asset('img/Imagenes/Pagos.png') }}" alt="Citas">
            <h3>Historial de pagos</h3>
          </div>
        </a>
          
      </div>

      <div class="flecha">
        <img src="{{ asset('img/Imagenes/FlechaAbajo.png') }}" alt="">
      </div>

      <div class="section">
        <div class="purple-section">
            <h2>¿Por qué es importante consultar?</h2>
            <!-- <img class="img-abajo" src="../Imagenes/ImportanteConsultar.png" alt="Imagen ilustrativa"> -->
        </div>
        <div class="white-section">
            <p>Consultar ayuda a ganar perspectiva sobre nuestras propias emociones y pensamientos, facilitando una mejor comprensión de nosotros mismos. Al expresar lo que sentimos y pensamos, podemos clarificar nuestras preocupaciones y encontrar formas constructivas de abordarlas. Además, nos proporciona una oportunidad invaluable para recibir retroalimentación y orientación externa, lo cual es crucial para el crecimiento personal y el desarrollo de estrategias efectivas para manejar situaciones difíciles.</p>
        </div>
      </div>

      <div class="section2">
        <div class="white-section2">
            <p>La consulta psicológica proporciona un espacio seguro para explorar y procesar emociones complejas, lo que puede aliviar el estrés, mejorar la autoestima y fortalecer la resiliencia emocional.</p>
        </div>
        <div class="purple-section2">
          <h2>¿Cómo puede la consulta psicológica mejorar mi bienestar emocional?</h2>
          <!-- <img class="img-abajo" src="../Imagenes/BienestarEmo.png" alt="Imagen ilustrativa"> -->
        </div>

      </div>

  </body>
  </main>
  <footer class="footer">
    <div class="footer-links">
        <div class="contactanos">
        <span>Contactanos</span>
            <div class="imagenes-container">
            <a href="https://www.whatsapp.com/" _blank><img class="imagen-footer" src="{{ asset('img/Imagenes/WhatsApp.png') }}" alt="Whatsapp"></a>
            <a href=""><img class="imagen-footer" src="{{ asset('img/Imagenes/Telegram App.png') }}" alt="Telegram"></a>
            </div>
        </div>
    </div>
    <div class="canales-atencion">
        <span>Canales de atencion</span>
        <div class="imagenes-container">
          <a href=""><img class="imagen-footer" src="{{ asset('img/Imagenes/Email.png') }}" alt="Correo"></a>
        </div>
    </div>
    <div class="social-media">
        <span>Redes Sociales</span>
        <div class="imagenes-container">
          <a href=""><img class="imagen-footer" src="{{ asset('img/Imagenes/Facebook.png') }}" alt="Facebook"></a>
          <a href=""><img class="imagen-footer" src="{{ asset('img/Imagenes/Instagram.png') }}" alt="Instagram"></a>
        </div>
    </div>
    </div>
    <div class="texto-footer">
    <span>¿Quienes somos? </span>
    </div>
</footer>
</html> 