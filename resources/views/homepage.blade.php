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
                    <h2 class="text-xl font-bold mt-4">Save time</h2>
                    <p class="text-gray-600">Reduces parking search time.</p>
                </div>

                <!-- TARJETA 2 -->
                <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
                    <img src="{{ asset('gift/tiempo.gif') }}" alt="Ahorra dinero">
                    <h2 class="text-xl font-bold mt-4">Save money</h2>
                    <p class="text-gray-600">Reduce gas consumption by driving around in circles looking for parking.</p>
                </div>

                <!-- TARJETA 3 -->
                <div class="benefit-card bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
                    <img src="{{ asset('gift/policia.gif') }}" alt="Evita infracciones" class="w-50 h-50">
                    <h2 class="text-xl font-bold mt-4">Avoid tickets</h2>
                    <p class="text-gray-600">Keep track of the time and place where you park.</p>
                </div>
            </div>
            </section>
</header>

        
    <!-- SECCIÓN DOS COMPLETAAA -->
        <!-- SECCIÓN DOS COMPLETAAA -->
    <!-- Primera sección: Título principal con fondo blanco -->
<section class="bg-white w-screen flex justify-center items-center mt-8 py-10">
    <div class="max-w-8xl w-full text-center px-4">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Find parking quickly and easily</h2>
        <p class="text-lg text-gray-600">Explore the city and find parking in downtown Durango..</p>
    </div>
</section>

<!-- Segunda sección: Services con fondo gris -->
<section class="bg-[#d9d9d9] w-screen flex justify-center items-center py-10">
    <div class="max-w-7xl w-full text-center px-4 flex flex-col items-center">
        <!-- Título de Services -->
        <!-- Título de Services -->
        <h3 class="text-4xl text-black font-semibold mb-8">Services</h3>
        
        <!-- Contenedor de las tarjetas -->
        <div class="grid md:grid-cols-3 gap-6 justify-center items-center">
            <!-- Tus tarjetas existentes van aquí -->
            <!-- Pago en línea -->
            <div class="benefit-card2 bg-white gap-10 center p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
                <img src="{{ asset('gift/tarjeta-de-credito.gif') }}" alt="Pago en línea" class="w-40 h-40 mx-auto mb-8">
                <h3 class="text-3xl font-bold mt-4 text-gray-800">Online payment</h3>
                <p class="text-gray-600 mt-4">Make online payments from your device. It's a quick and easy process that saves you time and is reflected instantly.</p>
            </div>
            
            <!-- Pago físico -->
            <div class="benefit-card2 bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
                <img src="{{ asset('gift/inversion.gif') }}" alt="Pago físico" class="w-40 h-40 mx-auto mb-8">
                <h3 class="text-3xl font-bold mt-4 text-gray-800">Physical payment</h3>
                <p class="text-gray-600 mt-4">Find the payment location closest to you and pay in cash; the transaction is reflected immediately.</p>
            </div>
            
            <!-- Buscar estacionamiento -->
            <div class="benefit-card2 bg-white p-6 rounded-lg shadow-lg transition-all duration-300 ease-in-out transform hover:-translate-y-3 hover:shadow-2xl">
                <img src="{{ asset('gift/lupa.gif') }}" alt="Buscar estacionamiento" class="w-40 h-40 mx-auto mb-8">
                <h3 class="text-3xl font-bold mt-4 text-gray-800">Find parking</h3>
                <p class="text-gray-600  mt-4">With your real-time location, you can search and find a free parking spot near you.</p>
            </div>
        </div>
    </div>
</section>




<section class="bg-white mx-auto my-4 px-10">
    <h2 class="text-4xl text-black-600 font-bold mb-6">How does Mobix work?</h2>
    <div class="grid md:grid-cols-3 gap-8 justify-center items-center mx-auto">
        <!-- Imagen 1 -->
        <div class="text-center">
            <img src="{{ asset('images/login.png') }}" alt="Registrarse" class="w-60 h-60 mx-auto mb-4 rounded-lg">
            <h3 class="text-xl font-bold mt-4">Sign up</h3>
            <p class="text-gray-600">Create an account in just a few minutes.</p>
        </div>
        <!-- Imagen 2 -->
        <div class="text-center">
            <img src="{{ asset('images/pago.png') }}" alt="Realizar pago" class="w-60 h-60 mx-auto mb-4 rounded-lg">
            <h3 class="text-xl font-bold mt-4">Payment method</h3>
            <p class="text-gray-600">Select your preferred payment method.</p>
        </div>
        <!-- Imagen 3 -->
        <div class="text-center">
            <img src="{{ asset('images/estacionamiento.png') }}" alt="Estacionarse" class="w-60 h-60 mx-auto mb-4 rounded-lg">
            <h3 class="text-xl font-bold mt-4">Find a place</h3>
            <p class="text-gray-600">Activate your location and identify the nearest parking space.</p>
        </div>
    </div>
