@extends('layout')

@section('titulo')
    <h2>{{$libro->titulo}}</h2>
@endsection

@section('contenido')
    <h4>Autor: {{$libro->autor}}</h4>
    <img src="{{$libro->imagen}}" height="500px" width="300px"/>

    <form method="POST" action="{{route('libros.destroy',['libro'=>$libro->id ])}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar" />
    </form>
@endsection