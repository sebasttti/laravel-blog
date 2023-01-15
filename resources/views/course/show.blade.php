@extends('layouts.layout')

@section('title', "Courses-show $course->id")

@section('content')

    <h1>Bienvenido al curso {{$course->name}}</h1>
    <p><strong>Categoria: {{$course->category}}</strong></p>
    <p><strong>Descripción: {{$course->description}}</strong></p>
    
    <br>
    <form action="{{route('courses.destroy', $course)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Elminar</button>
    </form>
    <br>
    <a href="{{route('courses.edit',$course)}}">Editar curso</a>
    <br>
    <a href="{{route('courses.index')}}">Volver a cursos</a>
@endsection




