
 <style>
        /* Estilos para el fondo desenfocado */
        .modal-overlay {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Fondo oscuro */
            z-index: 1000;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px); /* Efecto de desenfoque */
        }
    </style>
</head>
<body>

<div id="registerModal" class="modal-overlay hidden">
    <div class="bg-white rounded-lg shadow-xl p-8 w-full max-w-md relative">
        <span class="modal-close absolute top-2 right-2 cursor-pointer text-gray-600 text-2xl">&times;</span>

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-2">Mobix</h2>
        <h3 class="text-lg text-center text-gray-600 mb-6">Regístrate</h3>
        
        <form id="registerForm" class="form-box" method="POST" action="{{ route('register') }}"> 
            @csrf
            <div class="field-container mb-4 text-left">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" required>
                @error('name') <span class="error text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 text-left">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Ingrese su correo" value="{{ old('email') }}" required>
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4 text-left">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Ingrese su contraseña" required>
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4 text-left">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" placeholder="Confirme su contraseña" required>
            </div>

            <div class="flex items-center mb-6 text-left">
                <input type="checkbox" id="terms" name="terms" required class="mr-2">
                <label for="terms" class="text-sm text-gray-600">
                    Acepto los <a href="#" class="text-blue-500 hover:underline">términos</a>, <a href="#" class="text-blue-500 hover:underline">condiciones</a> y <a href="#" class="text-blue-500 hover:underline">política de privacidad</a>.
                </label>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Registrarse</button>
        </form>

        <div class="my-6 text-center text-gray-600">O regístrate con</div>

        <div class="flex justify-center gap-4">
            <a href="{{ url('/auth/facebook') }}" class="flex items-center justify-start gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-blue-100">
                <img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook" width="20">
                <span class="text-sm text-gray-700">Facebook</span>
            </a>
            <a href="{{ url('/auth/google') }}" class="flex items-center justify-start gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-blue-100">
                <img src="https://cdn-icons-png.flaticon.com/512/300/300221.png" alt="Google" width="20">
                <span class="text-sm text-gray-700">Google</span>
            </a>
        </div>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Registro</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<script src="{{ asset('js/modal.js') }}"></script> <!-- Ensure this file exists in the public/js directory -->
</body>
</html>
