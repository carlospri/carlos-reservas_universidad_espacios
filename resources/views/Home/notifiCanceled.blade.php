<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="max-w-md mx-auto mt-4 p-4 bg-orange-100 border border-orange-300 rounded-lg shadow-md flex items-start">
        <svg class="w-6 h-6 text-orange-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
        </svg>
        <div>
            <p class="text-orange-800 font-semibold">Su cancelación debe ser consultada por el administrador.</p>
            <p class="text-orange-700 text-sm">En un plazo máximo de 12 horas podrá volver a reservar.</p>
        </div>
    </div><br>
    <div class="flex justify-center">
    <button class="w-40 place-content-center bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.index')}}">Regresar</a></button>
</body>
</html>