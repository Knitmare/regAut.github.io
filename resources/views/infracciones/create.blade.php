@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('infracciones.store',$infraccion)}}" method="POST" >
        @csrf
        @include('infracciones._form')
          
    </form>
@endsection