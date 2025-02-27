<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Gestion</title>
</head>
<body>
    <form class="">
            <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="min-w-80 mx-auto max-h-96">
                <h2 class="text-2xl font-bold text-orange-600 mb-6 text-center transition-all duration-200 hover:text-3xl">
                    Consulta de Espacios Disponibles para Fecha Solicitada
                </h2>
                </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Fecha de Reserva</label>
                <input type="date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Hora de Reserva</label>
                <input type="time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Capacidad Personas</label>
                <input type="number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <button   class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Reserve.create')}}">Consultar Disponibilidad</a></button><br>
            <br>
            <button   class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.index')}}">Regresar</a></button>
        </form>
    </div>
</body>
</html>