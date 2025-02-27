<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Confirmacion</title>
</head>
<body class="bg-gray-100 flex flex-col items-center py-10">
    <h1 class="text-2xl font-bold text-orange-700 mb-4">Su reserva ha sido confirmada</h1>

    <table class="min-w-full bg-white border border-orange-300 shadow-md rounded-lg overflow-hidden">
        <thead class="bg-orange-500 text-white">
            <tr>
                <th class="py-3 px-6 text-left">Código Confirmación</th>
                <th class="py-3 px-6 text-left">Responsable del Espacio</th>
                <th class="py-3 px-6 text-left">Solicitante</th>
                <th class="py-3 px-6 text-left">Fecha</th>
                <th class="py-3 px-6 text-left">Hora</th>
                <th class="py-3 px-6 text-left">Nombre del Espacio</th>
                <th class="py-3 px-6 text-left">Código del Espacio</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-orange-300">
            <tr class="bg-orange-100 hover:bg-orange-200">
                <td class="py-3 px-6">CF-001</td>
                <td class="py-3 px-6">Juan Pérez</td>
                <td class="py-3 px-6">María López</td>
                <td class="py-3 px-6">2025-03-01</td>
                <td class="py-3 px-6">10:00 AM</td>
                <td class="py-3 px-6">Salón 101</td>
                <td class="py-3 px-6">S101</td>
            </tr>
            <tr class="bg-orange-100 hover:bg-orange-200">
                <td class="py-3 px-6">CF-002</td>
                <td class="py-3 px-6">Ana Martínez</td>
                <td class="py-3 px-6">Carlos Gómez</td>
                <td class="py-3 px-6">2025-03-02</td>
                <td class="py-3 px-6">02:00 PM</td>
                <td class="py-3 px-6">Sala de Reunión A</td>
                <td class="py-3 px-6">SRA</td>
            </tr>
            <tr class="bg-orange-100 hover:bg-orange-200">
                <td class="py-3 px-6">CF-003</td>
                <td class="py-3 px-6">Luis Fernández</td>
                <td class="py-3 px-6">Sofía Ramírez</td>
                <td class="py-3 px-6">2025-03-03</td>
                <td class="py-3 px-6">09:30 AM</td>
                <td class="py-3 px-6">Cubículo 1</td>
                <td class="py-3 px-6">C1</td>
            </tr>
            <tr class="bg-orange-100 hover:bg-orange-200">
                <td class="py-3 px-6">CF-004</td>
                <td class="py-3 px-6">Marta Ríos</td>
                <td class="py-3 px-6">Daniel Herrera</td>
                <td class="py-3 px-6">2025-03-04</td>
                <td class="py-3 px-6">04:00 PM</td>
                <td class="py-3 px-6">Salón 101</td>
                <td class="py-3 px-6">S101</td>
            </tr>
            <tr class="bg-orange-100 hover:bg-orange-200">
                <td class="py-3 px-6">CF-005</td>
                <td class="py-3 px-6">Pedro Salinas</td>
                <td class="py-3 px-6">Lucía Torres</td>
                <td class="py-3 px-6">2025-03-05</td>
                <td class="py-3 px-6">01:00 PM</td>
                <td class="py-3 px-6">Sala de Reunión A</td>
                <td class="py-3 px-6">SRA</td>
            </tr>
        </tbody>
    </table><br><br>
    <button class="w-40 bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.index')}}">Regresar</a></button>
</body>

</html>