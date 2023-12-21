@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('titular.store',$titular)}}" method="POST">
        @csrf
        @include('titular._form')
          
    </form>
@endsection