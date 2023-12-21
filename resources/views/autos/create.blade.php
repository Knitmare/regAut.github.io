@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('auto.store',$auto)}}" method="POST">
        @csrf
        @include('autos._form')
          
    </form>
@endsection