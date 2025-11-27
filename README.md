# Sporter-tenis-deportivos
Venta de tenis
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporter tenis deportivos</title>
    <link rel="stylesheet" href="Css/estilo.css">
</head>

<body>

    <!-- MENÚ SUPERIOR -->
    <nav>
        <ul>
            <li><a href="#inicio">INICIO</a></li>
            <li><a href="mi cuenta.html">MI CUENTA</a></li>
            <li><a href="favoritos.html">FAVORITOS</a></li>
        </ul>
    </nav>

    <!-- SECCIÓN INICIO -->
    <section id="inicio"></section>

    <!-- BIENVENIDA -->
    <div id="bienvenida">
        <img src="imagenes/sporter.png" alt="Logo Sporter">
        <h2>¡Bienvenido a SPORTER!</h2>
        <p>Tenis Deportivos</p>
        <p>Es un gusto tenerte aquí. Esperamos que los modelos de tenis sean de tu agrado.</p>
    </div>

    <!-- FORMULARIO DE REGISTRO -->
    <div id="mainContent">

        <h1>Crear cuenta</h1>

        <input type="text" id="nombre" placeholder="Nombre completo">
        <input type="text" id="correo" placeholder="Correo o número">

        <div class="password-box">
            <input type="password" id="password" placeholder="Contraseña">
            <span class="toggle-btn" onclick="togglePassword()">Ver</span>
        </div>

        <button onclick="entrar()">Entrar</button>

        <div class="terminos">
            <input type="checkbox" id="acepto">
            <label for="acepto">Acepto términos y condiciones</label>
        </div>

    </div>

    <!-- CATÁLOGO -->
    <section id="catalogo">
        <h2>Catálogo de Tenis</h2>

        <div class="producto">
            <a href="index.html">
                <img src="imagenes/air force jordan.webp" alt="Tenis modelo 1">
            </a>
            <h3>Tenis Jordan Air Force 1</h3>
            <p>Precio: $2599 MXN</p>
        </div>

        <div class="producto">
            <a href="index2.html">
                <img src="imagenes/puma caven 2.0 lux.jpg" alt="Tenis modelo 2">
            </a>
            <h3>Puma Caven 2.0</h3>
            <p>Precio: $1946 MXN</p>
        </div>

        <div class="producto">
            <a href="index3.html">
                <img src="imagenes/adidas forum low.jpg" alt="Tenis modelo 3">
            </a>
            <h3>Adidas Forum Low</h3>
            <p>Precio: $1359 MXN</p>
        </div>

        <div class="producto">
            <a href="index4.html">
                <img src="imagenes/rebook.jpg" alt="Tenis modelo 4">
            </a>
            <h3>Rebook Club C 85</h3>
            <p>Precio: $1689 MXN</p>
        </div>

        <div class="producto">
            <a href="index5.html">
                <img src="imagenes/convers chuck taylor 70.jpg" alt="Tenis modelo 5">
            </a>
            <h3>Converse Chuck Taylor 70</h3>
            <p>Precio: $1670 MXN</p>
        </div>

        <div class="producto">
            <a href="index6.html">
                <img src="imagenes/jordan 4 azul militar.jpg" alt="Tenis modelo 6">
            </a>
            <h3>Jordan 4 Azul Militar</h3>
            <p>Precio: $2799 MXN</p>
        </div>

    </section>

    <!-- SCRIPT -->
    <script>

        function togglePassword() {
            let pass = document.getElementById("password");
            pass.type = pass.type === "password" ? "text" : "password";
        }

        function entrar() {

            const nombre = document.getElementById("nombre").value;
            const correo = document.getElementById("correo").value;
            const password = document.getElementById("password").value;
            const terminos = document.getElementById("acepto");

            if (nombre === "" || correo === "" || password === "") {
                alert("Debes llenar todos los campos.");
                return;
            }

            if (!terminos.checked) {
                alert("Debes aceptar los términos y condiciones.");
                return;
            }

            // OBJETO PARA GUARDAR LA CUENTA COMPLETA
            const datosCuenta = {
                nombre: nombre,
                correo: correo,
                password: password
            };

            // Guardar en localStorage
            localStorage.setItem("cuenta", JSON.stringify(datosCuenta));

            alert("Cuenta creada con éxito.");

            // Redirigir (opcional)
            window.location.href = "mi cuenta.html";
        }

    </script>

    <!-- PIE DE PÁGINA -->
    <footer>
        <h3>Síguenos en redes</h3>

        <div class="social">
            <a href="https://www.tiktok.com/@sport_td?_r=1&_t=ZS-91d3p213WAn" target="_blank">
                <img src="imagenes/tiktok2.png" alt="TikTok">
            </a>

            <a href="https://www.instagram.com/sporter_tenis?utm_source=qr&igsh=MWVmdDdraGVveGFrZg==" target="_blank">
                <img src="imagenes/instagram2.png" alt="Instagram">
            </a>

            <a href="https://whatsapp.com/channel/0029VbBXAyQ7dmec5nQmf21c" target="_blank">
                <img src="imagenes/whatsapp2.png" alt="whatsapp">
            </a>
        </div>
    </footer>

</body>
</html>
