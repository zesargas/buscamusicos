<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md text-center">
        <h1 class="text-2xl font-bold mb-6">Bienvenido, {{ Auth::user()->name }}</h1>
        <p class="mb-6">Estás en tu dashboard.</p>

        <!-- Botón de logout seguro -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">
                Cerrar sesión
            </button>
        </form>
    </div>

</body>
</html>
