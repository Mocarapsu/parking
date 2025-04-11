<!DOCTYPE html>
<html lang="es">
<head>
<script src="/public/js/modal.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobix - Tarjetas de Pago</title>
  <!-- Tailwind CSS desde CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            blue: {
              900: '#0c2c47',
              800: '#1a4b7c',
              700: '#2a6db3',
              600: '#2980b9',
              500: '#3498db',
              200: '#b3d4fc',
            },
          }
        }
      }
    }
  </script>
  <style>
    /* Estilos adicionales si son necesarios */
    .card-chip {
      background: linear-gradient(135deg, #e6c446 0%, #c7a93e 100%);
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-blue-900 to-blue-700">
  <!-- Header -->
  <header class="flex justify-between items-center p-6 bg-blue-900">
    <h1 class="text-4xl font-bold text-white">Mobix</h1>
    <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-300">
      <!-- Placeholder para imagen de perfil -->
      <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Profile" class="object-cover w-full h-full">
    </div>
  </header>

  <!-- Main Content -->
  <div class="flex flex-col md:flex-row p-4 gap-6">
    <!-- Left Side - Card List -->
    <div class="w-full md:w-1/2 relative">
                <a href="{{ url('/parking') }}" class="text-white text-lg hover:underline">Back</a>
      

      <div class="bg-white rounded-3xl p-8 mt-8 shadow-lg">
        <h2 class="text-3xl font-bold text-blue-900 mb-6">Your cards</h2>

        <!-- Lista de tarjetas -->
        <div class="space-y-3">
  <!-- BBVA Visa -->
  <div
    class="selectable-card flex items-center gap-3 p-3 rounded-lg border border-blue-500 cursor-pointer hover:shadow-lg transition-shadow"
    data-card-id="bbva-visa"
  >
    <div class="w-8 h-6 bg-white flex items-center justify-center">
      <span class="text-blue-800 font-bold text-xs">VISA</span>
    </div>
    <span class="text-blue-800 font-medium">BBVA - 0787</span>
  </div>

  <!-- Master Card -->
  <div
    class="selectable-card flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:shadow-lg transition-shadow"
    data-card-id="master-card"
  >
    <div class="w-8 h-6 flex items-center justify-center relative">
      <div class="w-4 h-4 bg-red-500 rounded-full absolute"></div>
      <div class="w-4 h-4 bg-yellow-500 rounded-full absolute ml-2"></div>
    </div>
    <span class="text-blue-800 font-medium">Master card - 2445</span>
  </div>

  <!-- American Express -->
  <div
    class="selectable-card flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:shadow-lg transition-shadow"
    data-card-id="amex"
  >
    <div class="w-8 h-6 bg-blue-500 flex items-center justify-center">
      <span class="text-white font-bold text-[8px]">AMEX</span>
    </div>
    <span class="text-blue-800 font-medium">American express - 2369</span>
  </div>

  <!-- PayPal -->
  <div
    class="selectable-card flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:shadow-lg transition-shadow"
    data-card-id="paypal"
  >
    <div class="w-8 h-6 bg-blue-600 flex items-center justify-center">
      <span class="text-white font-bold text-xs">P</span>
    </div>
    <span class="text-blue-800 font-medium">Pay Pal - 1324</span>
  </div>

  <!-- Apple Pay -->
  <div
    class="selectable-card flex items-center gap-3 p-3 rounded-lg border border-gray-200 cursor-pointer hover:shadow-lg transition-shadow"
    data-card-id="apple-pay"
  >
    <div class="w-8 h-6 flex items-center justify-center">
      <span class="text-black font-bold text-xs">Pay</span>
    </div>
    <span class="text-blue-800 font-medium">Apple Pay - 5878</span>
  </div>
</div>

        <!-- Botones -->
        <div class="flex gap-4 mt-6">
          <button class="flex items-center gap-2 bg-blue-600 text-white py-3 px-6 rounded-lg">
            <!-- Icono de configuración -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>
            <span>Settings</span>
          </button>
          <button class="flex items-center gap-2 bg-blue-600 text-white py-3 px-6 rounded-lg">
            <!-- Icono de eliminar -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 6h18"></path>
              <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
              <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
              <line x1="10" y1="11" x2="10" y2="17"></line>
              <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
            <span>Delete card</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Right Side - Card Details -->
    <div class="w-full md:w-1/2 flex flex-col items-center mt-8 md:mt-16">

      <div class="relative w-full max-w-md">
        <!-- Card Background -->
        <div class="bg-blue-200 rounded-xl h-56 w-full"></div>

        <!-- Card -->
        <div class="card-display main-card absolute top-4 left-1/2 transform -translate-x-1/2 w-11/12">
        <div class="bg-blue-800 rounded-xl p-6 h-48 w-full shadow-lg relative overflow-hidden">
            <div class="flex justify-between">
              <div class="text-white text-2xl font-bold">BBVA</div>
              <div class="text-white text-sm">Azul</div>
            </div>

            <div class="absolute bottom-4 right-4">
              <div class="text-white text-2xl font-bold">VISA</div>
            </div>

            <!-- Card Chip -->
            <div class="mt-8 flex items-center gap-4">
              <div class="w-10 h-8 card-chip rounded-md border border-gray-400"></div>
              <div class="w-6 h-6 rounded-full border-2 border-white"></div>
            </div>

            <!-- Card Design Elements -->
            <div class="absolute top-1/3 right-1/4 text-blue-400 opacity-20 text-8xl font-bold">A</div>
          </div>
        </div>
      </div>

      <!-- Formulario de tarjeta -->
      <div class="w-full max-w-md mt-8 bg-white p-6 rounded-xl shadow-md">
        <h3 class="text-gray-600 mb-4">Credit card details</h3>

        <div class="space-y-4">
          <div class="relative">
            <input
              type="text"
              placeholder="0000 0000 0000 0000"
              maxlength="19"
              class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
            />
          </div>

          <div class="flex gap-4">
            <div class="relative flex-1">
              <input
                type="text"
                placeholder="MM / YYYY"
                maxlength="9"
                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
              />
            </div>

            

            <div class="relative flex-1">
              <input
                type="password"
                placeholder="CVC"
                maxlength="3"
                class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
              />

            </div>
            <button class="bg-blue-600 text-white py-3 px-6 rounded-lg mb-8">+Add a new card</button>

          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Footer --><script>
const cardDisplay = document.querySelector('.main-card');

const cards = {
  'bbva-visa': {
    bgColor: 'bg-blue-800',
    name: 'BBVA',
    type: 'VISA',
    theme: 'Azul',
    chip: true,
  },
  'master-card': {
    bgColor: 'bg-gray-800',
    name: 'MasterCard',
    type: 'Master',
    theme: 'Negra',
    chip: true,
  },
  'amex': {
    bgColor: 'bg-blue-500',
    name: 'Amex',
    type: 'AMEX',
    theme: 'Azul',
    chip: true,
  },
  'paypal': {
    bgColor: 'bg-yellow-400',
    name: 'PayPal',
    type: 'P',
    theme: 'Dorada',
    chip: false,
  },
  'apple-pay': {
    bgColor: 'bg-black',
    name: 'Apple Pay',
    type: 'Pay',
    theme: 'Negra',
    chip: false,
  },
};

document.querySelectorAll('.selectable-card').forEach(card => {
  card.addEventListener('click', () => {
    const id = card.dataset.cardId;
    const data = cards[id];

    // Elimina clases de fondo anteriores
    cardDisplay.querySelector('.rounded-xl').className = 'rounded-xl p-6 h-48 w-full shadow-lg relative overflow-hidden';

    // Agrega nuevo fondo
    cardDisplay.querySelector('.rounded-xl').classList.add(data.bgColor);

    // Actualiza texto
    cardDisplay.querySelector('.text-2xl.font-bold').textContent = data.name;
    cardDisplay.querySelector('.text-sm').textContent = data.theme;
    cardDisplay.querySelector('.text-2xl.font-bold.text-white').textContent = data.type;

    // Muestra u oculta el chip
    const chip = cardDisplay.querySelector('.card-chip');
    chip.style.display = data.chip ? 'block' : 'none';
  });
});



</script>

</body>
</html>