@extends('layout')
@section('title')
    Mostrar
@endsection
@section('content')
    <div class="items-center text-center justify-center font-bold text-3xl py-10 px-10">
       <label for=""class="py-10 " >Id del vehiculo: </label> <label for="">{{$auto->id}}</label><br>
        <label for=""class="py-10 ">Id del titular: </label><label for="">{{$auto->titular_id}}</label><br>
        <label for=""class="py-10" >Nombre del titular: </label><label for="">{{DB::table('titulares')->where('id', $auto->titular_id)->value('nombre')}}</label><br>
        <label for=""class="py-10" >Apellido: </label><label for="">{{DB::table('titulares')->where('id', $auto->titular_id)->value('apellido')}}</label><br>
        <label for=""class="py-10">Marca: </label><label for="">{{$auto->marca}}</label><br>
        <label for=""class="py-10" >Modelo: </label><label for="">{{$auto->modelo}}</label><br>
        <label for=""class="py-10" >Patente: </label><label for="">{{$auto->patente}}</label><br>
        <label for=""class="py-10" >Tipo de vehiculo: </label><label for="">{{$auto->tipo}}</label>
    </div>
@endsection