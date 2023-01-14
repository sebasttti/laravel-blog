
@extends('layouts.layout')

@section('title', 'Courses-edit')

@section('content')

<h1>Editar el curso: {{$course->name}}</h1>

    <form action="{{ route('courses.update',$course->id) }}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{$course->name}}">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea type="text" name="description" rows="5">{{$course->description}}</textarea>
        </label>
        <br>
        <label>
            Categoría:<br>
            <select name="category" value="{{$course->category}}">
                <option value="Web development">Web development</option>
                <option value="Mobile development">Mobile development</option>
            </select>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>

@endsection

