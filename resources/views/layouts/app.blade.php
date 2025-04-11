<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <link href="{{ mix('css/styles.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Barra de navegación, si tienes -->
        <nav class="bg-blue-600 text-white p-4">
            <div class="container mx-auto">
                <a href="{{ url('/') }}" class="text-xl font-semibold">Mi Aplicación</a>
            </div>
        </nav>

        <!-- Contenido de la página -->
        <div class="container mx-auto py-8">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/modal.js') }}"></script>
</body>
</html>
