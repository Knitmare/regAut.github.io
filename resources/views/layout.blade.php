<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfraccionesJujuy|@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-blue-400">
        <div class="box-content h-32 w-48 ">
            <a href="{{route('index')}}"><img src="{{URL('storage/img/jujuy.jpg')}}"alt="Jujuy" height="190x" width="190px" ></a>
        </div>
        <div class=" text-center text-2xl font-bold">
            <a href="{{route('index')}}" class="px-3  hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
            <a href="{{route('titular.index')}}"class="px-3  hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Titulares</a>
            <a href="{{route('auto.index')}}"class="px-3  hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vehiculos</a>
            <a href="{{route('infracciones.index')}}"class="px-3  hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Infracciones</a>
        </div>
        <div class=" text-right text-2xl font-bold accent-yellow-200 ">
            Municipalidad de Libertador General San Martin
        </div>
        <div class=" text-right justify-center font-semibold text-s px-3">
            @if (Route::has('login'))
                <div class="absolute top-0 right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ route('profile.edit') }}" class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{route('login')}}"class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                        @if (Route::has('register'))
                            <a href="{{route('register')}}"class="font-semibold hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div class="container">
        <div class=" row justify-center">
            <div class="w-full lg:w-1/2">
                <div class="section_title text-center pb-6">
                    <div class="text-5xl font-bold text-center">
                        <h1>Registro de infracciones</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conteiner text-center">
        <div class="text-l">
            @yield('content')
        </div>
    </div>
    
</body>
</html>
