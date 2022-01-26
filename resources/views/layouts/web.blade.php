<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso de Introducci&oacute;n a Laravel 8 - Platzi</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
        <nav class="bg-blue-800 py-2">
            <a href="{{route('home')}}">
                <img 
                    class="h-8 mx-auto" 
                    src="{{asset('images/isotipo-oxas.png')}}" 
                    alt=""
                >
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-6">
            @yield('content')
        </div>
    </main>    

    <footer class="py-4 text-center">
        @auth
            <a class="text-sm text-gray underline" href="{{ url('dashboard') }}" >
                Dashboard
            </a>
        @else    
            <a class="text-sm text-gray underline" href="{{ url('login') }}" >
                Login
            </a>
            <a class="ml-4 text-sm text-gray underline" href="{{ url('register') }}" >
                Register
            </a>
        @endauth

    </footer>
</body>
</html>