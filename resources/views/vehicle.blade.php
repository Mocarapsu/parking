<!--<div id="vehicleModal" class="modal-overlay absolute bg-white rounded-lg shadow-xl p-4 w-80 z-auto" style="display: block; position: absolute; left: 50%; transform: translateX(-50%); overflow: auto; width: auto; height: auto;">
    <div class="relative">
        <span class="modal-close absolute top-2 right-2 cursor-pointer text-gray-600 text-2xl">&times;</span>

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-2">Vehículos</h2>
        <h3 class="text-lg text-center text-gray-600 mb-6">Lista de vehículos</h3>

      Lista de vehículos 
        <div class="space-y-4 mb-8 max-h-60 overflow-y-auto">
            @foreach ($vehicles as $vehicle)
                <div class="flex items-center gap-4 px-6 py-4 bg-white rounded-full shadow-sm">
                    <span class="text-lg font-medium">
                        {{ $vehicle->name }} - {{ $vehicle->color }} - {{ $vehicle->license_plate }}
                    </span>
                </div>
            @endforeach
        </div>

         Botón para abrir el modal de agregar vehículo 
        <button id="openAddVehicleModal" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Agregar nuevo vehículo
        </button>
    </div>
</div>-->

<!-- Modal para agregar un nuevo vehículo 
<div id="addVehicleModal" class="modal-overlay  fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-md">
        <span class="modal-close absolute top-4 right-4 text-gray-600 text-xl cursor-pointer hover:text-gray-800" onclick="closeAddVehicleModal()">&times;</span>
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Agregar Vehículo</h2>
        <form action="{{ route('vehicles.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Modelo del vehículo:</label>
                <input type="text" name="name" id="name" placeholder="Ej: Toyota Corolla" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div>
                <label for="color" class="block text-sm font-medium text-gray-700">Color del vehículo:</label>
                <input type="text" name="color" id="color" placeholder="Ej: Rojo" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div>
                <label for="license_plate" class="block text-sm font-medium text-gray-700">Placa del vehículo:</label>
                <input type="text" name="license_plate" id="license_plate" placeholder="Ej: ABC-1234" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                Guardar vehículo
            </button>
        </form>
    </div>
</div>-->