</section>

    <!-- SECCIÓN DE FAQ -->
    <section class="bg-[#d9d9d9] w-screen flex justify-center items-center py-2">
    <div class="max-w-7xl w-full text-center px-4 flex flex-col items-center">
        <!-- Título de Services -->
        <!-- Título de Services -->
        <h3 class="text-2xl text-black ">Mobix is ​​the best solution, it is safe, efficient and easy to use.</h3>
        </section>
        <div class="max-w-3xl mt-10">
            <h3 class="text-2xl font-semibold mb-6 text-left">Do you need help?</h3>
            
            <div class="space-y-4 items-center">
                <!-- Accordion Item 1 -->
                <div class="border rounded-lg overflow-hidden justify-center items-center">
                    <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" onclick="toggleAccordion('faq1')">
                        <span class="font-medium">¿Dónde puedo pagar en efectivo?</span>
                        <svg class="w-5 h-5 transform transition-transform" id="icon-faq1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden p-4 bg-white" id="faq1">
                        <p class="text-gray-600 text-left">Puedes pagar en efectivo en cualquiera de nuestros puntos de pago autorizados ubicados en el centro de la ciudad.</p>
                    </div>
                </div>
                
                <!-- Accordion Item 2 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" onclick="toggleAccordion('faq2')">
                        <span class="font-medium">¿Cuánto tiempo tarda en reflejarse el pago?</span>
                        <svg class="w-5 h-5 transform transition-transform" id="icon-faq2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden p-4 bg-white" id="faq2">
                        <p class="text-gray-600 text-left">Los pagos en línea se reflejan inmediatamente. Los pagos en efectivo pueden tardar hasta 5 minutos en reflejarse en el sistema.</p>
                    </div>
                </div>
                
                <!-- Accordion Item 3 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" onclick="toggleAccordion('faq3')">
                        <span class="font-medium">¿Puedo obtener un comprobante de pago?</span>
                        <svg class="w-5 h-5 transform transition-transform" id="icon-faq3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden p-4 bg-white" id="faq3">
                        <p class="text-gray-600 text-left">Sí, todos los pagos generan un comprobante digital que puedes descargar desde tu cuenta o recibir por correo electrónico.</p>
                    </div>
                </div>
                
                <!-- Accordion Item 4 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" onclick="toggleAccordion('faq4')">
                        <span class="font-medium">¿Cómo contacto a soporte?</span>
                        <svg class="w-5 h-5 transform transition-transform" id="icon-faq4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden p-4 bg-white" id="faq4">
                        <p class="text-gray-600 text-left">Puedes contactar a nuestro equipo de soporte técnico a través del correo soporte@mobixparquimetro.edu.mx o llamando al +52 618 123 4567.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER COMPLETO -->
    <footer class="footer-background py-10 text-center text-black relative">
        <div class="container mx-auto px-4">
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-2">Oficina de Mobix</h3>
                <p>Universidad Politécnica de Durango</p>
                <p>Carretera Durango-México Km. 9.5 Col.Dolores Hidalgo</p>
                <p>CP. 34300</p>
                <p>Tel: +52 618 123 4567</p>
                <p class="mt-1 text-sm">Correo electrónico: <a href="mailto:soporte@mobixparquimetro.edu.mx" class="hover:underline">soporte@mobixparquimetro.edu.mx</a></p>
        </div>
            
            </div>
            
            <div class="flex justify-center space-x-4 mb-6">
                <a href="#" class="text-black hover:text-blue-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                    </svg>
                </a>
                <a href="#" class="text-black hover:text-blue-400">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-black hover:text-pink-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            </div>
            
          
            <div class="flex justify-center items-center">
                <p class="mr-1 ">&copy; 2025 Mobix. Todos los derechos reservados.</p>
                <div class="text-2xl font-bold">Mobix</div>
            
        
        <!-- Forma de onda en la parte inferior del footer -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden" style="height: 50px;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #0a192f;"></path>
            </svg>
        </div>
    </footer>
    @include('register')
    @include('login')
</body>
</html>