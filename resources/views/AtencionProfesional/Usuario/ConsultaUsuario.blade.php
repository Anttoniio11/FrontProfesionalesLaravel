<!DOCTYPE html> 
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/ConsultaUsuario.css') }}">
    <title>Atención Profesional</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
		<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
		<script type="text/javascript">
			window.tailwind.config = {
				darkMode: ['class'],
				theme: {
					extend: {
						colors: {
							border: 'hsl(var(--border))',
							input: 'hsl(var(--input))',
							ring: 'hsl(var(--ring))',
							background: 'hsl(var(--background))',
							foreground: 'hsl(var(--foreground))',
							primary: {
								DEFAULT: 'hsl(var(--primary))',
								foreground: 'hsl(var(--primary-foreground))'
							},
							secondary: {
								DEFAULT: 'hsl(var(--secondary))',
								foreground: 'hsl(var(--secondary-foreground))'
							},
							destructive: {
								DEFAULT: 'hsl(var(--destructive))',
								foreground: 'hsl(var(--destructive-foreground))'
							},
							muted: {
								DEFAULT: 'hsl(var(--muted))',
								foreground: 'hsl(var(--muted-foreground))'
							},
							accent: {
								DEFAULT: 'hsl(var(--accent))',
								foreground: 'hsl(var(--accent-foreground))'
							},
							popover: {
								DEFAULT: 'hsl(var(--popover))',
								foreground: 'hsl(var(--popover-foreground))'
							},
							card: {
								DEFAULT: 'hsl(var(--card))',
								foreground: 'hsl(var(--card-foreground))'
							},
						},
					}
				}
			}
		</script>
		<style type="text/tailwindcss">
			@layer base {
				:root {
					--background: 0 0% 100%;
--foreground: 240 10% 3.9%;
--card: 0 0% 100%;
--card-foreground: 240 10% 3.9%;
--popover: 0 0% 100%;
--popover-foreground: 240 10% 3.9%;
--primary: 240 5.9% 10%;
--primary-foreground: 0 0% 98%;
--secondary: 240 4.8% 95.9%;
--secondary-foreground: 240 5.9% 10%;
--muted: 240 4.8% 95.9%;
--muted-foreground: 240 3.8% 46.1%;
--accent: 240 4.8% 95.9%;
--accent-foreground: 240 5.9% 10%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 0 0% 98%;
--border: 240 5.9% 90%;
--input: 240 5.9% 90%;
--ring: 240 5.9% 10%;
--radius: 0.5rem;
				}
				.dark {
					--background: 240 10% 3.9%;
--foreground: 0 0% 98%;
--card: 240 10% 3.9%;
--card-foreground: 0 0% 98%;
--popover: 240 10% 3.9%;
--popover-foreground: 0 0% 98%;
--primary: 0 0% 98%;
--primary-foreground: 240 5.9% 10%;
--secondary: 240 3.7% 15.9%;
--secondary-foreground: 0 0% 98%;
--muted: 240 3.7% 15.9%;
--muted-foreground: 240 5% 64.9%;
--accent: 240 3.7% 15.9%;
--accent-foreground: 0 0% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 0 0% 98%;
--border: 240 3.7% 15.9%;
--input: 240 3.7% 15.9%;
--ring: 240 4.9% 83.9%;
				}
			}
		</style>
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
        
        <div class="flex p-4 border border-border rounded-lg">
  
            <div class="flex-1 flex flex-col items-center justify-center border border-border rounded-lg p-4">
              <img src="../Imagenes/Consulta.jpg" alt="Video feed" class="w-full h-auto rounded-lg">
              <div class="flex justify-around w-full mt-4 p-2 border-t border-border">
                <button class="bg-secondary text-secondary-foreground p-2 rounded-full">
                  <img aria-hidden="true" alt="music-note" src="https://openui.fly.dev/openui/24x24.svg?text=🎵" />
                </button>
                <button class="bg-secondary text-secondary-foreground p-2 rounded-full">
                  <img aria-hidden="true" alt="microphone" src="https://openui.fly.dev/openui/24x24.svg?text=🎤" />
                </button>
                <button class="bg-destructive text-destructive-foreground p-2 rounded-full">
                  <a href="../EscribirReseña_Usuario/EscribirReseñaUsuario.html"><img aria-hidden="true" alt="phone-hangup" src="https://openui.fly.dev/openui/24x24.svg?text=📞" /></a>
                </button>
                <button class="bg-secondary text-secondary-foreground p-2 rounded-full">
                  <img aria-hidden="true" alt="smile" src="https://openui.fly.dev/openui/24x24.svg?text=😊" />
                </button>
                <button class="bg-secondary text-secondary-foreground p-2 rounded-full">
                  <img aria-hidden="true" alt="settings" src="https://openui.fly.dev/openui/24x24.svg?text=⚙️" />
                </button>
              </div>
            </div>
            
            <div class="w-1/4 ml-4 flex flex-col border border-border rounded-lg p-4">
              <div class="flex-1 bg-muted rounded-lg"></div>
              <div class="flex items-center mt-4">
                <input type="text" class="flex-1 p-2 border border-border rounded-lg" placeholder="Type a message...">
                <button class="bg-primary text-primary-foreground p-2 rounded-lg ml-2">
                  <img aria-hidden="true" alt="send-arrow" src="https://openui.fly.dev/openui/24x24.svg?text=➡️" />
                </button>
              </div>
            </div>
          </div>
               
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