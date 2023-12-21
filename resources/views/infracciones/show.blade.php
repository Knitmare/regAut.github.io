@extends('layout')
@section('title')
    Mostrar
@endsection
@section('content')
    <div class="items-center text-center justify-center font-bold text-3xl py-10 px-10">
       <label for=""class="py-10 " >Id del vehiculo: </label> <label for="">{{$infraccione->auto_id}}</label><br>
        <label for=""class="py-10 ">Id de la infraccion: </label><label for="">{{$infraccione->id}}</label><br>
        <label for=""class="py-10">Fecha: </label><label for="">{{$infraccione->fecha}}</label><br>
        <label for=""class="py-10" >Tipo: </label><label for="">{{$infraccione->tipo}}</label><br>
        <label for=""class="py-10" >Cantidad de infracciones de este vehiculo: </label><label for="">{{DB::table('infracciones')->where('auto_id', $infraccione->auto_id)->count()}}</label><br>
        <label for=""class="py-10" >Descripcion: </label><p>{{$infraccione->descripcion}}</p>
    </div>
@endsection