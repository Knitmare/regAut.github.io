@extends('layout')
@section('title')
    infracciones    
@endsection
@section('content')
    <h2 class="text-left font-semibold underline text-3xl ">Listado de infracciones</h2>
    @if(Route::has('login'))
        @auth
            <a class="rounded bg-blue-400 text-white text-xl px-3" href="{{route('infCreate')}}">Crear</a>
        @endauth
    @endif
    @foreach ($infracciones as $infraccion)
        <div class="text-xl ">
            <table class="table w-full text-left rtl:text-right sm:pl-6 border-collapse border-black ">
                <tr class="content-center border border-black">
                    <th scope="col" class="px-6 py-3">Id de la infraccion</th>
                    <th scope="col" class="px-6 py-3">Id del vehiculo</th>
                    <th scope="col" class="px-6 py-3">Fecha</th>
                    <th scope="col" class="px-6 py-3">Descripcion</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                    <th cope="col" class="px-6 py-3">Acciones</th>
                </tr>
                <tr class="content-center border border-black">
                    <td class="px-6 py-4" >{{$infraccion->id}}</td>
                    <td class="px-6 py-4" >{{$infraccion->auto_id}}</td>
                    <td class="px-6 py-4">{{$infraccion->fecha}}</td>
                    <td class="px-6 py-4">{{$infraccion->descripcion}}</td>
                    <td class="px-6 py-4">{{$infraccion->tipo}}</td>
                    @if (Route::has('login'))
                        @auth
                            <td><a class="rounded bg-blue-400 text-white" href="{{route('infEdit',$infraccion)}}">Editar</a></td>
                            <td> <form action="{{route('infracciones.destroy',$infraccion)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="rounded bg-red-600 text-white"onclick="return confirm('Deseas borrar este vehiculo')">
                                </form>
                            </td>
                        @endauth
                    @endif
                    <td><a class="rounded bg-blue-400 text-white" href="{{route('infracciones.show',$infraccion)}}">Detalles</a></td>
                </tr>
            </table>
        </div>   
    @endforeach
    {{$infracciones->links()}}
@endsection