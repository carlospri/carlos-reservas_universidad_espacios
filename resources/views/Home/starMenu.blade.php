<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>star menu</title>
</head>
<body class="bg-orange-100 min-h-screen flex flex-col items-center justify-center">
    <header class="bg-orange-200 w-full text-center p-6 shadow-md">
        <h1 class="text-3xl font-bold text-orange-700">Gestión de Espacios - Universidad</h1>
    </header>

    <main class="mt-10 w-full flex flex-col items-center">
        <div class="bg-orange-200 p-8 rounded-lg shadow-lg w-3/4 md:w-1/2 lg:w-1/3">
            <h2 class="text-2xl font-bold text-center text-orange-700 mb-6">Panel de Control</h2>
            <div class="flex flex-col gap-4">
                <button><a href="{{route('Reserve.index')}}" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">Gestión de Reserva</a></button>
                <button><a href="{{route('Home.show',0)}}" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">Notificaciones</a></button>
                <button><a href="{{route('Home.create')}}" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">Historial de Reservas</a></button>
                <button><a href="{{route('Reserve.edit',0)}}" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">Cancelaciones</a></button>
            </div>
        </div>
    </main>

    <footer class="bg-orange-200 w-full text-center p-4 mt-10 shadow-md">
        <p class="text-orange-800">&copy; 2025 Universidad. Todos los derechos reservados.</p>
    </footer>

    
    
</body>
</html>