<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{ asset('css/EncuestaInicial.css') }}">
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

  <main class="body">

    <br><h2>Formulario de Evaluación</h2> <br>
    
    <div class="container">
        
        <br><br>
        <form>
            <div class="pregunta">
                <label for="tratamiento">¿Has recibido tratamiento profesional para tus problemas anteriormente?</label><br>
                <input type="radio" id="si" name="tratamiento" value="si">
                <label for="si">Sí</label>
                <input type="radio" id="no" name="tratamiento" value="no">
                <label for="no">No</label>
            </div>
            <div class="pregunta">
                <label for="problemas">¿Qué tipos de problemas estás experimentando?</label><br>
                <select id="problemas" name="problemas">
                    <option value="ansiedad">Ansiedad</option>
                    <option value="depresion">Depresión</option>
                    <option value="estres">Estrés</option>
                </select>
            </div>
            <div class="pregunta">
                <label for="impacto">¿En qué medida te afectan estos problemas en tu vida diaria?</label><br>
                <select id="impacto" name="impacto">
                    <option value="minimo">Mínimo</option>
                    <option value="moderado">Moderado</option>
                    <option value="severo">Severo</option>
                </select>
            </div>
            <div class="pregunta">
              <label for="tratamiento">¿Has recibido tratamiento profesional para tus problemas anteriormente?</label><br>
              <input type="radio" id="si" name="tratamiento" value="si">
              <label for="si">Sí</label>
              <input type="radio" id="no" name="tratamiento" value="no">
              <label for="no">No</label>
          </div>
          <div class="pregunta">
              <label for="problemas">¿Qué tipos de problemas estás experimentando?</label><br>
              <select id="problemas" name="problemas">
                  <option value="ansiedad">Ansiedad</option>
                  <option value="depresion">Depresión</option>
                  <option value="estres">Estrés</option>
              </select>
          </div>
          <div class="pregunta">
              <label for="impacto">¿En qué medida te afectan estos problemas en tu vida diaria?</label><br>
              <select id="impacto" name="impacto">
                  <option value="minimo">Mínimo</option>
                  <option value="moderado">Moderado</option>
                  <option value="severo">Severo</option>
              </select>
          </div>
          <div class="pregunta">
            <label for="tratamiento">¿Has recibido tratamiento profesional para tus problemas anteriormente?</label><br>
            <input type="radio" id="si" name="tratamiento" value="si">
            <label for="si">Sí</label>
            <input type="radio" id="no" name="tratamiento" value="no">
            <label for="no">No</label>
        </div>
        <div class="pregunta">
            <label for="problemas">¿Qué tipos de problemas estás experimentando?</label><br>
            <select id="problemas" name="problemas">
                <option value="ansiedad">Ansiedad</option>
                <option value="depresion">Depresión</option>
                <option value="estres">Estrés</option>
            </select>
        </div>
        <div class="pregunta">
            <label for="impacto">¿En qué medida te afectan estos problemas en tu vida diaria?</label><br>
            <select id="impacto" name="impacto">
                <option value="minimo">Mínimo</option>
                <option value="moderado">Moderado</option>
                <option value="severo">Severo</option>
            </select>
        </div>
        </form>
        <a href="{{ route('home.usuario') }}"> 
          <button>Enviar</button>
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