@extends('layouts.layout')

@section('title', "Courses-show $thisCourse->id")

@section('content')

    <h1>Bienvenido al curso {{$thisCourse->name}}</h1>
    <p><strong>Categoria: {{$thisCourse->category}}</strong></p>
    <p><strong>Descripción: {{$thisCourse->description}}</strong></p>
    
    <br>
    <a href="{{route('courses.index')}}">Volver a cursos</a>
@endsection




