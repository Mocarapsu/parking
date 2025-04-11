<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobix Notifications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    </style>
</head>
<body class="bg-black flex justify-center items-center h-screen w-screen">

    <div class="w-full h-full bg-black flex flex-col">
    
        <!-- NUEVA BARRA DE NAVEGACIÓN -->
        <nav class="p-4 flex justify-between items-center" style="background-color: rgb(39, 102, 138);">
            <div class="text-xl font-bold text-white">Mobix</div>
            <div class="w-10 h-10 rounded-full bg-gray-400 border-2 border-white flex items-center justify-center overflow-hidden">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='8' r='5'/%3E%3Cpath d='M20 21a8 8 0 0 0-16 0'/%3E%3C/svg%3E" alt="User" class="w-full h-full object-cover" />
            </div>
        </nav>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="relative flex-grow bg-cover bg-center">
            <div class="absolute inset-0 bg-white bg-opacity-90 p-6 overflow-hidden">
                <div class="flex items-center mb-6">
                    <a href="{{ route('parking') }}" class="text-[#0c3b6b] bg-none border-none cursor-pointer text-2xl">
                        ←
                    </a>                    <h2 class="text-[#0c3b6b] text-2xl font-bold ml-4">Notifications</h2>
                </div>

                <div class="bg-[rgb(39,102,138)] rounded-lg p-4 text-white h-[calc(100%-130px)] overflow-y-auto">

                    <!-- Notificación 1 -->
                    <div class="mb-4 pb-4 border-b border-[#1a4b7c]">
                        <div class="bg-white bg-opacity-10 rounded-md p-2 mb-1 flex justify-between">
                            <span class="text-sm">07/March/2023</span>
                            <span class="text-sm">16:22</span>
                        </div>
                        <div class="pl-2">
                            <h3 class="font-bold mb-2">Proof of Payment</h3>
                            <div class="text-sm">
                                <div class="flex justify-between mb-1">
                                    <span>Parking payment by:</span>
                                    <span>25 minutes</span>
                                </div>
                                <div class="flex justify-between mb-1">
                                    <span>Payment method:</span>
                                    <span>Online Pay</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Payment rate:</span>
                                    <span>$15.00 M.X.N.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notificación 2 -->
                    <div class="mb-4 pb-4 border-b border-[#1a4b7c]">
                        <div class="bg-white bg-opacity-10 rounded-md p-2 mb-1 flex justify-between">
                            <span class="text-sm">15/March/2023</span>
                            <span class="text-sm">10:12</span>
                        </div>
                        <div class="pl-2">
                            <h3 class="font-bold mb-2">Proof of Payment</h3>
                            <div class="text-sm">
                                <div class="flex justify-between mb-1">
                                    <span>Parking payment by:</span>
                                    <span>30 minutes</span>
                                </div>
                                <div class="flex justify-between mb-1">
                                    <span>Payment method:</span>
                                    <span>Online Pay</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Payment rate:</span>
                                    <span>$20.00 M.X.N.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notificación 3 -->
                    <div class="mb-4 pb-4 border-b border-[#1a4b7c]">
                        <div class="bg-white bg-opacity-10 rounded-md p-2 mb-1 flex justify-between">
                            <span class="text-sm">24/March/2023</span>
                            <span class="text-sm">11:11</span>
                        </div>
                        <div class="pl-2">
                            <h3 class="font-bold mb-2">Proof of Payment</h3>
                            <div class="text-sm">
                                <div class="flex justify-between mb-1">
                                    <span>Parking payment by:</span>
                                    <span>160 minutes</span>
                                </div>
                                <div class="flex justify-between mb-1">
                                    <span>Payment method:</span>
                                    <span>Physical Pay</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Payment rate:</span>
                                    <span>$35.00 M.X.N.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notificación 4 -->
                    <div class="mb-4 pb-4 border-b border-[#1a4b7c]">
                        <div class="bg-white bg-opacity-10 rounded-md p-2 mb-1 flex justify-between">
                            <span class="text-sm">30/March/2023</span>
                            <span class="text-sm">09:45</span>
                        </div>
                        <div class="pl-2">
                            <h3 class="font-bold mb-2">Proof of Payment</h3>
                            <div class="text-sm">
                                <div class="flex justify-between mb-1">
                                    <span>Parking payment by:</span>
                                    <span>45 minutes</span>
                                </div>
                                <div class="flex justify-between mb-1">
                                    <span>Payment method:</span>
                                    <span>Online Pay</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Payment rate:</span>
                                    <span>$18.00 M.X.N.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>