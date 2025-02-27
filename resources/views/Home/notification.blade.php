<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <title>Notificacion</title>
</head>
<body>
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 rounded-lg shadow-md" role="alert">
        <p class="font-bold text-orange-800">¡Reserva creada con éxito!</p>
        <table class="w-full border-collapse mt-2">
            <tr class="bg-orange-200">
                <td class="font-semibold p-2 border border-orange-300">Número de reserva</td>
                <td class="p-2 border border-orange-300">RES-20250226-001</td>
            </tr>
            <tr class="bg-orange-100">
                <td class="font-semibold p-2 border border-orange-300">Fecha</td>
                <td class="p-2 border border-orange-300">26 de febrero de 2025</td>
            </tr>
            <tr class="bg-orange-200">
                <td class="font-semibold p-2 border border-orange-300">Hora</td>
                <td class="p-2 border border-orange-300">10:00 AM - 12:00 PM</td>
            </tr>
            <tr class="bg-orange-100">
                <td class="font-semibold p-2 border border-orange-300">Salón</td>
                <td class="p-2 border border-orange-300">Aula 305 - Edificio Central</td>
            </tr>
            <tr class="bg-orange-200">
                <td class="font-semibold p-2 border border-orange-300">Responsable del sitio</td>
                <td class="p-2 border border-orange-300">Prof. Juan Pérez</td>
            </tr>
            <tr class="bg-orange-100">
                <td class="font-semibold p-2 border border-orange-300">Ubicación</td>
                <td class="p-2 border border-orange-300">Universidad Nacional - Campus Nort
    </div>
    <br><br>
    <br>
    <footer>
    <button><a href="{{route('Home.index')}}" class="w-58 bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">Regresar</a></button>
    </footer>
</body>
</html>