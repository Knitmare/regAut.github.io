@extends('layout')
@section('title')
    infracciones    
@endsection
@section('content') 
    <div class="text-xl content-center  ">
        <div class="text-3xl underline font-semibold">
            <h2>Seleccione que desea hacer</h2>
        </div>
        <div class=" container btn-cont my-20 mx-40">
            <div class=" w-full  h-screen gap-3 px-20 pb-4">
                <div class=" text-center flex justify-center ">
                    <div class="px-10">
                        <a href="{{route('infracciones.index')}}"class="rounded bg-blue-300 text-white mx-auto w-96"><img src="{{URL('storage/img/infraccion.jpg')}}" class=" float-left h-96 w-96 mx-auto">consultar Infracciones</a>
                    </div>    
                    <div class="px-10">
                        <a href="{{route('auto.index')}}"class="rounded bg-blue-300 text-white mx-auto w-96 "><img src="{{URL('storage/img/autos.jpg')}}" class=" mx-auto float-center h-96 w-96">Consultar Vehiculos</a>
                    </div>
                    <div class="px-10">
                        <a href="{{route('titular.index')}}"class="rounded bg-blue-300 text-white mx-auto w-96 "><img src="{{URL('storage/img/conductor.jpg')}}"class="mx-auto float-right h-96 w-96">Consultar Titulares</a>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection