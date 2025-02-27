<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
    <title>Login</title>
</head>
<body>
    <header class="bg-orange-200 container mx-auto p-6 text-center rounded-lg shadow-md hover:shadow-amber-400 transition-all duration-500">
        <h1 class="text-3xl font-bold text-orange-700">Bienvenido al sistema de gestión de Espacios de la Universidad</h1>
        <p class="text-xl mt-2 text-orange-800">Para poder realizar reservas deberás loguearte primero con tu correo institucional</p>
        <p class="text-xl mt-2 text-orange-800">Recuerda cuidar los espacios de la Universidad para que todos podamos acceder a ellos en excelentes condiciones.</p>
    </header>

    <div class="min-h-screen flex items-center justify-center hover:shadow-amber-500 transition-all duration-500">
        <div class="bg-orange-200 p-10 rounded-xl shadow-2xl w-96 border border-orange-300">
            <h2 class="text-3xl font-bold text-center text-orange-700 mb-6">Iniciar Sesión</h2>
            <form action="{{route('Home.create')}}">
                <div class="mb-4">
                    <label for="email" class="block text-orange-800 font-semibold">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border border-orange-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-orange-800 font-semibold">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-orange-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div class="mb-4 flex justify-between items-center">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-orange-800 font-medium">Recuérdame</span>
                    </label>
                    <a href="#" class="text-orange-600 text-sm hover:underline">¿Olvidaste tu contraseña?</a>
                </div>
                <button
                    class="w-full bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition duration-200"><a href="{{route('Home.index')}}">Iniciar Sesión</a></button>
            </form>
            <p class="mt-4 text-center text-orange-800">¿No tienes una cuenta? <a href="" class="text-orange-600 font-semibold hover:underline">Regístrate</a></p>
        </div>
        
    </div>
    
</body>

</html>