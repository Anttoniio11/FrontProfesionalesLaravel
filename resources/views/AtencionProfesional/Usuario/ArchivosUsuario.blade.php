<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{ asset('css/ArchivosUsuario.css') }}">
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
  <main>
    <section class="files-section">
      <h2>ARCHIVOS</h2>
      <div class="search-container">
        <input type="text" class="search-bar" placeholder="Buscar...">
        <button class="search-button">Buscar</button>
    </div>
      <div class="file-item">
        <div class="file-icon">
          <img class="imagen" src="../Imagenes/lista.png" alt="Foto de perfil del usuario">
        </div>
        <span>Informe_SaludMental_Paciente_Anonimo_14_05.pdf</span>
        <div class="settings-icon">
          <img src="../Imagenes/Pdf.png" alt="Settings Icon">
        </div>
      </div>
      <div class="file-item">
        <div class="file-icon">
          <img class="imagen" src="../Imagenes/lista.png" alt="Foto de perfil del usuario">
        </div>
        <span>Sesiones_Habilidades_Blandas_Roger_Blant.pdf</span>
        <div class="settings-icon">
          <img src="../Imagenes/Pdf.png" alt="Settings Icon">
        </div>
      </div>

      <div class="file-item">
        <div class="file-icon">
          <img class="imagen" src="../Imagenes/lista.png" alt="Foto de perfil del usuario">
        </div>
        <span>Sesiones_Habilidades_Blandas_Roger_Blant.pdf</span>
        <div class="settings-icon">
          <img src="../Imagenes/Pdf.png" alt="Settings Icon">
        </div>
      </div>

      <div class="file-item">
        <div class="file-icon">
          <img class="imagen" src="../Imagenes/lista.png" alt="Foto de perfil del usuario">
        </div>
        <span>Sesiones_Habilidades_Blandas_Roger_Blant.pdf</span>
        <div class="settings-icon">
          <img src="../Imagenes/Pdf.png" alt="Settings Icon">
        </div>
      </div>
    </section>
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