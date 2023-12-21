@extends('layout')
@section('title')
    Editar
@endsection
@section('content')
    <form action="{{route('titular.update',$titular)}}" method="POST">
        @csrf
        @method('PUT')
        @include('titular._form')     
    </form>
@endsection