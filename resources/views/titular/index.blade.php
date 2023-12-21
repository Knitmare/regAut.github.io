@extends('layout')
@section('title')
    Titulares    
@endsection
@section('content')
    <h2 class="text-left font-semibold underline text-3xl ">Titulares</h2>
    @if(Route::has('login'))
        @auth
            <a class="rounded bg-blue-400 text-white text-xl px-3" href="{{route('titCreate')}}">Crear</a>
        @endauth
    @endif
    @foreach ($titulares as $titular)
        <div class="text-xl ">
            <table class="table w-full text-left rtl:text-right sm:pl-6 border-collapse border-black ">
            <tr class="content-center border border-black">
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Apellido</th>
                    <th scope="col" class="px-6 py-3">DNI</th>
                    <th scope="col" class="px-6 py-3">Domicilio</th>
                    <th cope="col" class="px-6 py-3">Acciones</th>
                </tr>
                <tr class="content-center border border-black">
                    <td class="px-6 py-4" >{{$titular->id}}</td>
                    <td class="px-6 py-4">{{$titular->nombre}}</td>
                    <td class="px-6 py-4">{{$titular->apellido}}</td>
                    <td class="px-6 py-4">{{$titular->dni}}</td>
                    <td class="px-6 py-4">{{$titular->domicilio}}</td>
                    @if (Route::has('login'))
                        @auth
                            <td><a class="rounded bg-blue-400 text-white" href="{{route('titEdit',$titular)}}">Editar</a></td>
                            <td> <form action="{{route('titular.destroy',$titular)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="rounded bg-red-600 text-white"onclick="return confirm('Deseas borrar este vehiculo')">
                                </form>
                            </td>
                        @endauth
                    @endif
                    <td><a class="rounded bg-blue-400 text-white" href="{{route('titular.show',$titular)}}">Detalles</a></td>
                </tr>
            </table>
        </div>   
    @endforeach
    {{$titulares->links()}}
@endsection