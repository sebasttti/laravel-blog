@extends('layouts.layout')

@section('title', 'Courses-creatre')

@section('content')

    <h1>Esta es la seccioń de cursos</h1>

    <a href="{{route("courses.create")}}">Crear curso</a>

    <ul>
        @foreach ($courses as $eachCourse)
            <li>
                <a href="{{route("courses.show",$eachCourse)}}">{{$eachCourse->name}}</a>
            </li>
        @endforeach
    </ul>

    {{-- Sirve para crear paginadores de forma automatica --}}

    {{$courses->links()}}

@endsection
