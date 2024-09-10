<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/NotificacionesUsuario.css') }}">
    <title>Atención Profesional</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/Imagenes/LogoTranquilidad.jpg') }}" alt="Logo de Atención Profesional">
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
        <div class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button class="search-button">Buscar</button>
            <button class="clear-button">Eliminar</button>
        </div>
        <div class="main-content">
            <div class="sidebar">
                <p>Recibidos</p>
                <p>Citas</p>
            </div>
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Cita</td>
                            <td>ANUNCIO</td>
                            <td>Tu cita ha sido agendada con el psicologo</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Tranquilidad</td>
                            <td>REPORTE</td>
                            <td>Tu contraseña ha sido actualizada</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>DiMaria</td>
                            <td>ANUNCIO</td>
                            <td>DiMaria le ha dado me gusta a tu comentario</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Tranquilidad</td>
                            <td>REPORTE</td>
                            <td>Nueva actualización disponible, instálala ahora</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Cita</td>
                            <td>ANUNCIO</td>
                            <td>Tu cita ha sido cancelada satisfactoriamente</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Cita</td>
                            <td>REPORTE</td>
                            <td>Has alcanzado un nuevo récord, sigue así</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Maria</td>
                            <td>ANUNCIO</td>
                            <td>Maria ha respondido a tu comentario</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Rene H.</td>
                            <td>ANUNCIO</td>
                            <td>Rene le ha dado me gusta a tu comentario</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Tranquilidad</td>
                            <td>REPORTE</td>
                            <td>Nuevos perfiles disponibles! Desbloquéalos ahora</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Cita</td>
                            <td>ANUNCIO</td>
                            <td>Tu cita ha sido cancelada con el psicologo</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Cita</td>
                            <td>ANUNCIO</td>
                            <td>El psicologo ha subido los archivos de tu cita</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        <div class="texto-footer">
            <span>¿Quienes somos? </span>
        </div>
    </footer>
</body>
</html>
