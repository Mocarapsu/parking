<!DOCTYPE html>

<html lang="es">
<head>
    <script src="{{ asset('js/modal.js') }}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobix - Parquímetro Durango</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="bg-gray-100">
    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="p-4 flex justify-between items-center">
        <div class="nav-brand">Mobix</div>
        <div class="space-x-4">
            <a href="#" class="nav-link text-white">Pago físico</a>
            <a href="#" class="nav-link text-white">Pago en línea</a>
            <a href="#" class="nav-link text-white">Busca un lugar</a>
            <!-- Botón de "Registrarse" -->
            
            <button class="nav-button border text-white hover:bg-white hover:text-blue-700 rounded-lg" id="openRegisterModal">Registrarse</button>
            <button class="nav-button bg-blue-500 text-white hover:bg-blue-600 rounded-lg" id="openLoginModal">Iniciar sesión</button>

</button>
        </div>
    </nav>
        
        
        
    
    <header class="header-background flex flex-col justify-center items-center text-center bg-cover bg-center">

        <h1 class="header-title">Parquímetro Durango</h1>
        <p class="header-description">Explora la ciudad y encuentra lugares para estacionarte en el centro de Durango.</p>
        
    <!--<!SECCIÓN DE BENEFICIOS -->

            
<section class="container mx-auto my-10 px-10 mt-20">
    <div class="grid md:grid-cols-3 gap-8">
        <!-- TARJETA 1 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/soborno.gif') }}" alt="Ahorra tiempo">
            <h2 class="text-xl font-bold mt-4">Ahorra tiempo</h2>
            <p class="text-gray-600">Reduce el tiempo de búsqueda de estacionamiento.</p>
        </div>

        <!-- TARJETA 2 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/tiempo.gif') }}" alt="Ahorra dinero">
            <h2 class="text-xl font-bold mt-4">Ahorra dinero</h2>
            <p class="text-gray-600">Reduce el gasto de gasolina dando vueltas en búsqueda de estacionamiento.</p>
        </div>

        <!-- TARJETA 3 -->
        <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('gift/policia.gif') }}" alt="Evita infracciones" class="w-50 h-50">
            <h2 class="text-xl font-bold mt-4">Evita infracciones</h2>
            <p class="text-gray-600">Ten control del tiempo y lugar en el que te estacionas.</p>
        </div>
    </div>
</section>

        
<!-- SECCIÓN DOS COMPLETAAA -->
<section class="bg-white w-screen min-h-screen flex justify-center items-center">
<div class="max-w-7xl w-full text-center px-4 py-20">
    <h2 class="text-4xl font-bold text-gray-800 mb-6">Encuentra estacionamiento fácil y rápido</h2>
    <p class="text-lg text-gray-600 mb-12">Explora la ciudad y encuentra lugares para estacionarte en el centro de Durango.</p>

    <div class="grid md:grid-cols-3 gap-6">
        <!-- Pago en línea -->
        <div class="benefit-card2 bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('icons/pago_en_linea.png') }}" alt="Pago en línea" class="w-20 h-20 mx-auto mb-4">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Pago en línea</h3>
            <p class="text-gray-600">Realiza pagos de forma segura y rápida desde tu dispositivo móvil.</p>
        </div>

        <!-- Pago físico -->
        <div class="benefit-card2 bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('icons/pago_fisico.png') }}" alt="Pago físico" class="w-20 h-20 mx-auto mb-4">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Pago físico</h3>
            <p class="text-gray-600">Ubica los puntos de pago más cercanos para pagar en efectivo.</p>
        </div>

        <!-- Buscar estacionamiento -->
        <div class="benefit-card2 bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
            <img src="{{ asset('icons/buscar_estacionamiento.png') }}" alt="Buscar estacionamiento" class="w-20 h-20 mx-auto mb-4">
            <h3 class="text-xl font-bold mt-4 text-gray-800">Buscar estacionamiento</h3>
            <p class="text-gray-600">Encuentra lugares disponibles en tiempo real con tu ubicación.</p>
        </div>
    </div>
</div>
</section>

<!-- SECCIÓN DE FUNCIONAMIENTO -->
<section class="container mx-auto my-10 px-10 text-center">
<h2 class="text-4xl font-bold mb-6">¿Cómo funciona Mobix?</h2>
<div class="grid md:grid-cols-3 gap-8">
    <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
        <img src="{{ asset('images/registro.png') }}" alt="Registrarse" class="mx-auto mb-4 w-24 h-24">
        <h3 class="text-xl font-bold mt-4">Registrarse</h3>
    </div>
    <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
        <img src="{{ asset('images/pago.png') }}" alt="Realizar pago" class="mx-auto mb-4 w-24 h-24">
        <h3 class="text-xl font-bold mt-4">Realizar pago</h3>
    </div>
    <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
        <img src="{{ asset('images/estacionamiento.png') }}" alt="Estacionarse" class="mx-auto mb-4 w-24 h-24">
        <h3 class="text-xl font-bold mt-4">Estacionarse</h3>
    </div>
</div>
</section>

@include('register')
@include('login')
@include('parking')


    <footer class="footer-background py-10 text-center text-black">
        <p>&copy; 2025 Mobix. Todos los derechos reservados.</p>
</body>
</html>