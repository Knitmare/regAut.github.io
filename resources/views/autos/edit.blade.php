@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('auto.update',$auto)}}" method="POST" >
        @csrf
        @method('PUT')
        @include('autos._form')
          
    </form>
@endsection