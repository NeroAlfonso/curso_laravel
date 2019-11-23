@extends('plantilla')
@section('titulo', 'Proyectos')
@section('content')
    <h1>Proyectos</h1>
    @if($proyectos)
        @foreach($proyectos as $proyecto)
            <li>{{$proyecto['titulo']}}</li>
        @endforeach
    @else
        <li>Sin proyectos</li>
    @endif
@endsection