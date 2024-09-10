<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/ReseñasUsuario.css') }}">
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
            <section class="comments-section">
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Macalister Silva</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Realizamos el trabajo descrito por el profe y gracias a Dios se alcanzo la victoria. SML</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Alfredo Di Stefano</h3>
                    <p class="stars">★★★★★</p>
                    <p class="comment-text">No sé la cifra exacta de lo que me pagaban en Millonarios, pero era mucho para mí.</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Juan David Pineda</h3>
                    <p class="stars">★★★☆☆</p>
                    <p class="comment-text">ohh diablos mañana hay examen</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
                </div>
              </div>
              <div class="comment-card">
                <div class="comment">
                  <img class="imagen-usuario" src="../Imagenes/FotoUsuario.png" alt="Foto de perfil del usuario">
                  <div class="comment-info">
                    <h3>Ronaldo Nassario</h3>
                    <p class="stars">★★★★☆</p>
                    <p class="comment-text">Es muy buen especialista lo recomiendo!!!</p>
                  </div>
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
