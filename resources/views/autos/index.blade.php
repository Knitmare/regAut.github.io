@extends('layout')
@section('title')
    infracciones
@endsection
@section('content')
    <h2 class=" font-semibold text-left text-3xl underline">Listado de vehiculos</h2>
    @if(Route::has('login'))
        @auth
        <a class="rounded bg-blue-400 text-white text-xl px-3" href="{{route('auto.create')}}">Crear</a>
        @endauth
    @endif
    @foreach ($autos as $auto)
        <div class="text-xl ">
            <table class="table w-full text-left rtl:text-right sm:pl-6 border-collapse border-black ">
                <tr class="content-center border border-black">
                    <th scope="col" class="px-6 py-3">Id del vehiculo</th>
                    <th scope="col" class="px-6 py-3">Nombre titular</th>
                    <th scope="col" class="px-6 py-3">Apellido titular</th>
                    <th scope="col" class="px-6 py-3">Marca</th>
                    <th scope="col" class="px-6 py-3">Modelo</th>
                    <th scope="col" class="px-6 py-3">Patente</th>
                    <th scope="col" class="px-6 py-3">tipo</th>
                    <th cope="col" class="px-6 py-3">Acciones</th>
                </tr>
                <tr class="content-center border border-black">
                    <td class="px-6 py-4">{{ $auto->id }}</td>
                    <td class="px-6 py-4">{{ DB::table('titulares')->where('id', $auto->titular_id)->value('nombre') }}</td>
                    <td class="px-6 py-4">{{ DB::table('titulares')->where('id', $auto->titular_id)->value('apellido') }}</td>
                    <td class="px-6 py-4">{{ $auto->marca }}</td>
                    <td class="px-6 py-4">{{ $auto->modelo }}</td>
                    <td class="px-6 py-4">{{ $auto->patente }}</td>
                    <td class="px-6 py-4">{{ $auto->tipo }}</td>
                    @if (Route::has('login'))
                        @auth
                            <td><a class="rounded bg-blue-400 text-white" href="{{route('auto.edit',$auto)}}">Editar</a></td>
                            <td> <form action="{{route('auto.destroy',$auto)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="rounded bg-red-600 text-white"onclick="return confirm('Deseas borrar este vehiculo')">
                                </form>
                            </td>
                        @endauth
                    @endif
                    <td><a class="rounded bg-blue-400 text-white" href="{{route('auto.show',$auto)}}">Detalles</a></td>
                </tr>
            </table>
        </div>
    @endforeach
    {{ $autos->links() }}
@endsection
