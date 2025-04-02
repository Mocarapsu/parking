<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovery Password</title>

    <!-- Ejemplo: si usas SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Estilos incrustados -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* 
          Fondo blanco para la parte izquierda y arriba,
          y la ola turquesa se mostrará a la derecha 
        */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #fff; /* Blanco */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        /* LOGO (opcional) en la esquina superior izquierda */
        .logo {
            position: absolute;
            top: 20px;
            left: 30px;
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .logo-text {
            font-size: 20px;
            font-weight: 600;
            color: #02C8BF;
        }

        /* Contenedor del SVG (ola turquesa) a la derecha */
        .wave-right {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        .wave-right svg {
            /* Ocupa todo el espacio y se ajusta a la derecha */
            width: 100%;
            height: 100%;
            display: block;
            preserveAspectRatio: xMaxYMid slice;

            /* Escalamos y desplazamos el SVG para que
               la ola cubra más parte de la pantalla */
            transform: scale(1.3) translateY(-8%);
            transform-origin: top right;
        }

        /* Tarjeta blanca centrada */
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
            max-width: 90%;
        }

        /* Contenido del formulario */
        .form-container h2 {
            margin-bottom: 0.5rem;
            font-size: 24px;
            font-weight: 600;
        }
        .form-container p {
            color: #555;
            margin-bottom: 1.5rem;
            font-size: 14px;
            font-weight: 300;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            text-align: left;
            margin-bottom: 0.5rem;
            font-weight: 400;
            font-size: 14px;
        }
        input {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }

        /* Botón de Recuperación */
        button {
            padding: 0.8rem;
            background-color: #02C8BF;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 14px;
            font-weight: 600;
        }
        button:hover {
            background-color: #029c99;
        }
    </style>
</head>
<body>
    <!-- LOGO (opcional) -->
    <div class="logo">
        <img src="{{ asset('images/yaaaaaa 3.png') }}" alt="HealthSelf Logo">
        <span class="logo-text">HealthSelf</span>
    </div>

    <!-- OLA TURQUESA a la derecha, con el SVG exacto que proporcionaste -->
    <div class="wave-right">
        <svg width="1536" height="1042" viewBox="0 0 1536 1042" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path 
                d="M1532 173.498C1659.57 -22.7892 1883.75 -115.725 1961.32 -64.3071L2374.32 651.25L344.806 1822.62C319.342 1778.5 282.973 1533.58 204.754 1598.86C-319.1 2036.04 -267.634 489.045 306.866 752.545C617.182 894.874 648.028 570.841 898.43 255.371C1155.04 -67.9162 1390.96 390.499 1532 173.498Z"
                fill="url(#paint0_linear_717_258)"
            />
            <defs>
                <linearGradient id="paint0_linear_717_258" x1="344.806" y1="1822.62" x2="1932.18" y2="-90.1905" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#02C8BF"/>
                    <stop offset="1" stop-color="#02C8BF"/>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <!-- Tarjeta con el formulario de recuperación -->
    <div class="container">
        <div class="form-container">
            <h2>Recovery Password</h2>
            <p>Enter your email address to send you a code and recover your password</p>
            <form>
                <label for="email">Email address</label>
                <input type="email" id="email" placeholder="Enter your email" required>
                <button id="hsrecovery2" type="submit">Recovery</button>
            </form>
        </div>
    </div>
</body>
</html>
