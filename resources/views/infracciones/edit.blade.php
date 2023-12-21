@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('infracciones.update',$infraccion)}}" method="POST">
        @csrf
        @method('PUT')
        @include('Infracciones._form')     
    </form>
@endsection