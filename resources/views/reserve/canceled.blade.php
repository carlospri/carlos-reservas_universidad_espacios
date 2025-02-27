<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Canceled</title>
</head>
<body>
    <div class="max-w-md mx-auto mt-10 p-6 bg-orange-100 border border-orange-300 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-semibold text-orange-700 mb-4 text-center">Cancelar Reserva</h2>
        <form action="/cancelar-reserva" method="POST" class="space-y-4">
            <div>
                <label for="reserva" class="block text-orange-800 font-medium">Número de Reserva</label>
                <input type="text" id="reserva" name="reserva"  
                       class="mt-1 block w-full p-2 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div>
                <label for="correo" class="block text-orange-800 font-medium">Correo Electrónico</label>
                <input type="email" id="correo" name="correo"  
                       class="mt-1 block w-full p-2 border border-orange-400 rounded-lg focus:ring-orange-500 focus:border-orange-500">
            </div>
            <button class="w-80 bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.edit',0)}}">cancelar-reserva</a></button><br>
            <button class="w-80 bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.index')}}">Regresar</a></button>
        </form>
    </div>
</body>
</html>