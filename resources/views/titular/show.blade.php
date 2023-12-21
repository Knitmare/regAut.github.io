@extends('layout')
@section('title')
    Mostrar
@endsection
@section('content')
    <div class="items-center text-center justify-center font-bold text-3xl py-10 px-10">
       <label for=""class="py-10 " >Nombre: </label> <label for="">{{$titular->nombre}}</label><br>
        <label for=""class="py-10 ">Apellido: </label><label for="">{{$titular->apellido}}</label><br>
        <label for=""class="py-10">DNI: </label><label for="">{{$titular->dni}}</label><br>
        <label for=""class="py-10" >Domicilio: </label><label for="">{{$titular->domicilio}}</label><br>
        <label for=""class="py-10" >Cantidad de vehiculos registrados: </label><label for="">{{DB::table('autos')->where('titular_id', $titular->id)->count()}}</label>
    </div>
@endsection