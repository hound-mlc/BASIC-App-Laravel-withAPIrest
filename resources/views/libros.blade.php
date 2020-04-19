@extends('layout')

@section('titulo')
    <h2>Lista de libros</h2>
@endsection

@section('contenido')
    @forelse ($libros as $item)
    <div>
        <h4><a href="{{route('libros.show',['libro'=>$item->id ])}}">{{$item->titulo}} de {{$item->autor}}</a></h4>
        <img src="{{$item->imagen}}"/>
    </div>
    @empty
        <h2>No hay ningún libro imbecil</h2>
    @endforelse
@endsection