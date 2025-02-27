<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Disponibilidad</title>
</head>
<body>

    <header><br><h2 class="text-center text-black bg-orange-300">para la fecha y hora seleccionado tenemos los siguientes espacios disponibles por favor seleccione uno para continuar con la reserva</h2>
    <br>
    
    
    </header>
    <div class="max-w-lg mx-auto bg-orange-100 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-orange-600 mb-6 text-center">Reserva de Espacio</h2>
        <form>
            <div class="mb-4 text-center ">
                <label class="block text-orange-800 font-semibold mb-2 text-center">Seleccionar Espacio</label>
                <select class="w-48 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400 bg-orange-500">
                    <option value="salon-101">Salón 101</option>
                    <option value="sala-reunion-a">Sala de Reunión A</option>
                    <option value="cubiculo-1">Cubículo 1</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Nombre Solicitante</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Documento</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mb-4">
                <label class="block text-orange-800 font-semibold mb-2">Nombre del Espacio</label>
                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            
            <button  class="w-38 bg-orange-400
             text-black py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Reserve.show',0)}}">Reservar</a></button><br>
            <br>
            <button   class="w-38 bg-orange-500 text-black py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Reserve.index')}}">Regresar</a></button>
        </form>
    </div>
</body>
</html>