<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/AgendarCitaUsuario.css') }}">
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
    <body>
      
       
    <div class="container">
      <div class="nav">

        <label class="elegir">Especialidad</label><br>
        <select class="opciones" name="">
          <option value="ansiedad"></option>
            <option value="ansiedad">Psicología Clínica</option>
            <option value="depresion">Psicología Cognitiva</option>
            <option value="estres">Psicología del Desarrollo</option>
            <option value="ansiedad">Psicología Educativa</option>
            <option value="depresion">Psicología Neuropsicológica</option>
            <option value="estres">Psicología de la Salud</option>
            <option value="estres">Psicología Social</option>
        </select>
        <label class="elegir">Area</label><br>
        <select class="opciones" name="">
          <option value="ansiedad"></option>
            <option value="ansiedad">Psiquiatría</option>
            <option value="depresion">Trabajo Social Clínico</option>
            <option value="estres">Counseling (Consejería)</option>
            <option value="ansiedad">Educación Especial</option>
            <option value="depresion">Psicología Comunitaria</option>
            <option value="estres">Psicología de Emergencias</option>
        </select>
        <label class="elegir">Profesional</label><br>
        <select class="opciones" name="">
          <option value="ansiedad"></option>
            <option value="ansiedad">Don Juan Tenorio</option>
            <option value="depresion">Diego Armando Maradona</option>
            <option value="estres">Felipe Melo</option>
            <option value="ansiedad">Juan Roman Riquelme</option>
            <option value="depresion">Faustino Asprilla</option>
            <option value="estres">Cholo Simeone</option>
        </select>
          

      </div>
          <div class="datepicker">
              <div class="datepicker-top">
                  <div class="month-selector">
                      <span class="month-name">← Mayo 2024 →</span>
                  </div>
              </div>
              <div class="datepicker-calendar">
                  <span class="day">lun</span>
                  <span class="day">mar</span>
                  <span class="day">mie</span>
                  <span class="day">ju</span>
                  <span class="day">vi</span>
                  <span class="day">sa</span>
                  <span class="day">do</span>
                  <button class="date faded">30</button>
                  <button class="date">1</button>
                  <button class="date">2</button>
                  <button class="date">3</button>
                  <button class="date">4</button>
                  <button class="date">5</button>
                  <button class="date">6</button>
                  <button class="date">7</button>
                  <button class="date">8</button>
                  <button class="date ">9</button>
                  <button class="date">10</button>
                  <button class="date">11</button>
                  <button class="date current-day">12</button>
                  <button class="date">13</button>
                  <button class="date">14</button>
                  <button class="date">15</button>
                  <button class="date">16</button>
                  <button class="date">17</button>
                  <button class="date">18</button>
                  <button class="date">19</button>
                  <button class="date">20</button>
                  <button class="date">21</button>
                  <button class="date">22</button>
                  <button class="date">23</button>
                  <button class="date">24</button>
                  <button class="date">25</button>
                  <button class="date">26</button>
                  <button class="date">27</button>
                  <button class="date">28</button>
                  <button class="date">29</button>
                  <button class="date">30</button>
                  <button class="date">31</button>
                  <button class="date faded">1</button>
                  <button class="date faded">2</button>
                  <button class="date faded">3</button>
              </div>
              <!-- <button class="tarea">tareas</button> -->
          </div>
          <div class="historial">
            <div class="datepicker-calendar">
                <button class="date">08:00</button>
                <button class="date">09:00</button>
                <button class="date">10:00</button>
                <button class="date">11:00</button>
                <button class="date">12:00</button>
                <button class="date">13:00</button>
                <button class="date">14:00</button>
                <button class="date">15:00</button>
                <button class="date">16:00</button>
                <button class="date">17:00</button>
                <button class="date">18:00</button>
                <button class="date">19:00</button>
                <button class="date">20:00</button>
                <button class="date">21:00</button>
            </div>
            <a href="../PagosWeb_Usuario/PagosWebUsuario.html"><button class="enviar">Enviar</button></a>
        </div>
      </div>
        
    </body>

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
</html> 