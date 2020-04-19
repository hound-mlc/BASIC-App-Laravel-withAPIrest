@extends('layout')

@section('titulo')
    <h2>Añadir libro</h2>
@endsection

@section('contenido')
    <form method="POST" action="{{route('libros.store')}}">
        @csrf
        <input name="titulo" placeholder="Titulo" size="40" type="text"/><br>
        <input name="autor" placeholder="Autor" size="40" type="text"/><br>
        <input name="url" placeholder="URL imagen" size="40" type="text"/><br>
        <input type="submit" name="Submit" value="Submit"/>
    </form>
@endsection