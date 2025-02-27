<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Notifications</title>
</head>
<body>
    <header class="bg-orange-200 w-full text-center p-6 shadow-md">
        <h1 class="text-3xl font-bold text-orange-700">Historial de Reservas</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-orange-500 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">Nombre Usuario</th>
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nombre Espacio</th>
                    <th class="py-3 px-6 text-left">Número Reserva</th>
                    <th class="py-3 px-6 text-left">Fecha</th>
                    <th class="py-3 px-6 text-left">Hora</th>
                    <th class="py-3 px-6 text-left">Estado de Reserva</th>
                    <th class="py-3 px-6 text-left">Tipo de Usuario</th>
                    <th class="py-3 px-6 text-left">Responsable</th>
                </tr>
            </thead>
            <tbody class="text-orange-800">
                <tr class="border-b hover:bg-orange-100">
                    <td class="py-3 px-6">Juan Pérez</td>
                    <td class="py-3 px-6">001</td>
                    <td class="py-3 px-6">Sala A</td>
                    <td class="py-3 px-6">12345</td>
                    <td class="py-3 px-6">2025-02-26</td>
                    <td class="py-3 px-6">10:00 AM</td>
                    <td class="py-3 px-6">Confirmada</td>
                    <td class="py-3 px-6">Estudiante</td>
                    <td class="py-3 px-6">María Gómez</td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="py-3 px-6">Ana López</td>
                    <td class="py-3 px-6">002</td>
                    <td class="py-3 px-6">Sala B</td>
                    <td class="py-3 px-6">67890</td>
                    <td class="py-3 px-6">2025-02-27</td>
                    <td class="py-3 px-6">02:30 PM</td>
                    <td class="py-3 px-6">Pendiente</td>
                    <td class="py-3 px-6">Profesor</td>
                    <td class="py-3 px-6">Carlos Ruiz</td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="py-3 px-6">Pedro González</td>
                    <td class="py-3 px-6">003</td>
                    <td class="py-3 px-6">Sala C</td>
                    <td class="py-3 px-6">11223</td>
                    <td class="py-3 px-6">2025-02-28</td>
                    <td class="py-3 px-6">11:00 AM</td>
                    <td class="py-3 px-6">Cancelada</td>
                    <td class="py-3 px-6">Administrativo</td>
                    <td class="py-3 px-6">Laura Mendoza</td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="py-3 px-6">María Torres</td>
                    <td class="py-3 px-6">004</td>
                    <td class="py-3 px-6">Sala D</td>
                    <td class="py-3 px-6">33445</td>
                    <td class="py-3 px-6">2025-03-01</td>
                    <td class="py-3 px-6">09:00 AM</td>
                    <td class="py-3 px-6">Confirmada</td>
                    <td class="py-3 px-6">Estudiante</td>
                    <td class="py-3 px-6">José Ramírez</td>
                </tr>
                <tr class="border-b hover:bg-orange-100">
                    <td class="py-3 px-6">Luis Ramírez</td>
                    <td class="py-3 px-6">005</td>
                    <td class="py-3 px-6">Sala E</td>
                    <td class="py-3 px-6">55667</td>
                    <td class="py-3 px-6">2025-03-02</td>
                    <td class="py-3 px-6">04:15 PM</td>
                    <td class="py-3 px-6">Pendiente</td>
                    <td class="py-3 px-6">Profesor</td>
                    <td class="py-3 px-6">Andrea López</td>
                </tr>
            </tbody>
        </table><br>
        <button><a href="{{route('Home.index')}}" class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200 text-center">regresar al menu</a></button>
    </div>
    <footer class="bg-orange-200 w-full text-center p-4 mt-10 shadow-md">
        <p class="text-orange-800">&copy; 2025 Universidad. Todos los derechos reservados.</p>
    </footer>
    
</body>
</html>