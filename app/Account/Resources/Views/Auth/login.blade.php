<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full border border-gray-300 rounded-md p-2 mt-1 focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="password" required
                       class="w-full border border-gray-300 rounded-md p-2 mt-1 focus:ring focus:ring-blue-200">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md">
                Entrar
            </button>
        </form>

        <p class="text-sm text-gray-600 text-center mt-4">
            ¿No tienes cuenta?
            <a href="/register" class="text-blue-600 hover:underline">Regístrate aquí</a>
        </p>
    </div>

</body>
</html>
